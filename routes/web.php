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

    Route::group(['prefix' => 'pages'], function () {

        Route::get('user-login-1', function () {
            return view('admin-1.pages.user-login-1');
        })->name('admin-1.page-user-login-1');
    });

});
