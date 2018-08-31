<?php

namespace App\Http\Controllers;

use App\Domain\Catalog\Queries\GetCatalogByAliasQuery;

/**
 * Class CatalogController
 * @package App\Http\Controllers
 */
class CatalogController extends Controller
{

    /**
     * @param string $alias
     */
    public function show(string $alias)
    {
        $catalog = $this->dispatch(new GetCatalogByAliasQuery($alias));

        dd($catalog);
    }
}
