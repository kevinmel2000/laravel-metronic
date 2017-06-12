<?php

Auth::loginUsingId('1');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/********************************** ADMIN *************************************/

Route::group(['prefix' => 'admin-1'], function () {

    Route::get('blank', function () {
        return view('admin-1.pages.blank');
    })->name('admin-1.blank-page');

    Route::get('classic-page-head', function () {
        return view('admin-1.pages.classic-page-head');
    })->name('admin-1.classic-page-head');

});
