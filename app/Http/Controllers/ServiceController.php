<?php

namespace App\Http\Controllers;

use App\Domain\Service\Queries\GetServiceByAliasQuery;

/**
 * Class ServiceController
 * @package App\Http\Controllers
 */
class ServiceController extends PageController
{
    /**
     * @param string $alias
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(string $alias = 'index')
    {
        try {
            $service = $this->dispatch(new GetServiceByAliasQuery($alias));
        } catch (\Exception $exception) {
            return parent::show($alias);
        }

        return view('service.index', ['service' => $service]);
    }
}