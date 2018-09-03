<?php

namespace App\Domain\SeoBlock\Queries;

use App\SeoBlock;

/**
 * Class GetAllSeoBlocksQuery
 * @package App\Domain\SeoBlock\Queries
 */
class GetAllSeoBlocksQuery
{
    /**
     * Execute the job.
     */
    public function handle()
    {
        return SeoBlock::all();
    }
}