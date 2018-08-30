<?php

namespace App\Domain\Information\Queries;

use App\Information;

/**
 * Class GetInformationByIdQuery
 * @package App\Domain\Information\Queries
 */
class GetInformationByIdQuery
{
    /**
     * @var int
     */
    private $id;

    /**
     * GetInformationByIdQuery constructor.
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
        return Information::with(['image'])->findOrFail($this->id);
    }
}