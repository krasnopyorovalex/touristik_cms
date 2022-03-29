<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Guid extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    /**
     * @return MorphOne
     */
    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    /**
     * @return string
     */
    public function getUrlAttribute(): string
    {
        return route("guid.show", $this->id);
    }
}
