<?php

namespace Ianrizky\LaravelBlogStarter\App\Models;

use Ianrizky\LaravelBlogStarter\App\Support\Models\HandleModel;
use Ianrizky\LaravelBlogStarter\App\Support\Models\UseTablePrefix;
use Illuminate\Database\Eloquent\Model as BaseModel;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

abstract class Model extends BaseModel implements HasMedia
{
    use HandleModel,
        InteractsWithMedia,
        UseTablePrefix;
}
