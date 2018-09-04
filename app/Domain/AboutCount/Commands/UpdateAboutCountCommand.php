<?php

namespace App\Domain\AboutCount\Commands;

use App\Domain\AboutCount\Queries\GetAboutCountByIdQuery;
use App\Http\Requests\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class UpdateAboutCountCommand
 * @package App\Domain\AboutCount\Commands
 */
class UpdateAboutCountCommand
{

    use DispatchesJobs;

    private $request;
    private $id;

    /**
     * UpdateAboutCountCommand constructor.
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
        $aboutCount = $this->dispatch(new GetAboutCountByIdQuery($this->id));

        return $aboutCount->update($this->request->all());
    }

}