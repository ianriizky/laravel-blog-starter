<?php

namespace Ianrizky\LaravelBlogStarter\Database\Seeders;

use Ianrizky\LaravelBlogStarter\App\Models\Article;
use Ianrizky\LaravelBlogStarter\App\Models\Category;
use Ianrizky\LaravelBlogStarter\App\Models\Tag;
use Illuminate\Database\Seeder;

class TestingDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Article::factory()
            ->for(Category::factory())
            ->has(Tag::factory()->count(3))
            ->count(3)
            ->create();
    }
}
