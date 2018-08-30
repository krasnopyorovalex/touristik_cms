<?php

namespace App\Domain\Information\Commands;

use App\Domain\Information\Queries\GetInformationByIdQuery;
use App\Information;
use App\Domain\Image\Commands\DeleteImageCommand;
use App\Domain\Image\Commands\UploadImageCommand;
use App\Events\RedirectDetected;
use App\Http\Requests\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class UpdateInformationCommand
 * @package App\Domain\Information\Commands
 */
class UpdateInformationCommand
{

    use DispatchesJobs;

    private $request;
    private $id;

    /**
     * UpdateInformationCommand constructor.
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
        $information = $this->dispatch(new GetInformationByIdQuery($this->id));
        $urlNew = $this->request->post('alias');

        if ($information->getOriginal('alias') != $urlNew) {
            event(new RedirectDetected($information->getOriginal('alias'), $urlNew, 'information.show'));
        }

        if ($this->request->has('image')) {
            if ($information->image) {
                $this->dispatch(new DeleteImageCommand($information->image));
            }
            $this->dispatch(new UploadImageCommand($this->request, $information->id, Information::class));
        }

        return $information->update($this->request->all());
    }

}