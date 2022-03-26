<?php

namespace App\Domain\Guid\Commands;

use App\Guid;
use App\Domain\Guid\Queries\GetGuidByIdQuery;
use App\Domain\Image\Commands\DeleteImageCommand;
use App\Domain\Image\Commands\UploadImageCommand;
use App\Events\RedirectDetected;
use App\Http\Requests\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class UpdateGuidCommand
 * @package App\Domain\Page\Commands
 */
class UpdateGuidCommand
{

    use DispatchesJobs;

    private $request;
    private $id;

    /**
     * UpdateGuidCommand constructor.
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
        $guid = $this->dispatch(new GetGuidByIdQuery($this->id));
        $urlNew = $this->request->post('alias');

        if ($this->request->has('image')) {
            if ($guid->image) {
                $this->dispatch(new DeleteImageCommand($guid->image));
            }
            $this->dispatch(new UploadImageCommand($this->request, $guid->id, Guid::class));
        }

        return $guid->update($this->request->validated());
    }

}