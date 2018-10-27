<?php

namespace App\Domain\Portfolio\Commands;

use App\Portfolio;
use App\Domain\Portfolio\Queries\GetPortfolioByIdQuery;
use App\Domain\Image\Commands\DeleteImageCommand;
use App\Domain\Image\Commands\UploadImageCommand;
use App\Events\RedirectDetected;
use App\Http\Requests\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class UpdatePortfolioCommand
 * @package App\Domain\Page\Commands
 */
class UpdatePortfolioCommand
{

    use DispatchesJobs;

    private $request;
    private $id;

    /**
     * UpdatePortfolioCommand constructor.
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
        $Portfolio = $this->dispatch(new GetPortfolioByIdQuery($this->id));
        $urlNew = $this->request->post('alias');

        if ($Portfolio->getOriginal('alias') != $urlNew) {
            event(new RedirectDetected($Portfolio->getOriginal('alias'), $urlNew, 'Portfolio.show'));
        }

        if ($this->request->has('image')) {
            if ($Portfolio->image) {
                $this->dispatch(new DeleteImageCommand($Portfolio->image));
            }
            $this->dispatch(new UploadImageCommand($this->request, $Portfolio->id, Portfolio::class));
        }

        return $Portfolio->update($this->request->all());
    }

}