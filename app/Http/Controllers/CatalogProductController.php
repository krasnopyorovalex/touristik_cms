<?php

namespace App\Http\Controllers;

use App\Domain\CatalogProduct\Queries\GetCatalogProductByAliasQuery;

/**
 * Class CatalogProductController
 * @package App\Http\Controllers
 */
class CatalogProductController extends Controller
{

    /**
     * @param string $alias
     */
    public function show(string $alias)
    {
        $catalog = $this->dispatch(new GetCatalogProductByAliasQuery($alias));

        dd($catalog);
    }
}
