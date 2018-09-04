<?php

namespace App\Domain\Banner\Commands;

use App\Domain\Banner\Queries\GetBannerByIdQuery;
use App\Domain\Image\Commands\DeleteImageCommand;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class DeleteBannerCommand
 * @package App\Domain\Banner\Commands
 */
class DeleteBannerCommand
{

    use DispatchesJobs;

    /**
     * @var int
     */
    private $id;

    /**
     * DeleteBannerCommand constructor.
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
        $banner = $this->dispatch(new GetBannerByIdQuery($this->id));

        if($banner->image) {
            $this->dispatch(new DeleteImageCommand($banner->image));
        }

        return $banner->delete();
    }

}