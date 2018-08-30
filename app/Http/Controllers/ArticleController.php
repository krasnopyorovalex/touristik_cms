<?php

namespace App\Http\Controllers;

/**
 * Class ArticleController
 * @package App\Http\Controllers
 */
class ArticleController extends Controller
{

    /**
     * @param string $alias
     */
    public function show(string $alias)
    {
        dd($alias);
    }
}
