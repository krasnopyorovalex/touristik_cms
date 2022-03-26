<?php

namespace App\Http\ViewComposers;

use App\Domain\Guid\Queries\GetAllGuidsQuery;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Bus\DispatchesJobs;

class GuidsComposer
{
    use DispatchesJobs;

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $guids = $this->dispatch(new GetAllGuidsQuery());

        $view->with('guids', $guids);
    }
}