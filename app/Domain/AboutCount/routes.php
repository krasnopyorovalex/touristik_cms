<?php

Route::group(['prefix' => 'about-counts', 'as' => 'about_counts.'], function () {
    Route::pattern('id', '[0-9]+');

    Route::get('', 'AboutCountController@index')->name('index');
    Route::get('create', 'AboutCountController@create')->name('create');
    Route::post('', 'AboutCountController@store')->name('store');
    Route::get('{id}/edit', 'AboutCountController@edit')->name('edit');
    Route::put('{id}', 'AboutCountController@update')->name('update');
    Route::delete('{id}', 'AboutCountController@destroy')->name('destroy');

});