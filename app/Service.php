<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['parent_id', 'name', 'title', 'description', 'preview', 'text', 'alias', 'is_published', 'pos'];
}
