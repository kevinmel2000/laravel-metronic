<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('layouts.admin-1-minimal._header')

        @stack('header-script')
    </head>
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">

            @include('layouts.admin-1-minimal._navbar')

            <div class="clearfix"> </div>

            <div class="page-container">

                @include('layouts.admin-1-minimal._sidebar')

                <div class="page-content-wrapper">
                    <div class="page-content">

                        <div class="page-bar">
                            @yield('breadcrumb')
                        </div>

                        @yield('content')
                    </div>
                </div>

                @include('layouts.admin-1-minimal._quick-sidebar')
            </div>

            @include('layouts.admin-1-minimal._page-footer')
        </div>

        @include('layouts.admin-1-minimal._quick-nav')

        @include('layouts.admin-1-minimal._footer')

        @stack('footer-script')
    </body>
</html>
