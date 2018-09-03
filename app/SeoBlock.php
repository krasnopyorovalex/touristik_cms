<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeoBlock extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['name', 'sys_name', 'value'];
}
