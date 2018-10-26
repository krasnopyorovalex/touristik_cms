<?php

namespace App\Http\Controllers;

use App\Domain\Page\Queries\GetPageByAliasQuery;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * @param string $alias
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(string $alias = 'index'): View
    {
        $page = $this->dispatch(new GetPageByAliasQuery($alias));

        return view('page.index', ['page' => $page]);
    }
}