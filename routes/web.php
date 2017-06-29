<?php

Auth::loginUsingId('1');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/********************************** ADMIN *************************************/

Route::group(['prefix' => 'admin-1'], function () {

    Route::get('blank-page', function () {
        return view('admin-1.pages.blank-page');
    })->name('admin-1.blank-page');

    Route::get('classic-page-head', function () {
        return view('admin-1.pages.classic-page-head');
    })->name('admin-1.classic-page-head');

    Route::get('light-page-head', function () {
        return view('admin-1.pages.light-page-head');
    })->name('admin-1.light-page-head');

    Route::get('grey-bg', function () {
        return view('admin-1.pages.grey-bg');
    })->name('admin-1.grey-bg');

});
