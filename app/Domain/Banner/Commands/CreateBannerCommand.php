<?php

namespace App\Domain\Banner\Commands;

use App\Domain\Image\Commands\UploadImageCommand;
use App\Http\Requests\Request;
use App\Banner;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class CreateBannerCommand
 * @package App\Domain\Banner\Commands
 */
class CreateBannerCommand
{
    use DispatchesJobs;

    private $request;

    /**
     * CreateBannerCommand constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return bool
     */
    public function handle(): bool
    {
        $banner = new Banner();
        $banner->fill($this->request->all());
        $banner->save();

        if($this->request->has('image')) {
            return $this->dispatch(new UploadImageCommand($this->request, $banner->id, Banner::class));
        }

        return true;
    }

}