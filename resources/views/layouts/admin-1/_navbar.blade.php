<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner ">

        <div class="page-logo">
            <a href="{{ route('admin-1.index') }}">
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

                @include('layouts.admin-1.navbar.notification')

                @include('layouts.admin-1.navbar.inbox')

                @include('layouts.admin-1.navbar.todo')

                @include('layouts.admin-1.navbar.user')

                @include('layouts.admin-1.navbar.quick-sidebar')

            </ul>
        </div>

    </div>
</div>
