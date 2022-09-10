<?php

declare(strict_types=1);

namespace App\Domain\Schedule\Queries;

use App\Schedule;

/**
 * Class GetScheduleByIdQuery
 * @package App\Domain\Schedule\Queries
 */
class GetYandexScheduleByIdQuery
{
    /**
     * Execute the job.
     */
    public function handle()
    {
        return Schedule::query()
            ->where('finished_at', '>=', now()->format('Y-m-d'))
            ->where('link_to_yandex_disk', '<>', '')
            ->get();
    }
}
