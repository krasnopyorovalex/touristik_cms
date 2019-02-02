<?php

namespace App\Domain\Guestbook\Queries;

use App\Guestbook;

/**
 * Class GetAllGuestbookQuery
 * @package App\Domain\Guestbook\Queries
 */
class GetAllGuestbookQuery
{
    /**
     * @var bool
     */
    private $isPublished;

    public function __construct(bool $isPublished = false)
    {
        $this->isPublished = $isPublished;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $guestbooks = Guestbook::orderBy('published_at', 'desc');

        if ($this->isPublished) {
            $guestbooks->where('is_published', '1');
        }

        return $guestbooks->get();
    }
}
