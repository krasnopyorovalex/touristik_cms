<?php

namespace App\Http\Controllers;

use App\Domain\Page\Queries\GetPageByAliasQuery;
use App\Page;
use App\Services\TextParserService;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * @var TextParserService
     */
    protected $parserService;

    /**
     * ServiceController constructor.
     * @param TextParserService $parserService
     */
    public function __construct(TextParserService $parserService)
    {
        $this->parserService = $parserService;
    }

    /**
     * @param string $alias
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function show(string $alias = 'index')
    {
        $page = $this->dispatch(new GetPageByAliasQuery($alias));
        $page->text = $this->parserService->parse($page);

        return view($page->template, ['page' => $page]);
    }
}