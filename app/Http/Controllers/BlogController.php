<?php

namespace App\Http\Controllers;

use App\Domain\Article\Queries\GetArticleByAliasQuery;
use App\Domain\Article\Queries\GetNextArticleQuery;
use App\Domain\Article\Queries\GetPrevArticleQuery;

/**
 * Class BlogController
 * @package App\Http\Controllers
 */
class BlogController extends Controller
{

    /**
     * @param string $alias
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(string $alias)
    {
        $article = $this->dispatch(new GetArticleByAliasQuery($alias));
        $next = $this->dispatch(new GetNextArticleQuery($article));
        $prev = $this->dispatch(new GetPrevArticleQuery($article));

        return view('article.index', [
            'article' => $article,
            'next' => $next,
            'prev' => $prev
        ]);
    }
}