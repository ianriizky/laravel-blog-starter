<?php

namespace Ianrizky\LaravelBlogStarter\Database\Factories;

use Ianrizky\LaravelBlogStarter\App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * {@inheritDoc}
     */
    protected $model = Tag::class;

    /**
     * {@inheritDoc}
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->paragraph,
        ];
    }
}
