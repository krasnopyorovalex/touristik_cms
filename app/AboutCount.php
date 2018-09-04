<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutCount extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['count', 'icon', 'name', 'pos'];
}
