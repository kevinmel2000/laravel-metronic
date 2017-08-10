@extends('layouts.admin-1.master')

@section('title', 'Admin Dashboard 3')

@section('breadcrumb')
    <h1 class="page-title"> Admin Dashboard 3
        <small>statistics, charts, recent events and reports</small>
    </h1>

    <ul class="page-breadcrumb">
        <li>
            <a href="{{ route('admin-1.index') }}">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <span>Dashboard</span>
        </li>
    </ul>

    <div class="page-toolbar">
        <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height green" data-placement="top" data-original-title="Change dashboard date range">
            <i class="icon-calendar"></i>&nbsp;
            <span class="thin uppercase hidden-xs"></span>&nbsp;
            <i class="fa fa-angle-down"></i>
        </div>
    </div>
@endsection

@section('content')

    @include('admin-1.dashboard._03-stats')

    @include('admin-1.dashboard._03-portlet-1-2')

    @include('admin-1.dashboard._03-portlet-3-4')

    @include('admin-1.dashboard._03-portlet-5-6')

    @include('admin-1.dashboard._03-portlet-7-8')

    @include('admin-1.dashboard._03-portlet-9-10')

    @include('admin-1.dashboard._03-portlet-11-12')

    @include('admin-1.dashboard._03-portlet-13-14')

@endsection

@push('page-level-plugins-header')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/morris/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}">
@endpush

@push('page-level-plugins-footer')
    <script type="text/javascript" src="{{ asset('assets/global/plugins/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/morris/morris.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/morris/raphael-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/counterup/jquery.waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/counterup/jquery.counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/amcharts/amcharts/amcharts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/amcharts/amcharts/serial.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/amcharts/amcharts/pie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/amcharts/amcharts/radar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/amcharts/amcharts/themes/light.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/amcharts/amcharts/themes/patterns.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/amcharts/amcharts/themes/chalk.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/amcharts/ammap/ammap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/amcharts/ammap/maps/js/worldLow.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/amcharts/amstockcharts/amstock.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/horizontal-timeline/horizontal-timeline.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/flot/jquery.flot.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/flot/jquery.flot.resize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/flot/jquery.flot.categories.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery.sparkline.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}"></script>
@endpush

@push('page-level-scripts')
    <script type="text/javascript" src="{{ asset('assets/pages/scripts/dashboard.min.js') }}"></script>
@endpush
