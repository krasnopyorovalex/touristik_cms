<?php

namespace App\Domain\Article\Queries;

use App\Article;

/**
 * Class GetAllArticlesQuery
 * @package App\Domain\Article\Queries
 */
class GetAllArticlesQuery
{
    /**
     * Execute the job.
     */
    public function handle()
    {
        return Article::all();
    }
}