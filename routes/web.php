<?php

Auth::loginUsingId('1');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {

    Route::group(['prefix' => 'v1'], function () {

        Route::get('blank', function () {
            return view('admin-1.pages.blank');
        });

    });

});
