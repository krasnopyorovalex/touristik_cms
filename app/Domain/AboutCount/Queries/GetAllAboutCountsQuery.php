<?php

namespace App\Domain\AboutCount\Queries;

use App\AboutCount;

/**
 * Class GetAllAboutCountsQuery
 * @package App\Domain\AboutCount\Queries
 */
class GetAllAboutCountsQuery
{
    /**
     * Execute the job.
     */
    public function handle()
    {
        return AboutCount::all();
    }
}