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


    /************************** SIDEBAR: DASHBOARD ****************************/

    Route::group(['prefix' => 'dashboard'], function () {

        Route::get('01', function () {
            return view('admin-1.dashboard.01');
        })->name('admin-1.dashboard.01');

        Route::get('02', function () {
            return view('admin-1.dashboard.02');
        })->name('admin-1.dashboard.02');

        Route::get('03', function () {
            return view('admin-1.dashboard.03');
        })->name('admin-1.dashboard.03');

    });


    /************************** SIDEBAR: FEATURES *****************************/

    Route::group(['prefix' => 'features'], function () {

        /********************** SIDEBAR: FEATURES: UI *************************/

        Route::group(['prefix' => 'ui'], function () {

            Route::get('metronic-grid', function () {
                return view('admin-1.features.ui.metronic-grid');
            })->name('admin-1.ui-metronic-grid');

            Route::get('colors', function () {
                return view('admin-1.features.ui.colors');
            })->name('admin-1.ui-colors');

            Route::get('general', function () {
                return view('admin-1.features.ui.general');
            })->name('admin-1.ui-general');

            Route::get('buttons', function () {
                return view('admin-1.features.ui.buttons');
            })->name('admin-1.ui-buttons');

            Route::get('buttons-spinner', function () {
                return view('admin-1.features.ui.buttons-spinner');
            })->name('admin-1.ui-buttons-spinner');

            Route::get('popover-confirmations', function () {
                return view('admin-1.features.ui.popover-confirmations');
            })->name('admin-1.ui-popover-confirmations');

            Route::get('sweetalert', function () {
                return view('admin-1.features.ui.sweetalert');
            })->name('admin-1.ui-sweetalert');

            Route::get('icons', function () {
                return view('admin-1.features.ui.icons');
            })->name('admin-1.ui-icons');

            Route::get('social-icons', function () {
                return view('admin-1.features.ui.social-icons');
            })->name('admin-1.ui-social-icons');

            Route::get('typography', function () {
                return view('admin-1.features.ui.typography');
            })->name('admin-1.ui-typography');

            Route::get('tabs-accordions-navs', function () {
                return view('admin-1.features.ui.tabs-accordions-navs');
            })->name('admin-1.ui-tabs-accordions-navs');

            Route::get('timeline-1', function () {
                return view('admin-1.features.ui.timeline-1');
            })->name('admin-1.ui-timeline-1');

        });

    });


    /**************************** SIDEBAR: PAGES ******************************/

    Route::group(['prefix' => 'pages'], function () {

        /******************** SIDEBAR: PAGES: ECOMMERCE ***********************/

        Route::group(['prefix' => 'ecommerce'], function () {

            Route::get('dashboard', function () {
                return view('admin-1.pages.ecommerce.dashboard');
            })->name('admin-1.ecommerce-dashboard');

            Route::get('orders', function () {
                return view('admin-1.pages.ecommerce.orders');
            })->name('admin-1.ecommerce-orders');

            Route::get('orders-view', function () {
                return view('admin-1.pages.ecommerce.orders-view');
            })->name('admin-1.ecommerce-orders-view');

            Route::get('products', function () {
                return view('admin-1.pages.ecommerce.products');
            })->name('admin-1.ecommerce-products');

            Route::get('products-edit', function () {
                return view('admin-1.pages.ecommerce.products-edit');
            })->name('admin-1.ecommerce-products-edit');

        });


        /*********************** SIDEBAR: PAGES: APPS *************************/

        Route::group(['prefix' => 'app'], function () {

            Route::get('todo-1', function () {
                return view('admin-1.pages.apps.todo-1');
            })->name('admin-1.app-todo-1');

            Route::get('todo-2', function () {
                return view('admin-1.pages.apps.todo-2');
            })->name('admin-1.app-todo-2');

            Route::get('inbox', function () {
                return view('admin-1.pages.apps.inbox');
            })->name('admin-1.app-inbox');

            Route::get('calendar', function () {
                return view('admin-1.pages.apps.calendar');
            })->name('admin-1.app-calendar');

            Route::get('support', function () {
                return view('admin-1.pages.apps.support');
            })->name('admin-1.app-support');

        });


        /*********************** SIDEBAR: PAGES: USER *************************/

        Route::group(['prefix' => 'user'], function () {

            Route::get('profile-1', function () {
                return view('admin-1.pages.user.profile-1');
            })->name('admin-1.user-profile-1');

            Route::get('profile-1-account', function () {
                return view('admin-1.pages.user.profile-1-account');
            })->name('admin-1.user-profile-1-account');

            Route::get('profile-1-help', function () {
                return view('admin-1.pages.user.profile-1-help');
            })->name('admin-1.user-profile-1-help');

            Route::get('profile-2', function () {
                return view('admin-1.pages.user.profile-2');
            })->name('admin-1.user-profile-2');

            Route::get('user-login-1', function () {
                return view('admin-1.pages.user.user-login-1');
            })->name('admin-1.user-login-1');

            Route::get('user-login-2', function () {
                return view('admin-1.pages.user.user-login-2');
            })->name('admin-1.user-login-2');

            Route::get('user-login-3', function () {
                return view('admin-1.pages.user.user-login-3');
            })->name('admin-1.user-login-3');

            Route::get('user-login-4', function () {
                return view('admin-1.pages.user.user-login-4');
            })->name('admin-1.user-login-4');

            Route::get('user-login-5', function () {
                return view('admin-1.pages.user.user-login-5');
            })->name('admin-1.user-login-5');

            Route::get('user-login-6', function () {
                return view('admin-1.pages.user.user-login-6');
            })->name('admin-1.user-login-6');

            Route::get('user-lock-1', function () {
                return view('admin-1.pages.user.user-lock-1');
            })->name('admin-1.user-lock-1');

            Route::get('user-lock-2', function () {
                return view('admin-1.pages.user.user-lock-2');
            })->name('admin-1.user-lock-2');

        });


        /********************** SIDEBAR: PAGES: GENERAL ***********************/

        Route::group(['prefix' => 'general'], function () {

            Route::get('about', function () {
                return view('admin-1.pages.general.about');
            })->name('admin-1.general-about');

            Route::get('contact', function () {
                return view('admin-1.pages.general.contact');
            })->name('admin-1.general-contact');

            Route::get('portfolio-1', function () {
                return view('admin-1.pages.general.portfolio-1');
            })->name('admin-1.general-portfolio-1');

            Route::get('portfolio-2', function () {
                return view('admin-1.pages.general.portfolio-2');
            })->name('admin-1.general-portfolio-2');

            Route::get('portfolio-3', function () {
                return view('admin-1.pages.general.portfolio-3');
            })->name('admin-1.general-portfolio-3');

            Route::get('portfolio-4', function () {
                return view('admin-1.pages.general.portfolio-4');
            })->name('admin-1.general-portfolio-4');

            Route::get('search-1', function () {
                return view('admin-1.pages.general.search-1');
            })->name('admin-1.general-search-1');

            Route::get('search-2', function () {
                return view('admin-1.pages.general.search-2');
            })->name('admin-1.general-search-2');

            Route::get('search-3', function () {
                return view('admin-1.pages.general.search-3');
            })->name('admin-1.general-search-3');

            Route::get('search-4', function () {
                return view('admin-1.pages.general.search-4');
            })->name('admin-1.general-search-4');

            Route::get('search-5', function () {
                return view('admin-1.pages.general.search-5');
            })->name('admin-1.general-search-5');

            Route::get('pricing-1', function () {
                return view('admin-1.pages.general.pricing-1');
            })->name('admin-1.general-pricing-1');

            Route::get('pricing-2', function () {
                return view('admin-1.pages.general.pricing-2');
            })->name('admin-1.general-pricing-2');

            Route::get('faq', function () {
                return view('admin-1.pages.general.faq');
            })->name('admin-1.general-faq');

            Route::get('blog', function () {
                return view('admin-1.pages.general.blog');
            })->name('admin-1.general-blog');

            Route::get('blog-post', function () {
                return view('admin-1.pages.general.blog-post');
            })->name('admin-1.general-blog-post');

            Route::get('invoice-1', function () {
                return view('admin-1.pages.general.invoice-1');
            })->name('admin-1.general-invoice-1');

            Route::get('invoice-2', function () {
                return view('admin-1.pages.general.invoice-2');
            })->name('admin-1.general-invoice-2');

        });


        /********************** SIDEBAR: PAGES: SYSTEM ************************/

        Route::group(['prefix' => 'system'], function () {

            Route::get('cookie-consent-1', function () {
                return view('admin-1.pages.system.cookie-consent-1');
            })->name('admin-1.system-cookie-consent-1');

            Route::get('cookie-consent-2', function () {
                return view('admin-1.pages.system.cookie-consent-2');
            })->name('admin-1.system-cookie-consent-2');

            Route::get('coming-soon', function () {
                return view('admin-1.pages.system.coming-soon');
            })->name('admin-1.system-coming-soon');

            Route::get('404-1', function () {
                return view('admin-1.pages.system.404-1');
            })->name('admin-1.system-404-1');

            Route::get('404-2', function () {
                return view('admin-1.pages.system.404-2');
            })->name('admin-1.system-404-2');

            Route::get('404-3', function () {
                return view('admin-1.pages.system.404-3');
            })->name('admin-1.system-404-3');

            Route::get('500-1', function () {
                return view('admin-1.pages.system.500-1');
            })->name('admin-1.system-500-1');

            Route::get('500-2', function () {
                return view('admin-1.pages.system.500-2');
            })->name('admin-1.system-500-2');

        });

    });

    /************************ SIDEBAR: Partial View ***************************/

    ////////////////////////////////// App /////////////////////////////////////

    Route::get('_ajax/inbox-datalist', function () {
        return view('admin-1.pages.apps._ajax.inbox-datalist');
    })->name('admin-1.ajax.inbox-datalist');

    Route::get('_ajax/inbox-view', function () {
        return view('admin-1.pages.apps._ajax.inbox-view');
    })->name('admin-1.ajax.inbox-view');

    Route::get('_ajax/inbox-compose', function () {
        return view('admin-1.pages.apps._ajax.inbox-compose');
    })->name('admin-1.ajax.inbox-compose');

    Route::get('_partial/support-staff', function () {
        return view('admin-1.pages.apps._partial.support-staff');
    })->name('admin-1.partial.support-staff');

    Route::get('_partial/support-config', function () {
        return view('admin-1.pages.apps._partial.support-config');
    })->name('admin-1.partial.support-config');

    Route::get('_partial/support-details', function () {
        return view('admin-1.pages.apps._partial.support-details');
    })->name('admin-1.partial.support-details');

    //////////////////////////////// General ///////////////////////////////////

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

});
