<?php

namespace App\Domain\CatalogProduct\Queries;

use App\Catalog;
use App\CatalogProduct;

/**
 * Class GetAllCatalogsQuery
 * @property Catalog catalog
 * @package App\Domain\CatalogProduct\Queries
 */
class GetAllCatalogProductsQuery
{
    /**
     * @var int
     */
    private $catalog;

    private $excludedId;

    /**
     * GetAllCatalogProductsQuery constructor.
     * @param int $catalog
     * @param null $excludedId
     */
    public function __construct(int $catalog, $excludedId = null)
    {
        $this->catalog = $catalog;
        $this->excludedId = $excludedId;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $query = CatalogProduct::with(['catalog'])->where('catalog_id', $this->catalog)->orderBy('pos');

        if ($this->excludedId) {
            $query->where('id', '<>', $this->excludedId);
        }

        return $query->get();
    }
}