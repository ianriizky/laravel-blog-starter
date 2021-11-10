<?php

use Ianrizky\LaravelBlogStarter\App\Models\Tag;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

/**
 * @see \Ianrizky\LaravelBlogStarter\App\Models\Tag
 */
return new class extends Migration
{
    /**
     * Taggable name value from the configuration using in the migration.
     *
     * @var string
     */
    protected $taggableName;

    /**
     * Table name using in the migration.
     *
     * @var string
     */
    protected $tableName;

    /**
     * Create a new instance class.
     *
     * @return void
     */
    public function __construct()
    {
        $this->taggableName = config('laravel-blog-starter.model.taggable');
        $this->tableName = config('laravel-blog-starter.table_prefix') . Str::plural($this->taggableName);
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $taggableName = config('laravel-blog-starter.model.taggable');

        Schema::create($this->tableName, function (Blueprint $table) use ($taggableName) {
            $tagModelClassName = config('laravel-blog-starter.model.tag', Tag::class);

            $table->id();

            $table->foreignIdFor($tagModelClassName)
                ->nullable()
                ->constrained($tagModelClassName::getTableName())
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->morphs($taggableName);
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
        Schema::dropIfExists($this->tableName);
    }
};
