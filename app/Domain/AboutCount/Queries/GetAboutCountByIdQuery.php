<?php

namespace App\Domain\AboutCount\Queries;

use App\AboutCount;

/**
 * Class GetAboutCountByIdQuery
 * @package App\Domain\AboutCount\Queries
 */
class GetAboutCountByIdQuery
{
    /**
     * @var int
     */
    private $id;

    /**
     * GetAboutCountByIdQuery constructor.
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
        return AboutCount::findOrFail($this->id);
    }
}