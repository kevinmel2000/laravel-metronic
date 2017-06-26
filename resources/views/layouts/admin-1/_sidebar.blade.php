<div class="page-sidebar-wrapper">

    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">

        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">

            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>

            @include('layouts.admin-1.sidebar.search-form')

            @include('layouts.admin-1.sidebar.dashboard')

            <li class="heading">
                <h3 class="uppercase">Features</h3>
            </li>

            @include('layouts.admin-1.sidebar.ui-feature')

            @include('layouts.admin-1.sidebar.component')

            @include('layouts.admin-1.sidebar.form-stuff')

            @include('layouts.admin-1.sidebar.element')

            @include('layouts.admin-1.sidebar.table')

            @include('layouts.admin-1.sidebar.portlet')

            @include('layouts.admin-1.sidebar.chart')

            @include('layouts.admin-1.sidebar.map')

            <li class="heading">
                <h3 class="uppercase">Layouts</h3>
            </li>

            @include('layouts.admin-1.sidebar.page-layout')

            @include('layouts.admin-1.sidebar.sidebar-layout')

            @include('layouts.admin-1.sidebar.horizontal-menu')

            @include('layouts.admin-1.sidebar.custom-layout')

            <li class="heading">
                <h3 class="uppercase">Pages</h3>
            </li>

            @include('layouts.admin-1.sidebar.ecommerce')

            @include('layouts.admin-1.sidebar.app')

            @include('layouts.admin-1.sidebar.user')

            @include('layouts.admin-1.sidebar.general')

            @include('layouts.admin-1.sidebar.system')

            @include('layouts.admin-1.sidebar.multi-level')
        </ul>
        <!-- END SIDEBAR MENU -->

    </div>
    <!-- END SIDEBAR -->

</div>
