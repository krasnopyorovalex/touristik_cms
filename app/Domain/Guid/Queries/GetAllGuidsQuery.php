<?php

namespace App\Domain\Guid\Queries;

use App\Guid;

/**
 * Class GetAllGuidsQuery
 * @package App\Domain\Guid\Queries
 */
class GetAllGuidsQuery
{
    /**
     * Execute the job.
     */
    public function handle()
    {
        return Guid::with('image')->orderBy('pos')->get();
    }
}
