@extends('layouts.admin-1.master')

@section('title', 'Admin Dashboard')

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li>
            <a href="{{ route('admin-1.index') }}">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Dashboard</span>
        </li>
    </ul>

    <div class="page-toolbar">
        <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
            <i class="icon-calendar"></i>&nbsp;
            <span class="thin uppercase hidden-xs"></span>&nbsp;
            <i class="fa fa-angle-down"></i>
        </div>
    </div>
@endsection

@section('content')
    <h1 class="page-title"> Admin Dashboard
        <small>statistics, charts, recent events and reports</small>
    </h1>

    @include('admin-1.dashboard._01-stats')

    @include('admin-1.dashboard._01-portlet-1-2')

    @include('admin-1.dashboard._01-portlet-3-4')

    @include('admin-1.dashboard._01-portlet-5-6')

    @include('admin-1.dashboard._01-portlet-7-8')

    @include('admin-1.dashboard._01-portlet-9-10')

    @include('admin-1.dashboard._01-portlet-11-12')

    @include('admin-1.dashboard._01-portlet-13-14')

    @include('admin-1.dashboard._01-portlet-15-16')

@endsection

@push('page-level-plugins-header')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/morris/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}">
@endpush
