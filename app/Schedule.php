<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public $timestamps = false;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'date'
    ];

    /**
     * @var array
     */
    protected $fillable = ['date_string', 'date', 'body', 'price', 'finished_at', 'link_to_yandex_disk'];
}
