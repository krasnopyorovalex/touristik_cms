<?php

namespace App\Domain\Information\Queries;

use App\Information;

/**
 * Class GetAllInformationsQuery
 * @package App\Domain\Information\Queries
 */
class GetAllInformationsQuery
{
    /**
     * Execute the job.
     */
    public function handle()
    {
        return Information::all();
    }
}