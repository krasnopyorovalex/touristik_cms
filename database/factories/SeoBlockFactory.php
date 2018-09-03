<?php
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\SeoBlock::class, function () {
    return [
        'name' => 'Яндекс метрика',
        'sys_name' => 'metrika',
        'value' => ''
    ];
});
