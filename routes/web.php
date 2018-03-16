<?php

Route::group(['middleware' => ['web']], function () {

    Route::group(['middleware' => ['auth']], function () {

        Route::get('dashboard', 'DanPowell\Jellies\Http\Controllers\DashboardController@index')->name('dashboard');

    });

});
