<?php

namespace App\Services;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

/**
 * Class UploadGalleryImagesService
 * @package App\Services
 */
class UploadGalleryImagesService
{
    /**
     * @var \Illuminate\Http\UploadedFile
     */
    private $image;

    /**
     * @var int
     */
    private $galleryId;

    /**
     * @param Request $request
     * @return $this
     */
    public function upload(Request $request): self
    {
        $this->galleryId = intval($request->post('galleryId'));
        $this->image = $request->file('upload');

        $this->image->store($this->getSavePath());
        $this->createThumb();

        return $this;
    }

    /**
     * @return string
     */
    public function getImageHashName():string
    {
        $chunks = explode('.', $this->image->hashName());

        return strval(array_shift($chunks));
    }

    /**
     * @return string
     */
    public function getExt(): string
    {
        return $this->image->extension();
    }

    /**
     * @return int
     */
    public function getGalleryId(): int
    {
        return $this->galleryId;
    }

    /**
     * @return string
     */
    private function getSavePath(): string
    {
        return 'public/gallery/' . $this->galleryId . '/';
    }

    private function createThumb():void
    {
        (new ImageManager())->make($this->image)->resize(192, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save(public_path('storage/gallery/' . $this->galleryId .'/' . $this->getImageHashName() . '_thumb.' . $this->getExt()));
    }
}