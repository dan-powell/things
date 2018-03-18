<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['api'], 'prefix' => 'api'], function () {


    Route::group(['prefix' => 'v1'], function () {

        Route::get(
            '{thing}',
            'DanPowell\Things\Http\Controllers\AbstractController@index'
        );

        Route::get(
            '{thing}/{id}',
            'DanPowell\Things\Http\Controllers\AbstractController@show'
        );

        Route::post(
            '{thing}',
            'DanPowell\Things\Http\Controllers\AbstractController@store'
        );

        Route::put(
            '{thing}/{id}',
            'DanPowell\Things\Http\Controllers\AbstractController@update'
        );

        Route::delete(
            '{thing}/{id}',
            'DanPowell\Things\Http\Controllers\AbstractController@delete'
        );


    });

});
