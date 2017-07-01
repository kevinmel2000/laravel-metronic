<?php

Auth::loginUsingId('1');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/********************************** ADMIN *************************************/

Route::group(['prefix' => 'admin-1'], function () {

    Route::get('/', function () {
        return view('admin-1.index');
    })->name('admin-1.index');

    Route::get('blank-page', function () {
        return view('admin-1.pages.blank-page');
    })->name('admin-1.blank-page');

    Route::group(['prefix' => 'pages'], function () {

        Route::get('user-login-1', function () {
            return view('admin-1.pages.user-login-1');
        })->name('admin-1.page-user-login-1');

        Route::get('user-login-2', function () {
            return view('admin-1.pages.user-login-2');
        })->name('admin-1.page-user-login-2');

        Route::get('user-login-3', function () {
            return view('admin-1.pages.user-login-3');
        })->name('admin-1.page-user-login-3');

        Route::get('user-login-4', function () {
            return view('admin-1.pages.user-login-4');
        })->name('admin-1.page-user-login-4');
    });

});
