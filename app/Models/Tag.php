<?php

namespace Ianrizky\LaravelBlogStarter\App\Models;

use Ianrizky\LaravelBlogStarter\Database\Factories\TagFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory,
        Concerns\Tag\Attribute,
        Concerns\Tag\Relation;

    /**
     * {@inheritDoc}
     */
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return TagFactory::new();
    }
}
