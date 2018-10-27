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
     * @var bool
     */
    private $isPublished;

    /**
     * GetAllArticlesQuery constructor.
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
        $articles = new Article();

        if ($this->isPublished) {
           $articles->where('is_published', '1');
        }

        return $articles->orderBy('published_at', 'desc')->get();
    }
}