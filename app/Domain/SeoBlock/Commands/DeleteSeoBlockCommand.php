<?php

namespace App\Domain\SeoBlock\Commands;

use App\Domain\SeoBlock\Queries\GetSeoBlockByIdQuery;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class DeleteSeoBlockCommand
 * @package App\Domain\SeoBlock\Commands
 */
class DeleteSeoBlockCommand
{

    use DispatchesJobs;

    /**
     * @var int
     */
    private $id;

    /**
     * DeletePageCommand constructor.
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
        $seoBlock = $this->dispatch(new GetSeoBlockByIdQuery($this->id));

        return $seoBlock->delete();
    }

}