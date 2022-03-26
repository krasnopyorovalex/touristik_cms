<?php

Route::group(['prefix' => 'guids', 'as' => 'guids.'], function () {
    Route::pattern('id', '[0-9]+');

    Route::get('', 'GuidController@index')->name('index');
    Route::get('create', 'GuidController@create')->name('create');
    Route::post('', 'GuidController@store')->name('store');
    Route::get('{id}/edit', 'GuidController@edit')->name('edit');
    Route::put('{id}', 'GuidController@update')->name('update');
    Route::delete('{id}', 'GuidController@destroy')->name('destroy');

});