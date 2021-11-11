<?php

namespace Ianrizky\LaravelBlogStarter\App\Support\Models;

use DomainException;
use Illuminate\Database\Connection;
use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use InvalidArgumentException;

trait HandleModel
{
    /**
     * Get the table associated with the model in static way.
     *
     * @return string
     */
    public static function getTableName(): string
    {
        return (new static)->getTable();
    }

    /**
     * Get the current connection name for the model in static way.
     *
     * @return string|null
     */
    public static function connectionName(): ?string
    {
        return (new static)->getConnectionName();
    }

    /**
     * Get the database connection for the model in static way.
     *
     * @return \Illuminate\Database\Connection
     */
    public static function connection(): Connection
    {
        return static::resolveConnection(static::connectionName());
    }

    /**
     * Start a new database transaction for the model in static way.
     *
     * @return \Illuminate\Database\Connection
     */
    public static function beginTransaction(): Connection
    {
        return tap(static::connection(), function (ConnectionInterface $connection) {
            return $connection->beginTransaction();
        });
    }

    /**
     * Determine if the model relation value has been modified.
     *
     * @param  array|string|null  $relations
     * @return bool
     *
     * @throws \InvalidArgumentException
     */
    public function isRelationValueDirty($relations = null): bool
    {
        $attributes = array_map(function ($name) {
            $relation = $this->$name();

            if (! ($relation instanceof Relation && method_exists($relation, 'getForeignKeyName'))) {
                throw new InvalidArgumentException(sprintf(
                    'The given relation name %s on model class %s must return a relationship instance and has getForeignKeyName() method.',
                    $name, static::class
                ));
            }

            return $relation->getForeignKeyName();
        }, is_array($relations) ? $relations : func_get_args());

        return $this->isDirty($attributes);
    }

    /**
     * Determine whether the given model collection is valid with the given class name.
     *
     * @param  \Illuminate\Database\Eloquent\Collection<\Illuminate\Database\Eloquent\Model>  $models
     * @param  string  $className
     * @param  bool  $throwExceptionWhenNotValid
     * @return bool
     *
     * @throws \DomainException
     */
    protected function isCollectionValid(Collection $models, string $className, bool $throwExceptionWhenNotValid = true): bool
    {
        return $models->every(function (Model $model) use ($className, $throwExceptionWhenNotValid) {
            $isValid = $model instanceof $className;

            if (! $isValid && $throwExceptionWhenNotValid) {
                throw new DomainException(sprintf(
                    'Invalid %s model type, %s given', $className, get_class($model)
                ));
            }

            return $isValid;
        });
    }

    /**
     * Return collection value from specified model relation.
     *
     * @param  string  $key
     * @param  string  $className
     * @return \Illuminate\Database\Eloquent\Collection<\Illuminate\Database\Eloquent\Model>
     *
     * @throws \DomainException
     */
    public function getCollectionValue(string $key, string $className): Collection
    {
        $this->isCollectionValid(
            $models = $this->getRelationValue($key), $className
        );

        return $models;
    }
}
