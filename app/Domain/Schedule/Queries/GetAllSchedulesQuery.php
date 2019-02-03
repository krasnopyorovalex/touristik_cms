<?php

namespace App\Domain\Schedule\Queries;

use App\Schedule;

/**
 * Class GetAllSchedulesQuery
 * @package App\Domain\Schedule\Queries
 */
class GetAllSchedulesQuery
{
    /**
     * @var bool
     */
    private $actualTours;

    public function __construct(bool $actualTours = false)
    {
        $this->actualTours = $actualTours;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $schedule = Schedule::orderBy('date', 'asc');

        if($this->actualTours){
            $schedule->where('date','>=', date('Y-m-d'));
        }

        return $schedule->get();
    }
}
