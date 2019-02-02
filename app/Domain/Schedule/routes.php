<?php

Route::group(['prefix' => 'schedules', 'as' => 'schedules.'], function () {
    Route::pattern('id', '[0-9]+');

    Route::get('', 'ScheduleController@index')->name('index');
    Route::get('create', 'ScheduleController@create')->name('create');
    Route::post('', 'ScheduleController@store')->name('store');
    Route::get('{id}/edit', 'ScheduleController@edit')->name('edit');
    Route::put('{id}', 'ScheduleController@update')->name('update');
    Route::delete('{id}', 'ScheduleController@destroy')->name('destroy');

});
