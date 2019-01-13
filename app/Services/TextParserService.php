<?php

namespace App\Services;

use App\Domain\Service\Queries\GetAllServicesQuery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class TextParserService
 * @package App\Services
 */
class TextParserService
{
    use DispatchesJobs;

    /**
     * @param Model $entity
     * @return string|string[]|null
     */
    public function parse(Model $entity)
    {
        return preg_replace_callback_array(
            [
                '#(<p(.*)>)?{tyri}(<\/p>)?#' => function () use ($entity) {
                    $tyri = $this->dispatch(new GetAllServicesQuery());

                    return view('layouts.shortcodes.tyri', ['tyri' => $tyri]);
                }
            ],
            $entity->text
        );
    }

}