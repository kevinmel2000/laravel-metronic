<div class="page-sidebar-wrapper">

    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">

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

            @include('layouts.admin-1-minimal.sidebar.search-form')

            @include('layouts.admin-1-minimal.sidebar.dashboard')

            <li class="heading">
                <h3 class="uppercase">Features</h3>
            </li>

            @include('layouts.admin-1-minimal.sidebar.ui-feature')

            @include('layouts.admin-1-minimal.sidebar.component')

            @include('layouts.admin-1-minimal.sidebar.form-stuff')

            @include('layouts.admin-1-minimal.sidebar.element')

            @include('layouts.admin-1-minimal.sidebar.table')

            @include('layouts.admin-1-minimal.sidebar.portlet')

            @include('layouts.admin-1-minimal.sidebar.chart')

            @include('layouts.admin-1-minimal.sidebar.map')

            <li class="heading">
                <h3 class="uppercase">Layouts</h3>
            </li>

            @include('layouts.admin-1-minimal.sidebar.page-layout')

            @include('layouts.admin-1-minimal.sidebar.sidebar-layout')

            @include('layouts.admin-1-minimal.sidebar.horizontal-menu')

            @include('layouts.admin-1-minimal.sidebar.custom-layout')

            <li class="heading">
                <h3 class="uppercase">Pages</h3>
            </li>

            @include('layouts.admin-1-minimal.sidebar.ecommerce')

            @include('layouts.admin-1-minimal.sidebar.app')

            @include('layouts.admin-1-minimal.sidebar.user')

            @include('layouts.admin-1-minimal.sidebar.general')

            @include('layouts.admin-1-minimal.sidebar.system')

            @include('layouts.admin-1-minimal.sidebar.multi-level')
        </ul>

    </div>
</div>
