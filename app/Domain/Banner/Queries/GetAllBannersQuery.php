<?php

namespace App\Domain\Banner\Queries;

use App\Banner;

/**
 * Class GetAllBannersQuery
 * @package App\Domain\Banner\Queries
 */
class GetAllBannersQuery
{
    /**
     * Execute the job.
     */
    public function handle()
    {
        return Banner::all();
    }
}