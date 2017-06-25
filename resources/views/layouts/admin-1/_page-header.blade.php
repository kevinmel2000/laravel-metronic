<div class="page-header navbar navbar-fixed-top">

    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">

        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.html">
                <img src="{{ asset('assets/layouts/layout/img/logo.png') }}" alt="logo" class="logo-default"> </a>
            <div class="menu-toggler sidebar-toggler">
                <span></span>
            </div>
        </div>
        <!-- END LOGO -->

        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            <span></span>
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->

        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">

                @include('layouts.admin-1.navbar.notification')

                @include('layouts.admin-1.navbar.inbox')

                @include('layouts.admin-1.navbar.todo')

                @include('layouts.admin-1.navbar.user')

                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-quick-sidebar-toggler">
                    <a href="javascript:;" class="dropdown-toggle">
                        <i class="icon-logout"></i>
                    </a>
                </li>
                <!-- END QUICK SIDEBAR TOGGLER -->

            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->

    </div>
    <!-- END HEADER INNER -->

</div>
