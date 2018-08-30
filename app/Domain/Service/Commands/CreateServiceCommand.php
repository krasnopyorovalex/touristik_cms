<?php

namespace App\Domain\Service\Commands;

use App\Http\Requests\Request;
use App\Service;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class CreateServiceCommand
 * @package App\Domain\Service\Commands
 */
class CreateServiceCommand
{
    use DispatchesJobs;

    private $request;

    /**
     * CreateServiceCommand constructor.
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
        $service = new Service();
        $service->fill($this->request->all());
        $service->save();

        return true;
    }

}