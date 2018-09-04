<?php

namespace App\Domain\AboutCount\Commands;

use App\Domain\AboutCount\Queries\GetAboutCountByIdQuery;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class DeleteAboutCountCommand
 * @package App\Domain\AboutCount\Commands
 */
class DeleteAboutCountCommand
{

    use DispatchesJobs;

    /**
     * @var int
     */
    private $id;

    /**
     * DeleteAboutCountCommand constructor.
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
        $aboutCount = $this->dispatch(new GetAboutCountByIdQuery($this->id));

        return $aboutCount->delete();
    }

}