<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Article
 *
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $description
 * @property string $text
 * @property string $preview
 * @property string $alias
 * @property string $is_published
 * @property \Illuminate\Support\Carbon $published_at
 * @property-read \App\Image $image
 * @mixin \Eloquent
 */
class Article extends Model
{

    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['name', 'title', 'description', 'text', 'preview', 'alias', 'is_published', 'published_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }
}
