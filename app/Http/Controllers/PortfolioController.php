<?php

namespace App\Http\Controllers;

use App\Domain\Portfolio\Queries\GetPortfolioByAliasQuery;

/**
 * Class PortfolioController
 * @package App\Http\Controllers
 */
class PortfolioController extends Controller
{

    /**
     * @param string $alias
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(string $alias)
    {
        $portfolio = $this->dispatch(new GetPortfolioByAliasQuery($alias));

        return view('portfolio.index', [
            'portfolio' => $portfolio
        ]);
    }
}