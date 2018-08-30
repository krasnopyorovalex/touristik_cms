<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'informations';

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
