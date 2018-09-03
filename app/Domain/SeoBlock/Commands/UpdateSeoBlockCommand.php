<?php

namespace App\Domain\SeoBlock\Commands;

use App\Domain\SeoBlock\Queries\GetSeoBlockByIdQuery;
use App\Http\Requests\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class UpdateSeoBlockCommand
 * @package App\Domain\SeoBlock\Commands
 */
class UpdateSeoBlockCommand
{

    use DispatchesJobs;

    private $request;
    private $id;

    /**
     * UpdateSeoBlockCommand constructor.
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
        $seoBlock = $this->dispatch(new GetSeoBlockByIdQuery($this->id));

        return $seoBlock->update($this->request->all());
    }

}