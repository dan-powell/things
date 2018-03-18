<?php

Route::group(['middleware' => ['web']], function () {

    Route::group([ /*'middleware' => ['auth'], */ 'prefix' => 'things'], function () {

        Route::get('dashboard', 'DanPowell\Things\Http\Controllers\DashboardController@index')->name('dashboard');

    });



});
