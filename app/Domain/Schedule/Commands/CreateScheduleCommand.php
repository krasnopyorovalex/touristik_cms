<?php

namespace App\Domain\Schedule\Commands;

use App\Schedule;
use App\Http\Requests\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class CreateScheduleCommand
 * @package App\Domain\Schedule\Commands
 */
class CreateScheduleCommand
{
    use DispatchesJobs;

    private $request;

    /**
     * CreateScheduleCommand constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return bool
     */
    public function handle(): bool
    {
        $schedule = new Schedule();
        $schedule->fill($this->request->all());

        return $schedule->save();
    }

}
