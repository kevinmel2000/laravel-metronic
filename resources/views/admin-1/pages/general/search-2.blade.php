@extends('layouts.admin-1.master')

@section('title', 'Search #2')

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
    <h1 class="page-title"> Search Results 2
        <small>search results</small>
    </h1>

    <div class="search-page search-content-2">
        <div class="search-bar ">
            <div class="row">
                <div class="col-md-7">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn blue uppercase bold" type="button">Search</button>
                        </span>
                    </div>
                </div>
                <div class="col-md-5">
                    <p class="search-desc clearfix"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque. </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7">
                <div class="search-container ">
                    <ul>
                        <li class="search-item-header">
                            <div class="row">
                                <div class="col-sm-9 col-xs-8">
                                    <h3>Search results...</h3>
                                </div>
                                <div class="col-sm-3 col-xs-4">
                                    <div class="form-group">
                                        <select class="bs-select form-control">
                                            <option>Questions</option>
                                            <option>Answers</option>
                                            <option>Users</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-item clearfix">
                            <div class="search-content">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <h2 class="search-title">
                                            <a href="javascript:;">Metronic Search Results</a>
                                        </h2>
                                        <p class="search-desc"> Last Activity:
                                            <a href="javascript:;">Bob Robson</a> -
                                            <span class="font-grey-salt">25 mins ago</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <p class="search-counter-number">362</p>
                                        <p class="search-counter-label uppercase">Questions</p>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <p class="search-counter-number">79</p>
                                        <p class="search-counter-label uppercase">Answers</p>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <p class="search-counter-number">8</p>
                                        <p class="search-counter-label uppercase">Users</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-item clearfix">
                            <div class="search-content">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <h2 class="search-title">
                                            <a href="javascript:;">Lorem ipsum dolor</a>
                                        </h2>
                                        <p class="search-desc"> Last Activity:
                                            <a href="javascript:;">Bob Robson</a> -
                                            <span class="font-grey-salt">25 mins ago</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <p class="search-counter-number">405</p>
                                        <p class="search-counter-label uppercase">Questions</p>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <p class="search-counter-number">81</p>
                                        <p class="search-counter-label uppercase">Answers</p>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <p class="search-counter-number">15</p>
                                        <p class="search-counter-label uppercase">Users</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-item clearfix">
                            <div class="search-content">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <h2 class="search-title">
                                            <a href="javascript:;">Nam liber tempor cum soluta</a>
                                        </h2>
                                        <p class="search-desc"> Last Activity:
                                            <a href="javascript:;">Bob Robson</a> -
                                            <span class="font-grey-salt">25 mins ago</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <p class="search-counter-number">254</p>
                                        <p class="search-counter-label uppercase">Questions</p>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <p class="search-counter-number">52</p>
                                        <p class="search-counter-label uppercase">Answers</p>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <p class="search-counter-number">5</p>
                                        <p class="search-counter-label uppercase">Users</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-item clearfix">
                            <div class="search-content">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <h2 class="search-title">
                                            <a href="javascript:;">Metronic Admin Reborn</a>
                                        </h2>
                                        <p class="search-desc"> Last Activity:
                                            <a href="javascript:;">Bob Robson</a> -
                                            <span class="font-grey-salt">25 mins ago</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <p class="search-counter-number">332</p>
                                        <p class="search-counter-label uppercase">Questions</p>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <p class="search-counter-number">69</p>
                                        <p class="search-counter-label uppercase">Answers</p>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <p class="search-counter-number">8</p>
                                        <p class="search-counter-label uppercase">Users</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-item clearfix">
                            <div class="search-content">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <h2 class="search-title">
                                            <a href="javascript:;">Claritas est etiam</a>
                                        </h2>
                                        <p class="search-desc"> Last Activity:
                                            <a href="javascript:;">Bob Robson</a> -
                                            <span class="font-grey-salt">25 mins ago</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <p class="search-counter-number">224</p>
                                        <p class="search-counter-label uppercase">Questions</p>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <p class="search-counter-number">45</p>
                                        <p class="search-counter-label uppercase">Answers</p>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <p class="search-counter-number">5</p>
                                        <p class="search-counter-label uppercase">Users</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-item clearfix">
                            <div class="search-content">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <h2 class="search-title">
                                            <a href="javascript:;">Metronic Admin Reborn Work Progress</a>
                                        </h2>
                                        <p class="search-desc"> Last Activity:
                                            <a href="javascript:;">Bob Robson</a> -
                                            <span class="font-grey-salt">25 mins ago</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <p class="search-counter-number">441</p>
                                        <p class="search-counter-label uppercase">Questions</p>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <p class="search-counter-number">89</p>
                                        <p class="search-counter-label uppercase">Answers</p>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <p class="search-counter-number">10</p>
                                        <p class="search-counter-label uppercase">Users</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-item clearfix">
                            <div class="search-content">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <h2 class="search-title">
                                            <a href="javascript:;">consectetur adipiscing</a>
                                        </h2>
                                        <p class="search-desc"> Last Activity:
                                            <a href="javascript:;">Bob Robson</a> -
                                            <span class="font-grey-salt">25 mins ago</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <p class="search-counter-number">112</p>
                                        <p class="search-counter-label uppercase">Questions</p>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <p class="search-counter-number">62</p>
                                        <p class="search-counter-label uppercase">Answers</p>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <p class="search-counter-number">7</p>
                                        <p class="search-counter-label uppercase">Users</p>
                                    </div>
                                </div>
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
            </div>
        </div>
    </div>
@endsection

@push('page-level-plugins-header')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/fancybox/source/jquery.fancybox.css') }}">
@endpush

@push('page-level-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/css/search.min.css') }}">
@endpush

@push('page-level-plugins-footer')
    <script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/fancybox/source/jquery.fancybox.pack.js') }}"></script>
@endpush

@push('page-level-scripts')
    <script type="text/javascript" src="{{ asset('assets/pages/scripts/search.min.js') }}"></script>
@endpush

@push('page-level-scripts')
    <script>
        $('body').addClass('page-container-bg-solid');
    </script>
@endpush
