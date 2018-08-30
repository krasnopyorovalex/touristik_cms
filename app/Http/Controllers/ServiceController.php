<?php

namespace App\Http\Controllers;

/**
 * Class ServiceController
 * @package App\Http\Controllers
 */
class ServiceController extends Controller
{

    /**
     * @param string $alias
     */
    public function show(string $alias)
    {
        dd($alias);
    }
}
