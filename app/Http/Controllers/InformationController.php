<?php

namespace App\Http\Controllers;

/**
 * Class InformationController
 * @package App\Http\Controllers
 */
class InformationController extends Controller
{

    /**
     * @param string $alias
     */
    public function show(string $alias)
    {
        dd($alias);
    }
}
