<?php

namespace Ianrizky\LaravelBlogStarter\App\Models\Concerns\Article;

use Ianrizky\LaravelBlogStarter\App\Models\Category;
use Ianrizky\LaravelBlogStarter\App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Str;

/**
 * @property int|null $category_id Foreign key of \Ianrizky\LaravelBlogStarter\App\Models\Category.
 * @property-read \Ianrizky\LaravelBlogStarter\App\Models\Category|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection<\Ianrizky\LaravelBlogStarter\App\Models\Tag> $tags
 *
 * @see \Ianrizky\LaravelBlogStarter\App\Models\Article
 */
trait Relation
{
    /**
     * Define an inverse one-to-one or many relationship with \Ianrizky\LaravelBlogStarter\App\Models\Category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(config('laravel-blog-starter.model.category', Category::class));
    }

    /**
     * Return \Ianrizky\LaravelBlogStarter\App\Models\Category model relation value.
     *
     * @return \Ianrizky\LaravelBlogStarter\App\Models\Category|null
     */
    public function getCategoryRelationValue(): ?Category
    {
        return $this->getRelationValue('category');
    }

    /**
     * Set \Ianrizky\LaravelBlogStarter\App\Models\Category model relation value.
     *
     * @param  \Ianrizky\LaravelBlogStarter\App\Models\Category|null  $category
     * @return $this
     */
    public function setCategoryRelationValue(?Category $category)
    {
        if ($category) {
            $this->category()->associate($category);
        }

        return $this;
    }

    /**
     * Define a many-to-many relationship with \Ianrizky\LaravelBlogStarter\App\Models\Tag.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function tags(): MorphToMany
    {
        return $this->morphToMany(
            config('laravel-blog-started.model.tag', Tag::class),
            'taggable',
            config('laravel-blog-starter.table_prefix') . Str::plural(config('laravel-blog-starter.model.taggable'))
        )->withTimestamps();
    }

    /**
     * Return collection of \Ianrizky\LaravelBlogStarter\App\Models\Tag model relation value.
     *
     * @return \Illuminate\Database\Eloquent\Collection<\Ianrizky\LaravelBlogStarter\App\Models\Tag>
     */
    public function getTagsRelationValue(): Collection
    {
        return $this->getCollectionValue('tags', Tag::class);
    }

    /**
     * Set collection of \Ianrizky\LaravelBlogStarter\App\Models\Tag model relation value.
     *
     * @param  \Illuminate\Database\Eloquent\Collection<\Ianrizky\LaravelBlogStarter\App\Models\Tag>  $tags
     * @return $this
     */
    public function setTagsRelationValue(Collection $tags)
    {
        if ($this->isCollectionValid($tags, Tag::class)) {
            $this->setRelation('tags', $tags);
        }

        return $this;
    }
}
