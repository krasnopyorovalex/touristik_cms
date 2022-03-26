<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Guid\Commands\CreateGuidCommand;
use App\Domain\Guid\Commands\DeleteGuidCommand;
use App\Domain\Guid\Commands\UpdateGuidCommand;
use App\Domain\Guid\Queries\GetAllGuidsQuery;
use App\Domain\Guid\Queries\GetGuidByIdQuery;
use App\Http\Controllers\Controller;
use Domain\Guid\Requests\CreateGuidRequest;
use Domain\Guid\Requests\UpdateGuidRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class GuidController extends Controller
{
    /**
     * @return Factory|Application|View
     */
    public function index()
    {
        $guids = $this->dispatch(new GetAllGuidsQuery());

        return view('admin.guids.index', [
            'guids' => $guids
        ]);
    }

    /**
     * @return Factory|Application|View
     */
    public function create()
    {
        return view('admin.guids.create');
    }

    /**
     * @param CreateGuidRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(CreateGuidRequest $request)
    {
        $this->dispatch(new CreateGuidCommand($request));

        return redirect(route('admin.guids.index'));
    }

    /**
     * @param $id
     * @return Factory|Application|View
     */
    public function edit($id)
    {
        $Guid = $this->dispatch(new GetGuidByIdQuery($id));

        return view('admin.guids.edit', [
            'guid' => $Guid
        ]);
    }

    /**
     * @param $id
     * @param UpdateGuidRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function update($id, UpdateGuidRequest $request)
    {
        $this->dispatch(new UpdateGuidCommand($id, $request));

        return redirect(route('admin.guids.index'));
    }

    /**
     * @param $id
     * @return Application|RedirectResponse|Redirector
     */
    public function destroy($id)
    {
        $this->dispatch(new DeleteGuidCommand($id));

        return redirect(route('admin.guids.index'));
    }
}
