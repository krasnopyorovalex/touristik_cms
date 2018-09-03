<?php

namespace App\Domain\SeoBlock\Queries;

use App\SeoBlock;

/**
 * Class GetSeoBlockByIdQuery
 * @package App\Domain\SeoBlock\Queries
 */
class GetSeoBlockByIdQuery
{
    /**
     * @var int
     */
    private $id;

    /**
     * GetSeoBlockByIdQuery constructor.
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
        return SeoBlock::findOrFail($this->id);
    }
}