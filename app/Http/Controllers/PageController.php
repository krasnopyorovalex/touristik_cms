<?php

namespace App\Http\Controllers;

class PageController extends Controller
{

    /**
     * @param string $alias
     */
    public function show(string $alias = 'index')
    {
        dd($alias);
    }
}
