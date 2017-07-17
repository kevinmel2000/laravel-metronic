<?php

Auth::loginUsingId('1');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/********************************* ADMIN-1 ************************************/

Route::group(['prefix' => 'admin-1'], function () {

    Route::get('/', function () {
        return view('admin-1.index');
    })->name('admin-1.index');

    Route::get('blank-page', function () {
        return view('admin-1.layouts.page-layouts.blank-page');
    })->name('admin-1.blank-page');


    /************************ SIDEBAR: Partial Ajax ***************************/

    Route::get('_ajax/load-more', function () {
        return view('admin-1.pages.general._ajax.load-more');
    })->name('admin-1.ajax.load-more');

    Route::get('_ajax/load-more2', function () {
        return view('admin-1.pages.general._ajax.load-more2');
    })->name('admin-1.ajax.load-more2');

    Route::get('_ajax/load-more3', function () {
        return view('admin-1.pages.general._ajax.load-more3');
    })->name('admin-1.ajax.load-more3');

    Route::get('_ajax/load-more4', function () {
        return view('admin-1.pages.general._ajax.load-more4');
    })->name('admin-1.ajax.load-more4');

    Route::get('_ajax/project1', function () {
        return view('admin-1.pages.general._ajax.project1');
    })->name('admin-1.ajax.project1');

    Route::get('_ajax/project2', function () {
        return view('admin-1.pages.general._ajax.project2');
    })->name('admin-1.ajax.project2');

    Route::get('_ajax/project3', function () {
        return view('admin-1.pages.general._ajax.project3');
    })->name('admin-1.ajax.project3');

    Route::get('_ajax/project4', function () {
        return view('admin-1.pages.general._ajax.project4');
    })->name('admin-1.ajax.project4');


    /**************************** SIDEBAR: PAGES ******************************/

    Route::group(['prefix' => 'pages'], function () {

        /*********************** SIDEBAR: PAGES: USER *************************/

        Route::get('user-login-1', function () {
            return view('admin-1.pages.user.user-login-1');
        })->name('admin-1.page-user-login-1');

        Route::get('user-login-2', function () {
            return view('admin-1.pages.user.user-login-2');
        })->name('admin-1.page-user-login-2');

        Route::get('user-login-3', function () {
            return view('admin-1.pages.user.user-login-3');
        })->name('admin-1.page-user-login-3');

        Route::get('user-login-4', function () {
            return view('admin-1.pages.user.user-login-4');
        })->name('admin-1.page-user-login-4');

        Route::get('user-login-5', function () {
            return view('admin-1.pages.user.user-login-5');
        })->name('admin-1.page-user-login-5');

        Route::get('user-login-6', function () {
            return view('admin-1.pages.user.user-login-6');
        })->name('admin-1.page-user-login-6');

        Route::get('user-lock-1', function () {
            return view('admin-1.pages.user.user-lock-1');
        })->name('admin-1.page-user-lock-1');

        Route::get('user-lock-2', function () {
            return view('admin-1.pages.user.user-lock-2');
        })->name('admin-1.page-user-lock-2');


        /********************** SIDEBAR: PAGES: GENERAL ***********************/

        Route::get('about', function () {
            return view('admin-1.pages.general.about');
        })->name('admin-1.page-about');

        Route::get('contact', function () {
            return view('admin-1.pages.general.contact');
        })->name('admin-1.page-contact');

        Route::get('portfolio-1', function () {
            return view('admin-1.pages.general.portfolio-1');
        })->name('admin-1.page-portfolio-1');

        Route::get('portfolio-2', function () {
            return view('admin-1.pages.general.portfolio-2');
        })->name('admin-1.page-portfolio-2');

        Route::get('portfolio-3', function () {
            return view('admin-1.pages.general.portfolio-3');
        })->name('admin-1.page-portfolio-3');

        Route::get('portfolio-4', function () {
            return view('admin-1.pages.general.portfolio-4');
        })->name('admin-1.page-portfolio-4');

        Route::get('search-1', function () {
            return view('admin-1.pages.general.search-1');
        })->name('admin-1.page-search-1');

        Route::get('search-2', function () {
            return view('admin-1.pages.general.search-2');
        })->name('admin-1.page-search-2');

        Route::get('search-3', function () {
            return view('admin-1.pages.general.search-3');
        })->name('admin-1.page-search-3');

        Route::get('search-4', function () {
            return view('admin-1.pages.general.search-4');
        })->name('admin-1.page-search-4');

        Route::get('search-5', function () {
            return view('admin-1.pages.general.search-5');
        })->name('admin-1.page-search-5');

        Route::get('pricing-1', function () {
            return view('admin-1.pages.general.pricing-1');
        })->name('admin-1.page-pricing-1');

        Route::get('pricing-2', function () {
            return view('admin-1.pages.general.pricing-2');
        })->name('admin-1.page-pricing-2');

        Route::get('faq', function () {
            return view('admin-1.pages.general.faq');
        })->name('admin-1.page-faq');

        Route::get('blog', function () {
            return view('admin-1.pages.general.blog');
        })->name('admin-1.page-blog');

        Route::get('blog-post', function () {
            return view('admin-1.pages.general.blog-post');
        })->name('admin-1.page-blog-post');

        Route::get('invoice-1', function () {
            return view('admin-1.pages.general.invoice-1');
        })->name('admin-1.page-invoice-1');


        /********************** SIDEBAR: PAGES: SYSTEM ************************/

        Route::get('cookie-consent-1', function () {
            return view('admin-1.pages.system.cookie-consent-1');
        })->name('admin-1.page-cookie-consent-1');

        Route::get('cookie-consent-2', function () {
            return view('admin-1.pages.system.cookie-consent-2');
        })->name('admin-1.page-cookie-consent-2');

        Route::get('coming-soon', function () {
            return view('admin-1.pages.system.coming-soon');
        })->name('admin-1.page-coming-soon');

        Route::get('404-1', function () {
            return view('admin-1.pages.system.404-1');
        })->name('admin-1.page-404-1');

        Route::get('404-2', function () {
            return view('admin-1.pages.system.404-2');
        })->name('admin-1.page-404-2');

        Route::get('404-3', function () {
            return view('admin-1.pages.system.404-3');
        })->name('admin-1.page-404-3');

        Route::get('500-1', function () {
            return view('admin-1.pages.system.500-1');
        })->name('admin-1.page-500-1');

        Route::get('500-2', function () {
            return view('admin-1.pages.system.500-2');
        })->name('admin-1.page-500-2');
    });

});
