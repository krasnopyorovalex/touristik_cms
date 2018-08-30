<?php

namespace App\Domain\GalleryImage\Commands;

use App\GalleryImage;
use App\Services\UploadGalleryImagesService;

/**
 * Class CreateGalleryImageCommand
 * @package App\Domain\GalleryImage\Commands
 */
class CreateGalleryImageCommand
{

    private $uploadImage;

    /**
     * CreateGalleryImageCommand constructor.
     * @param UploadGalleryImagesService $uploadImage
     */
    public function __construct(UploadGalleryImagesService $uploadImage)
    {
        $this->uploadImage = $uploadImage;
    }

    /**
     * @return bool
     */
    public function handle(): bool
    {
        $galleryImage = new GalleryImage();
        $galleryImage->basename = $this->uploadImage->getImageHashName();
        $galleryImage->ext = $this->uploadImage->getExt();
        $galleryImage->gallery_id = $this->uploadImage->getGalleryId();

        return $galleryImage->save();
    }

}