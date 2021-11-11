<?php

namespace Ianrizky\LaravelBlogStarter\App\Support\Models;

trait UsePostgreSQLConnection
{
    /**
     * Get the table morph name using on polymorphic relation associated with the model in static way (only for postgresql database connection).
     *
     * @param  string  $separator
     * @return string
     */
    public static function getMorphName(string $separator = '_'): string
    {
        $model = static::make();

        if (property_exists($model, 'morphName')) {
            return $model->morphName;
        }

        return $model->getTableWithSchema($separator);
    }

    /**
     * Return schema name of the current model.
     *
     * @return string|null
     */
    public function getSchemaName(): ?string
    {
        $connection = config('database.connections.'.$this->getConnectionName());

        return $connection['schema'] ?? 'public';
    }

    /**
     * Get the table associated with the model with its schema name.
     *
     * @param  string  $separator
     * @return string|null
     */
    public function getTableWithSchema(string $separator = '.'): ?string
    {
        return $this->getSchemaName().$separator.$this->getTable();
    }
}
