<?php

Route::group(['prefix' => 'banners', 'as' => 'banners.'], function () {
    Route::pattern('id', '[0-9]+');

    Route::get('', 'BannerController@index')->name('index');
    Route::get('create', 'BannerController@create')->name('create');
    Route::post('', 'BannerController@store')->name('store');
    Route::get('{id}/edit', 'BannerController@edit')->name('edit');
    Route::put('{id}', 'BannerController@update')->name('update');
    Route::delete('{id}', 'BannerController@destroy')->name('destroy');

});