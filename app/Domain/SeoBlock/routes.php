<?php

Route::group(['prefix' => 'seo-blocks', 'as' => 'seo_blocks.'], function () {
    Route::pattern('id', '[0-9]+');

    Route::get('', 'SeoBlockController@index')->name('index');
    Route::get('create', 'SeoBlockController@create')->name('create');
    Route::post('', 'SeoBlockController@store')->name('store');
    Route::get('{id}/edit', 'SeoBlockController@edit')->name('edit');
    Route::put('{id}', 'SeoBlockController@update')->name('update');
    Route::delete('{id}', 'SeoBlockController@destroy')->name('destroy');
});