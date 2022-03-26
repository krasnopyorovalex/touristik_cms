<?php

namespace App\Domain\GalleryImage\Commands;

use App\GalleryImage;
use App\Services\UploadImagesService;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;

/**
 * Class CreateGalleryImageCommand
 * @package App\Domain\GalleryImage\Commands
 */
class CreateGalleryImageCommand
{

    private $uploadImage;

    /**
     * CreateGalleryImageCommand constructor.
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
        $galleryImage = new GalleryImage();
        $galleryImage->basename = $this->uploadImage->getImageHashName();
        $galleryImage->ext = $this->uploadImage->getExt();
        $galleryImage->gallery_id = $this->uploadImage->getEntityId();

        $path = Storage::path('public/gallery/'. $galleryImage->gallery_id .'/'.$galleryImage->basename.'.'.$galleryImage->ext);

        $img = (new ImageManager())->make(Storage::path($path));
        $img->fit(700);
        $img->save(Storage::path($path));

        return $galleryImage->save();
    }

}