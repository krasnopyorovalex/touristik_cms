<?php

namespace App\Domain\Image\Commands;

use App\Http\Requests\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;

/**
 * Class UploadImageCommand
 * @package App\Domain\Image\Commands
 */
class UploadImageCommand
{
    use DispatchesJobs;

    /**
     * @var Request
     */
    private $request;

    /**
     * @var int
     */
    private $imageableId;

    /**
     * @var string
     */
    private $imageableType;
    /**
     * @var bool
     */
    private $optimize;

    /**
     * UploadImageCommand constructor.
     * @param Request $request
     * @param int $imageableId
     * @param string $imageableType
     */
    public function __construct(Request $request, int $imageableId, string $imageableType, bool $optimize = false)
    {
        $this->request = $request;
        $this->imageableId = $imageableId;
        $this->imageableType = $imageableType;
        $this->optimize = $optimize;
    }

    /**
     * @return bool
     */
    public function handle(): bool
    {
        $path = $this->request->file('image')->store('public/images');

        if ($this->optimize) {
            $img = (new ImageManager())->make(Storage::path($path));
            $img->widen(390);
            $img->save(Storage::path($path));
        }

        return $this->dispatch(new CreateImageCommand([
            'path' => Storage::url($path),
            'imageable_id' => $this->imageableId,
            'imageable_type' => $this->imageableType
        ]));
    }

}