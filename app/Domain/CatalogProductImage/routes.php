<?php

Route::group(['prefix' => 'catalog-product-images', 'as' => 'catalog_product_images.'], function () {
    Route::pattern('id', '[0-9]+');
    Route::pattern('product', '[0-9]+');

    Route::get('{product}', 'CatalogProductImageController@index')->name('index');
    Route::post('{product}', 'CatalogProductImageController@store')->name('store');
    Route::get('{id}/edit', 'CatalogProductImageController@edit')->name('edit');
    Route::put('{id}', 'CatalogProductImageController@update')->name('update');
    Route::delete('{id}', 'CatalogProductImageController@destroy')->name('destroy');

    Route::post('update-positions', 'CatalogProductImageController@updatePositions')->name('update_positions');
});