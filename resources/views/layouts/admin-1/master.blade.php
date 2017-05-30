@include('layouts.admin-1._header')

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">

            @include('layouts.admin-1._navbar')

            <div class="clearfix"> </div>

            <div class="page-container">

                @include('layouts.admin-1._sidebar')

                <div class="page-content-wrapper">
                    <div class="page-content">

                        @include('layouts.admin-1._theme-panel')

                        <div class="page-bar">
                            @yield('breadcrumb')

                            @include('layouts.admin-1._page-toolbar')
                        </div>

                        @yield('content')
                    </div>
                </div>

                @include('layouts.admin-1._quick-sidebar')
            </div>

            @include('layouts.admin-1._page-footer')
        </div>

        @include('layouts.admin-1._quick-nav')

        @include('layouts.admin-1._footer')
    </body>
</html>
