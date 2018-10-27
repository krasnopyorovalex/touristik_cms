<?php

namespace App\Domain\Portfolio\Queries;

use App\Portfolio;

/**
 * Class GetAllPortfoliosQuery
 * @package App\Domain\Portfolio\Queries
 */
class GetAllPortfoliosQuery
{
    /**
     * @var bool
     */
    private $isPublished;

    /**
     * GetAllPortfoliosQuery constructor.
     * @param bool $isPublished
     */
    public function __construct($isPublished = false)
    {
        $this->isPublished = $isPublished;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $Portfolios = new Portfolio();

        if ($this->isPublished) {
           $Portfolios->where('is_published', '1');
        }

        return $Portfolios->get();
    }
}