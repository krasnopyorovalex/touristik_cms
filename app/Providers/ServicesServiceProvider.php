<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class ServicesServiceProvider
 * @package App\Providers
 */
class ServicesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('view')->composer(['page.index', 'layouts.app'], 'App\Http\ViewComposers\ServiceComposer');
    }
}
