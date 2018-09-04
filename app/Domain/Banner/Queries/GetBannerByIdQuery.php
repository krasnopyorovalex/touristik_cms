<?php

namespace App\Domain\Banner\Queries;

use App\Banner;

/**
 * Class GetBannerByIdQuery
 * @package App\Domain\Banner\Queries
 */
class GetBannerByIdQuery
{
    /**
     * @var int
     */
    private $id;

    /**
     * GetBannerByIdQuery constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        return Banner::findOrFail($this->id);
    }
}