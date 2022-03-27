<?php

namespace App\Console\Commands;

ini_set('memory_limit', '1024M');

use App\GalleryImage;
use App\Service;
use Illuminate\Console\Command;
use Intervention\Image\ImageManager;
use Storage;

class OptimizeImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:optimize-images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set to db catalog and items from source site url';

    /**
     * @throws \Exception
     */
    public function handle()
    {
        $galleryImages = GalleryImage::all();

        foreach ($galleryImages as $file) {
            $this->info($file->getPath());
            $img = (new ImageManager())->make(Storage::path('public/gallery/'. $file->gallery_id .'/'.$file->basename.'.'.$file->ext));

            $img->widen(710);
            $img->save(Storage::path('public/gallery/'. $file->gallery_id .'/'.$file->basename.'.'.$file->ext));
        }

//        $services = Service::all();
//
//        foreach ($services as $service) {
//            if ($service->image) {
//                $path = str_replace('/storage/', 'public/', $service->image->path);
//                if (file_exists(Storage::path($path))) {
//                    $this->info($service->image->path);
//
//                    $img = (new ImageManager())->make(Storage::path($path));
//                    $img->fit(390, 390);
//                    $img->save(Storage::path($path));
//                }
//            }
//        }

        $this->info('Well done!');
    }
}
