<?php

namespace App\Domain\CatalogProductImage\Commands;

use App\CatalogProductImage;
use App\Services\UploadImagesService;

/**
 * Class CreateCatalogProductImageCommand
 * @package App\Domain\CatalogProductImage\Commands
 */
class CreateCatalogProductImageCommand
{

    private $uploadImage;

    /**
     * CreateCatalogProductImageCommand constructor.
     * @param UploadImagesService $uploadImage
     */
    public function __construct(UploadImagesService $uploadImage)
    {
        $this->uploadImage = $uploadImage;
    }

    /**
     * @return bool
     */
    public function handle(): bool
    {
        $productImage = new CatalogProductImage();
        $productImage->basename = $this->uploadImage->getImageHashName();
        $productImage->ext = $this->uploadImage->getExt();
        $productImage->product_id = $this->uploadImage->getEntityId();

        return $productImage->save();
    }

}