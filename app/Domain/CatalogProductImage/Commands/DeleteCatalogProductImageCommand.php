<?php

namespace App\Domain\CatalogProductImage\Commands;

use App\Domain\CatalogProductImage\Queries\GetCatalogProductImageByIdQuery;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class DeleteCatalogProductImageCommand
 * @package App\Domain\CatalogProductImage\Commands
 */
class DeleteCatalogProductImageCommand
{

    use DispatchesJobs;

    private $id;

    /**
     * DeleteGalleryImageCommand constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return bool
     */
    public function handle(): bool
    {
        $image = $this->dispatch(new GetCatalogProductImageByIdQuery($this->id));

        \Storage::delete([
            'public/product/' . $image->product_id . '/' . $image->basename . '.' . $image->ext,
            'public/product/' . $image->product_id . '/' . $image->basename . '_thumb.' . $image->ext
        ]);

        return $image->delete();
    }

}