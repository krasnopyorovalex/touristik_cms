<?php

namespace App\Http\ViewComposers;

use App\Domain\Article\Queries\GetAllArticlesQuery;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class ArticleComposer
 * @package App\Http\ViewComposers
 */
class ArticleComposer
{
    use DispatchesJobs;

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $articles = $this->dispatch(new GetAllArticlesQuery(true));

        $view->with('articles', $articles);
    }
}