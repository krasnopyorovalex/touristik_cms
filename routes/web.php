<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::pattern('alias', '[a-z-]+');

Auth::routes();

Route::group(['middleware' => ['redirector', 'shortcode']], function () {
    Route::get('{alias}', 'ServiceController@show')->name('service.show');
    Route::get('/{alias?}', 'PageController@show')->name('page.show');
    Route::get('blog/{alias}', 'BlogController@show')->name('article.show');
    Route::get('portfolio/{alias}', 'PortfolioController@show')->name('portfolio.show');
});

Route::group(['prefix' => '_root', 'middleware' => 'auth', 'namespace' => 'Admin', 'as' => 'admin.'], function () {

    Route::get('', 'HomeController@home')->name('home');

    Route::post('upload-ckeditor', 'CkeditorController@upload')->name('upload-ckeditor');

    foreach (glob(app_path('Domain/**/routes.php')) as $item) {
        require $item;
    }
});