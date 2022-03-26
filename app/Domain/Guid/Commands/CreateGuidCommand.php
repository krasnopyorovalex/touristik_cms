<?php

namespace App\Domain\Guid\Commands;

use App\Guid;
use App\Domain\Image\Commands\UploadImageCommand;
use App\Http\Requests\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class CreateGuidCommand
 * @package App\Domain\Guid\Commands
 */
class CreateGuidCommand
{
    use DispatchesJobs;

    private $request;

    /**
     * CreateGuidCommand constructor.
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
        $guid = new Guid();
        $guid->fill($this->request->validated())->save();

        if ($this->request->has('image')) {
            return $this->dispatch(new UploadImageCommand($this->request, $guid->id, Guid::class));
        }

        return true;
    }

}