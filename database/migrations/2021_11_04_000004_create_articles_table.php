<?php

use Ianrizky\LaravelBlogStarter\App\Models\Article;
use Ianrizky\LaravelBlogStarter\App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * @see \Ianrizky\LaravelBlogStarter\App\Models\Article
 */
return new class extends Migration
{
    /**
     * Class name of the model using in the migration.
     *
     * @var string
     */
    protected $modelClassName;

    /**
     * Create a new instance class.
     *
     * @return void
     */
    public function __construct()
    {
        $this->modelClassName = config('laravel-blog-starter.model.article', Article::class);
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->modelClassName::getTableName(), function (Blueprint $table) {
            $categoryModelClassName = config('laravel-blog-starter.model.category', Category::class);

            $table->id();
            $table->foreignIdFor($categoryModelClassName)
                ->nullable()
                ->constrained($categoryModelClassName::getTableName())
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->json('title');
            $table->string($this->modelClassName::SLUG_FIELDNAME);
            $table->text('meta');
            $table->json('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->modelClassName::getTableName());
    }
};
