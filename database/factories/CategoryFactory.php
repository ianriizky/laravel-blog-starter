<?php

namespace Ianrizky\LaravelBlogStarter\Database\Factories;

use Ianrizky\LaravelBlogStarter\App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * {@inheritDoc}
     */
    protected $model = Category::class;

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
