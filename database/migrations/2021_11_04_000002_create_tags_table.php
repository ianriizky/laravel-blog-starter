<?php

use Ianrizky\LaravelBlogStarter\App\Models\Tag;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * @see \Ianrizky\LaravelBlogStarter\App\Models\Tag
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
        $this->modelClassName = config('laravel-blog-starter.model.tag', Tag::class);
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->modelClassName::getTableName(), function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('description');
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
