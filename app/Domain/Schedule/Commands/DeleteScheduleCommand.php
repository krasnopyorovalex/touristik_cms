<?php

namespace App\Domain\Schedule\Commands;

use App\Domain\Schedule\Queries\GetScheduleByIdQuery;
use App\Domain\Image\Commands\DeleteImageCommand;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class DeleteScheduleCommand
 * @package App\Domain\Schedule\Commands
 */
class DeleteScheduleCommand
{

    use DispatchesJobs;

    /**
     * @var int
     */
    private $id;

    /**
     * DeleteScheduleCommand constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return bool
     */
    public function handle(): bool
    {
        $schedule = $this->dispatch(new GetScheduleByIdQuery($this->id));

        return $schedule->delete();
    }

}
