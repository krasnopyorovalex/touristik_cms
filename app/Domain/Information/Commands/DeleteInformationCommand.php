<?php

namespace App\Domain\Information\Commands;

use App\Domain\Information\Queries\GetArticleByIdQuery;
use App\Domain\Image\Commands\DeleteImageCommand;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class DeleteInformationCommand
 * @package App\Domain\Information\Commands
 */
class DeleteInformationCommand
{

    use DispatchesJobs;

    /**
     * @var int
     */
    private $id;

    /**
     * DeleteInformationCommand constructor.
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
        $article = $this->dispatch(new GetArticleByIdQuery($this->id));

        if($article->image) {
            $this->dispatch(new DeleteImageCommand($article->image));
        }

        return $article->delete();
    }

}