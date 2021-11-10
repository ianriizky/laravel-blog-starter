<?php

namespace Ianrizky\LaravelBlogStarter\App\Models;

use Ianrizky\LaravelBlogStarter\App\Support\Models\HandleModel;
use Ianrizky\LaravelBlogStarter\App\Support\Models\UseTablePrefix;
use Illuminate\Database\Eloquent\Model as BaseModel;

abstract class Model extends BaseModel
{
    use HandleModel,
        UseTablePrefix;
}
