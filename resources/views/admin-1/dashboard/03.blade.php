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
