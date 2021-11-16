<?php

namespace Ianrizky\LaravelBlogStarter\App\Models\Concerns\Category;

use Ianrizky\LaravelBlogStarter\App\Support\Config;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property-read \Illuminate\Database\Eloquent\Collection<Ianrizky\LaravelBlogStarter\App\Models\Article> $articles
 *
 * @see \Ianrizky\LaravelBlogStarter\App\Models\Category
 */
trait Relation
{
    /**
     * Define a one-to-many relationship with \Ianrizky\LaravelBlogStarter\App\Models\Article.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles(): HasMany
    {
        return $this->hasMany(Config\Model::modelClassName('article'));
    }
}
