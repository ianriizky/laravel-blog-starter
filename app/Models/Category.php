<?php

namespace Ianrizky\LaravelBlogStarter\App\Models;

use Ianrizky\LaravelBlogStarter\Database\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory,
        Concerns\Category\Attribute,
        Concerns\Category\Relation;

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
        return CategoryFactory::new();
    }
}
