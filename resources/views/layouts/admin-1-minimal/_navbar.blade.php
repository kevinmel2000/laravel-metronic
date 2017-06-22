<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner ">

        <div class="page-logo">
            <a href="index.html">
                <img src="{{ asset('assets/layouts/layout/img/logo.png') }}" alt="logo" class="logo-default">
            </a>
            <div class="menu-toggler sidebar-toggler">
                <span></span>
            </div>
        </div>

        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            <span></span>
        </a>

        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">

                @include('layouts.admin-1-minimal.navbar.notification')

                @include('layouts.admin-1-minimal.navbar.todo')

                @include('layouts.admin-1-minimal.navbar.user')

                @include('layouts.admin-1-minimal.navbar.quick-sidebar')

            </ul>
        </div>

    </div>
</div>
