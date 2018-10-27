<?php

namespace App\Domain\Article\Queries;

use App\Article;

/**
 * Class GetNextArticleQuery
 * @package App\Domain\Article\Queries
 */
class GetNextArticleQuery
{
    /**
     * @var Article
     */
    private $article;

    /**
     * GetPrevArticleQuery constructor.
     * @param Article $article
     */
    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        return Article::where('id', '>', $this->article->id)->first();
    }
}