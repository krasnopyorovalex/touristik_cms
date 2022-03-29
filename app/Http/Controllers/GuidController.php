<?php

namespace App\Http\Controllers;

use App\Domain\Guid\Queries\GetGuidByIdQuery;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;

/**
 * Class BlogController
 * @package App\Http\Controllers
 */
class GuidController extends Controller
{
    /**
     * @param int $id
     * @return Factory|Application|View
     */
    public function show(int $id)
    {
        $guid = $this->dispatch(new GetGuidByIdQuery($id));

        return view('guids.index', [
            'guid' => $guid
        ]);
    }
}