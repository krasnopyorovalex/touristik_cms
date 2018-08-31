<?php

namespace App\Domain\CatalogProduct\Commands;

use App\Domain\CatalogProduct\Queries\GetCatalogProductByIdQuery;
use App\Events\RedirectDetected;
use App\Http\Requests\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class UpdateCatalogProductCommand
 * @package App\Domain\CatalogProduct\Commands
 */
class UpdateCatalogProductCommand
{

    use DispatchesJobs;

    private $request;
    private $id;

    /**
     * UpdateCatalogCommand constructor.
     * @param int $id
     * @param Request $request
     */
    public function __construct(int $id, Request $request)
    {
        $this->id = $id;
        $this->request = $request;
    }

    /**
     * @return bool
     */
    public function handle(): bool
    {
        $catalogProduct = $this->dispatch(new GetCatalogProductByIdQuery($this->id));
        $urlNew = $this->request->post('alias');

        if ($catalogProduct->getOriginal('alias') != $urlNew) {
            event(new RedirectDetected($catalogProduct->getOriginal('alias'), $urlNew, 'catalog_product.show'));
        }

        $catalogProduct->relativeProducts()->sync($this->request->post('products'));

        return $catalogProduct->update($this->request->all());
    }

}