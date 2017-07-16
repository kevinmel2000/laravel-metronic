@extends('layouts.admin-1.master')

@section('title', 'Search #5')

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
    <h1 class="page-title"> Search Results 5
        <small>search results</small>
    </h1>

    <div class="search-page search-content-4">
        <div class="search-bar bordered">
            <div class="row">
                <div class="col-lg-8">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn green-soft uppercase bold" type="button">Search</button>
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 extra-buttons">
                    <button class="btn grey-steel uppercase bold" type="button">Reset Search</button>
                    <button class="btn grey-cararra font-blue" type="button">Advanced Search</button>
                </div>
            </div>
        </div>
        <div class="search-table table-responsive">
            <table class="table table-bordered table-striped table-condensed">
                <thead class="bg-blue">
                    <tr>
                        <th>
                            <a href="javascript:;">Status</a>
                        </th>
                        <th>
                            <a href="javascript:;">Date</a>
                        </th>
                        <th>
                            <a href="javascript:;">Title & Author</a>
                        </th>
                        <th>
                            <a href="javascript:;">Description</a>
                        </th>
                        <th>
                            <a href="javascript:;">Download</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-status">
                            <a href="javascript:;">
                                <i class="icon-arrow-right font-blue"></i>
                            </a>
                        </td>
                        <td class="table-date font-blue">
                            <a href="javascript:;">October 17, 2015</a>
                        </td>
                        <td class="table-title">
                            <h3>
                                <a href="javascript:;">Metronic Admin Reborn</a>
                            </h3>
                            <p>Last Activity:
                                <a href="javascript:;">Bob Robson</a> -
                                <span class="font-grey-cascade">25 mins ago</span>
                            </p>
                        </td>
                        <td class="table-desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy sead euismod dolore tincidunt ut laoreet dolore dolor sit amet </td>
                        <td class="table-download">
                            <a href="javascript:;">
                                <i class="icon-doc font-green-soft"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-status">
                            <a href="javascript:;">
                                <i class="icon-arrow-right font-blue"></i>
                            </a>
                        </td>
                        <td class="table-date font-blue">
                            <a href="javascript:;">October 17, 2015</a>
                        </td>
                        <td class="table-title">
                            <h3>
                                <a href="javascript:;">Lorem ipsum dolor</a>
                            </h3>
                            <p>Last Activity:
                                <a href="javascript:;">Bob Robson</a> -
                                <span class="font-grey-cascade">25 mins ago</span>
                            </p>
                        </td>
                        <td class="table-desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy sead euismod dolore tincidunt ut laoreet dolore dolor sit amet </td>
                        <td class="table-download">
                            <a href="javascript:;">
                                <i class="icon-doc font-green-soft"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-status">
                            <a href="javascript:;">
                                <i class="icon-check font-grey"></i>
                            </a>
                        </td>
                        <td class="table-date font-blue">
                            <a href="javascript:;">October 15, 2015</a>
                        </td>
                        <td class="table-title">
                            <h3>
                                <a href="javascript:;">Typi non habent</a>
                            </h3>
                            <p>Last Activity:
                                <a href="javascript:;">Bob Robson</a> -
                                <span class="font-grey-cascade">25 mins ago</span>
                            </p>
                        </td>
                        <td class="table-desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy sead euismod dolore tincidunt ut laoreet dolore dolor sit amet </td>
                        <td class="table-download">
                            <a href="javascript:;">
                                <i class="icon-doc font-green-soft"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-status">
                            <a href="javascript:;">
                                <i class="icon-arrow-right font-blue"></i>
                            </a>
                        </td>
                        <td class="table-date font-blue">
                            <a href="javascript:;">October 12, 2015</a>
                        </td>
                        <td class="table-title">
                            <h3>
                                <a href="javascript:;">Metronic Admin Search Result</a>
                            </h3>
                            <p>Last Activity:
                                <a href="javascript:;">Bob Robson</a> -
                                <span class="font-grey-cascade">25 mins ago</span>
                            </p>
                        </td>
                        <td class="table-desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy sead euismod dolore tincidunt ut laoreet dolore dolor sit amet </td>
                        <td class="table-download">
                            <a href="javascript:;">
                                <i class="icon-doc font-green-soft"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-status">
                            <a href="javascript:;">
                                <i class="icon-arrow-right font-blue"></i>
                            </a>
                        </td>
                        <td class="table-date font-blue">
                            <a href="javascript:;">October 11, 2015</a>
                        </td>
                        <td class="table-title">
                            <h3>
                                <a href="javascript:;">Mirum est notare</a>
                            </h3>
                            <p>Last Activity:
                                <a href="javascript:;">Bob Robson</a> -
                                <span class="font-grey-cascade">25 mins ago</span>
                            </p>
                        </td>
                        <td class="table-desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy sead euismod dolore tincidunt ut laoreet dolore dolor sit amet </td>
                        <td class="table-download">
                            <a href="javascript:;">
                                <i class="icon-doc font-green-soft"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-status">
                            <a href="javascript:;">
                                <i class="icon-check font-grey"></i>
                            </a>
                        </td>
                        <td class="table-date font-blue">
                            <a href="javascript:;">October 9, 2015</a>
                        </td>
                        <td class="table-title">
                            <h3>
                                <a href="javascript:;">Metronic Admin Reborn</a>
                            </h3>
                            <p>Last Activity:
                                <a href="javascript:;">Bob Robson</a> -
                                <span class="font-grey-cascade">25 mins ago</span>
                            </p>
                        </td>
                        <td class="table-desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy sead euismod dolore tincidunt ut laoreet dolore dolor sit amet </td>
                        <td class="table-download">
                            <a href="javascript:;">
                                <i class="icon-doc font-green-soft"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-status">
                            <a href="javascript:;">
                                <i class="icon-check font-grey"></i>
                            </a>
                        </td>
                        <td class="table-date font-blue">
                            <a href="javascript:;">October 9, 2015</a>
                        </td>
                        <td class="table-title">
                            <h3>
                                <a href="javascript:;">Metronic Admin Reborn</a>
                            </h3>
                            <p>Last Activity:
                                <a href="javascript:;">Bob Robson</a> -
                                <span class="font-grey-cascade">25 mins ago</span>
                            </p>
                        </td>
                        <td class="table-desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy sead euismod dolore tincidunt ut laoreet dolore dolor sit amet </td>
                        <td class="table-download">
                            <a href="javascript:;">
                                <i class="icon-doc font-green-soft"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-status">
                            <a href="javascript:;">
                                <i class="icon-arrow-right font-blue"></i>
                            </a>
                        </td>
                        <td class="table-date font-blue">
                            <a href="javascript:;">October 6, 2015</a>
                        </td>
                        <td class="table-title">
                            <h3>
                                <a href="javascript:;">Metronic Admin Reborn Progress</a>
                            </h3>
                            <p>Last Activity:
                                <a href="javascript:;">Bob Robson</a> -
                                <span class="font-grey-cascade">25 mins ago</span>
                            </p>
                        </td>
                        <td class="table-desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy sead euismod dolore tincidunt ut laoreet dolore dolor sit amet </td>
                        <td class="table-download">
                            <a href="javascript:;">
                                <i class="icon-doc font-green-soft"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-status">
                            <a href="javascript:;">
                                <i class="icon-arrow-right font-blue"></i>
                            </a>
                        </td>
                        <td class="table-date font-blue">
                            <a href="javascript:;">October 3, 2015</a>
                        </td>
                        <td class="table-title">
                            <h3>
                                <a href="javascript:;">Metronic Search Page 5</a>
                            </h3>
                            <p>Last Activity:
                                <a href="javascript:;">Bob Robson</a> -
                                <span class="font-grey-cascade">25 mins ago</span>
                            </p>
                        </td>
                        <td class="table-desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy sead euismod dolore tincidunt ut laoreet dolore dolor sit amet </td>
                        <td class="table-download">
                            <a href="javascript:;">
                                <i class="icon-doc font-green-soft"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="search-pagination pagination-rounded">
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
