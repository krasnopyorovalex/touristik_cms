<?php

namespace App\Services;

use App\Domain\Article\Queries\GetAllArticlesQuery;
use App\Domain\Schedule\Queries\GetAllSchedulesQuery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class TextParserService
 * @package App\Services
 */
class TextParserService
{
    use DispatchesJobs;

    private const PAGINATE_LIMIT = 10;

    /**
     * @param Model $entity
     * @return string|string[]|null
     */
    public function parse(Model $entity)
    {
        return preg_replace_callback_array(
            [
                '#(<p(.*)>)?{tyri}(<\/p>)?#' => function () use ($entity) {
                    return view('layouts.shortcodes.services');
                },
                '#(<p(.*)>)?{blog}(<\/p>)?#' => function () use ($entity) {
                    $articles = $this->dispatch(new GetAllArticlesQuery(self::PAGINATE_LIMIT));

                    return view('layouts.shortcodes.blog', ['articles' => $articles]);
                },
                '#(<p(.*)>)?{schedule}(<\/p>)?#' => function () use ($entity) {
                    $schedules = $this->dispatch(new GetAllSchedulesQuery(true));

                    return view('layouts.shortcodes.schedule', ['schedules' => $schedules]);
                }
            ],
            $entity->text
        );
    }

}
