@extends('layouts.admin-1.master')

@section('title', 'Search #3')

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">General</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Search</span>
        </li>
    </ul>
@endsection

@section('content')
    <h1 class="page-title"> Search Results 3
        <small>search results</small>
    </h1>

    <div class="search-page search-content-2">
        <div class="search-bar ">
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn blue uppercase bold" type="button">Search</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="search-container ">
                    <ul class="search-container">
                        <li class="search-item clearfix">
                            <div class="search-content text-left">
                                <h2 class="search-title">
                                    <a href="javascript:;">Metronic Search Results</a>
                                </h2>
                                <p class="search-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque, mauris quam volutpat nunc </p>
                            </div>
                        </li>
                        <li class="search-item clearfix">
                            <div class="search-content text-left">
                                <h2 class="search-title">
                                    <a href="javascript:;">Lorem ipsum dolor</a>
                                </h2>
                                <p class="search-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque, mauris quam volutpat nunc </p>
                            </div>
                        </li>
                        <li class="search-item clearfix">
                            <div class="search-content text-left">
                                <h2 class="search-title">
                                    <a href="javascript:;">sit amet</a>
                                </h2>
                                <p class="search-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque, mauris quam volutpat nunc </p>
                            </div>
                        </li>
                        <li class="search-item clearfix">
                            <div class="search-content text-left">
                                <h2 class="search-title">
                                    <a href="javascript:;">consectetur adipiscing</a>
                                </h2>
                                <p class="search-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque, mauris quam volutpat nunc </p>
                            </div>
                        </li>
                        <li class="search-item clearfix">
                            <div class="search-content text-left">
                                <h2 class="search-title">
                                    <a href="javascript:;">Metronic Search Reborn</a>
                                </h2>
                                <p class="search-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque, mauris quam volutpat nunc </p>
                            </div>
                        </li>
                        <li class="search-item clearfix">
                            <div class="search-content text-left">
                                <h2 class="search-title">
                                    <a href="javascript:;">tristique scelerisque</a>
                                </h2>
                                <p class="search-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque, mauris quam volutpat nunc </p>
                            </div>
                        </li>
                    </ul>
                    <div class="search-pagination">
                        <ul class="pagination">
                            <li class="page-active">
                                <a href="javascript:;"> 1 </a>
                            </li>
                            <li>
                                <a href="javascript:;"> 2 </a>
                            </li>
                            <li>
                                <a href="javascript:;"> 3 </a>
                            </li>
                            <li>
                                <a href="javascript:;"> 4 </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <!-- BEGIN PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-edit font-dark"></i>
                            <span class="caption-subject font-dark bold uppercase">Notes</span>
                        </div>
                        <div class="actions">
                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                <i class="icon-cloud-upload"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                <i class="icon-wrench"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                <i class="icon-trash"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="note note-success">
                            <h4 class="block">Success! Some Header Goes Here</h4>
                            <p> Duis mollis, est non commodo luctus, nisi erat mattis consectetur purus sit amet porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                        </div>
                        <div class="note note-info">
                            <h4 class="block">Info! Some Header Goes Here</h4>
                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, mattis consectetur purus sit amet eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                        </div>
                        <div class="note note-danger">
                            <h4 class="block">Danger! Some Header Goes Here</h4>
                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit mattis consectetur purus sit amet.\ Cras mattis consectetur purus sit amet fermentum. </p>
                        </div>
                        <div class="note note-warning">
                            <h4 class="block">Warning! Some Header Goes Here</h4>
                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit mattis consectetur purus sit amet. Cras mattis consectetur purus sit amet fermentum. </p>
                        </div>
                    </div>
                </div>
                <!-- END PORTLET-->
            </div>
        </div>
    </div>
@endsection

@push('page-level-plugins-header')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/fancybox/source/jquery.fancybox.css') }}">
@endpush
