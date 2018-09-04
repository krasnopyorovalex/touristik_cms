<?php

namespace App\Domain\AboutCount\Commands;

use App\Http\Requests\Request;
use App\AboutCount;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class CreateAboutCountCommand
 * @package App\Domain\AboutCount\Commands
 */
class CreateAboutCountCommand
{
    use DispatchesJobs;

    private $request;

    /**
     * CreateAboutCountCommand constructor.
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
        $page = new AboutCount();
        $page->fill($this->request->all());

        return $page->save();
    }

}