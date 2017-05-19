@include('layouts.admin-1._header')

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">

            @include('layouts.admin-1._page-header')

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

            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
                    <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                    <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>

        @include('layouts.admin-1._quick-nav')

        @include('layouts.admin-1._footer')
    </body>
</html>
