<?php

namespace App\Domain\Guid\Queries;

use App\Guid;

/**
 * Class GetGuidByIdQuery
 * @package App\Domain\Guid\Queries
 */
class GetGuidByIdQuery
{
    /**
     * @var int
     */
    private $id;

    /**
     * GetGuidByIdQuery constructor.
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
        return Guid::with(['image'])->findOrFail($this->id);
    }
}