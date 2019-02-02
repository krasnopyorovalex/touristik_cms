<?php

namespace App\Domain\Schedule\Commands;

use App\Domain\Schedule\Queries\GetScheduleByIdQuery;
use App\Http\Requests\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class UpdateScheduleCommand
 * @package App\Domain\Page\Commands
 */
class UpdateScheduleCommand
{

    use DispatchesJobs;

    private $request;
    private $id;

    /**
     * UpdateScheduleCommand constructor.
     * @param int $id
     * @param Request $request
     */
    public function __construct(int $id, Request $request)
    {
        $this->id = $id;
        $this->request = $request;
    }

    /**
     * @return bool
     */
    public function handle(): bool
    {
        $schedule = $this->dispatch(new GetScheduleByIdQuery($this->id));

        return $schedule->update($this->request->all());
    }

}
