<?php

Route::group(['prefix' => 'informations', 'as' => 'informations.'], function () {
    Route::pattern('id', '[0-9]+');

    Route::get('', 'InformationController@index')->name('index');
    Route::get('create', 'InformationController@create')->name('create');
    Route::post('', 'InformationController@store')->name('store');
    Route::get('{id}/edit', 'InformationController@edit')->name('edit');
    Route::put('{id}', 'InformationController@update')->name('update');
    Route::delete('{id}', 'InformationController@destroy')->name('destroy');

});