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

Route::prefix('api')->group(function () {

    Route::prefix('json')->group(function () {
        Route::get('/', 'JsonController@get')->name('get-json');
        Route::post('/', 'JsonController@save')->name('save-json');
    });

    Route::prefix('image')->group(function () {
        Route::post('/', 'ImageController@save')->name('save-json');
    });
});