<?php

namespace Ianrizky\LaravelBlogStarter\App\Models;

use Ianrizky\LaravelBlogStarter\Database\Factories\ArticleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Article extends Model
{
    use HasFactory, HasSlug, HasTranslations,
        Concerns\Article\Attribute,
        Concerns\Article\Relation;

    /**
     * Field name of the "slug" attribute.
     *
     * @var string
     */
    const SLUG_FIELDNAME = 'slug';

    /**
     * {@inheritDoc}
     */
    protected $fillable = [
        'title',
        'slug',
        'meta',
        'content',
    ];

    /**
     * The attributes that are translatable.
     *
     * @var array
     */
    protected $translatable = [
        'title',
        'content',
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return ArticleFactory::new();
    }

    /**
     * Get the options for generating the slug.
     *
     * @return \Spatie\Sluggable\SlugOptions
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo(static::SLUG_FIELDNAME);
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteKeyName(): string
    {
        return static::SLUG_FIELDNAME;
    }
}
