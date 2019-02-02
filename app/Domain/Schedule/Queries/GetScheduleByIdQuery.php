<?php

namespace App\Domain\Schedule\Queries;

use App\Schedule;

/**
 * Class GetScheduleByIdQuery
 * @package App\Domain\Schedule\Queries
 */
class GetScheduleByIdQuery
{
    /**
     * @var int
     */
    private $id;

    /**
     * GetScheduleByIdQuery constructor.
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
        return Schedule::findOrFail($this->id);
    }
}
