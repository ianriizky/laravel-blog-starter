<?php

namespace Ianrizky\LaravelBlogStarter\App\Models\Concerns\Tag;

use Ianrizky\LaravelBlogStarter\App\Models\Article;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Str;

/**
 * @property-read \Illuminate\Database\Eloquent\Collection<\Ianrizky\LaravelBlogStarter\App\Models\Article> $articles
 *
 * @see \Ianrizky\LaravelBlogStarter\App\Models\Tag
 */
trait Relation
{
    /**
     * Define a many-to-many relationship with \Ianrizky\LaravelBlogStarter\App\Models\Article.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function articles(): MorphToMany
    {
        return $this->morphedByMany(
            config('laravel-blog-started.model.article', Article::class),
            'taggable',
            config('laravel-blog-starter.table_prefix').Str::plural(config('laravel-blog-starter.model.taggable'))
        )->withTimestamps();
    }

    /**
     * Return collection of \Ianrizky\LaravelBlogStarter\App\Models\Article model relation value.
     *
     * @return \Illuminate\Database\Eloquent\Collection<\Ianrizky\LaravelBlogStarter\App\Models\Article>
     */
    public function getArticlesRelationValue(): Collection
    {
        return $this->getCollectionValue('articles', Article::class);
    }

    /**
     * Set collection of \Ianrizky\LaravelBlogStarter\App\Models\Article model relation value.
     *
     * @param  \Illuminate\Database\Eloquent\Collection<\Ianrizky\LaravelBlogStarter\App\Models\Article>  $articles
     * @return $this
     */
    public function setArticlesRelationValue(Collection $articles)
    {
        if ($this->isCollectionValid($articles, Article::class)) {
            $this->setRelation('articles', $articles);
        }

        return $this;
    }
}
