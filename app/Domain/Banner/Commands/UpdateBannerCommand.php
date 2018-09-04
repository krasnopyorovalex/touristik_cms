<?php

namespace App\Domain\Banner\Commands;

use App\Banner;
use App\Domain\Banner\Queries\GetBannerByIdQuery;
use App\Domain\Image\Commands\DeleteImageCommand;
use App\Domain\Image\Commands\UploadImageCommand;
use App\Http\Requests\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class UpdateBannerCommand
 * @package App\Domain\Banner\Commands
 */
class UpdateBannerCommand
{

    use DispatchesJobs;

    private $request;
    private $id;

    /**
     * UpdateBannerCommand constructor.
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
        $banner = $this->dispatch(new GetBannerByIdQuery($this->id));

        if ($this->request->has('image')) {
            if ($banner->image) {
                $this->dispatch(new DeleteImageCommand($banner->image));
            }
            $this->dispatch(new UploadImageCommand($this->request, $banner->id, Banner::class));
        }

        return $banner->update($this->request->all());
    }

}