<?php

namespace Ianrizky\LaravelBlogStarter\Database\Factories;

use Ianrizky\LaravelBlogStarter\App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * {@inheritDoc}
     */
    protected $model = Article::class;

    /**
     * {@inheritDoc}
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word,
            'meta' => $this->faker->randomHtml,
            'content' => $this->faker->paragraph,
        ];
    }
}
