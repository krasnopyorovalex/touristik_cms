<?php

namespace App\Domain\SeoBlock\Commands;

use App\Http\Requests\Request;
use App\SeoBlock;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class CreateSeoBlockCommand
 * @package App\Domain\SeoBlock\Commands
 */
class CreateSeoBlockCommand
{
    use DispatchesJobs;

    private $request;

    /**
     * CreateSeoBlockCommand constructor.
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
        $page = new SeoBlock();
        $page->fill($this->request->all());
        $page->save();

        return true;
    }

}