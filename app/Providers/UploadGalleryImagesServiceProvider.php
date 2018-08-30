<?php

namespace App\Providers;

use App\Services\UploadGalleryImagesService;
use Illuminate\Support\ServiceProvider;

class UploadGalleryImagesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UploadGalleryImagesService::class, function () {
            return new UploadGalleryImagesService();
        });
    }
}
