<?php

namespace App\Domain\Information\Commands;

use App\Information;
use App\Domain\Image\Commands\UploadImageCommand;
use App\Http\Requests\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class CreateInformationCommand
 * @package App\Domain\Information\Commands
 */
class CreateInformationCommand
{
    use DispatchesJobs;

    private $request;

    /**
     * CreateInformationCommand constructor.
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
        $information = new Information();
        $information->fill($this->request->all());
        $information->save();

        if ($this->request->has('image')) {
            return $this->dispatch(new UploadImageCommand($this->request, $information->id, Information::class));
        }

        return true;
    }

}