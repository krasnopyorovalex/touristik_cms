<?php

namespace App\Domain\Guid\Commands;

use App\Domain\Guid\Queries\GetGuidByIdQuery;
use App\Domain\Image\Commands\DeleteImageCommand;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class DeleteGuidCommand
 * @package App\Domain\Guid\Commands
 */
class DeleteGuidCommand
{

    use DispatchesJobs;

    /**
     * @var int
     */
    private $id;

    /**
     * DeleteGuidCommand constructor.
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
        $guid = $this->dispatch(new GetGuidByIdQuery($this->id));

        if($guid->image) {
            $this->dispatch(new DeleteImageCommand($guid->image));
        }

        return $guid->delete();
    }

}