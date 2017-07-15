@extends('layouts.admin-1.master')

@section('title', 'Search #4')

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
    <h1 class="page-title"> Search Results 4
        <small>search results</small>
    </h1>

    <div class="search-page search-content-3">
        <div class="row">
            <div class="col-lg-4">
                <div class="search-filter ">
                    <div class="search-label uppercase">Search By</div>
                    <div class="input-icon right">
                        <i class="icon-magnifier"></i>
                        <input type="text" class="form-control" placeholder="Filter by keywords"> </div>
                    <div class="search-label uppercase">Sort By</div>
                    <select class="form-control">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                        <option>Option 5</option>
                    </select>
                    <div class="search-label uppercase">Date</div>
                    <div class="input-icon right">
                        <i class="icon-calendar"></i>
                        <input class="form-control date-picker" type="text" placeholder="Any Date" /> </div>
                    <button class="btn green bold uppercase btn-block">Update Search Results</button>
                    <div class="search-filter-divider bg-grey-steel"></div>
                    <div class="row">
                        <div class="col-xs-6">
                            <button class="btn grey bold uppercase btn-block">Reset Search</button>
                        </div>
                        <div class="col-xs-6">
                            <button class="btn grey-cararra font-blue bold btn-block">Advanced Search</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-4">
                        <div class="tile-container">
                            <div class="tile-thumbnail">
                                <a href="javascript:;">
                                    <img src="../assets/pages/img/page_general_search/01.jpg" />
                                </a>
                            </div>
                            <div class="tile-title">
                                <h3>
                                    <a href="javascript:;">Mobile App</a>
                                </h3>
                                <a href="javascript:;">
                                    <i class="icon-question font-blue"></i>
                                </a>
                                <a href="javascript:;">
                                    <i class="icon-plus font-green-meadow"></i>
                                </a>
                                <div class="tile-desc">
                                    <p>Activity:
                                        <a href="javascript:;">Bob Robson</a> -
                                        <span class="font-grey-salt">25 mins ago</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tile-container">
                            <div class="tile-thumbnail">
                                <a href="javascript:;">
                                    <img src="../assets/pages/img/page_general_search/1.jpg" />
                                </a>
                            </div>
                            <div class="tile-title">
                                <h3>
                                    <a href="javascript:;">Mobile App</a>
                                </h3>
                                <a href="javascript:;">
                                    <i class="icon-question font-blue"></i>
                                </a>
                                <a href="javascript:;">
                                    <i class="icon-plus font-green-meadow"></i>
                                </a>
                                <div class="tile-desc">
                                    <p>Activity:
                                        <a href="javascript:;">Bob Robson</a> -
                                        <span class="font-grey-salt">25 mins ago</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tile-container">
                            <div class="tile-thumbnail">
                                <a href="javascript:;">
                                    <img src="../assets/pages/img/page_general_search/02.jpg" />
                                </a>
                            </div>
                            <div class="tile-title">
                                <h3>
                                    <a href="javascript:;">Mobile App</a>
                                </h3>
                                <a href="javascript:;">
                                    <i class="icon-question font-blue"></i>
                                </a>
                                <a href="javascript:;">
                                    <i class="icon-plus font-green-meadow"></i>
                                </a>
                                <div class="tile-desc">
                                    <p>Activity:
                                        <a href="javascript:;">Bob Robson</a> -
                                        <span class="font-grey-salt">25 mins ago</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tile-container">
                            <div class="tile-thumbnail">
                                <a href="javascript:;">
                                    <img src="../assets/pages/img/page_general_search/2.jpg" />
                                </a>
                            </div>
                            <div class="tile-title">
                                <h3>
                                    <a href="javascript:;">Mobile App</a>
                                </h3>
                                <a href="javascript:;">
                                    <i class="icon-question font-blue"></i>
                                </a>
                                <a href="javascript:;">
                                    <i class="icon-plus font-green-meadow"></i>
                                </a>
                                <div class="tile-desc">
                                    <p>Activity:
                                        <a href="javascript:;">Bob Robson</a> -
                                        <span class="font-grey-salt">25 mins ago</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tile-container">
                            <div class="tile-thumbnail">
                                <a href="javascript:;">
                                    <img src="../assets/pages/img/page_general_search/03.jpg" />
                                </a>
                            </div>
                            <div class="tile-title">
                                <h3>
                                    <a href="javascript:;">Mobile App</a>
                                </h3>
                                <a href="javascript:;">
                                    <i class="icon-question font-blue"></i>
                                </a>
                                <a href="javascript:;">
                                    <i class="icon-plus font-green-meadow"></i>
                                </a>
                                <div class="tile-desc">
                                    <p>Activity:
                                        <a href="javascript:;">Bob Robson</a> -
                                        <span class="font-grey-salt">25 mins ago</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tile-container">
                            <div class="tile-thumbnail">
                                <a href="javascript:;">
                                    <img src="../assets/pages/img/page_general_search/3.jpg" />
                                </a>
                            </div>
                            <div class="tile-title">
                                <h3>
                                    <a href="javascript:;">Mobile App</a>
                                </h3>
                                <a href="javascript:;">
                                    <i class="icon-question font-blue"></i>
                                </a>
                                <a href="javascript:;">
                                    <i class="icon-plus font-green-meadow"></i>
                                </a>
                                <div class="tile-desc">
                                    <p>Activity:
                                        <a href="javascript:;">Bob Robson</a> -
                                        <span class="font-grey-salt">25 mins ago</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tile-container">
                            <div class="tile-thumbnail">
                                <a href="javascript:;">
                                    <img src="../assets/pages/img/page_general_search/04.jpg" />
                                </a>
                            </div>
                            <div class="tile-title">
                                <h3>
                                    <a href="javascript:;">Mobile App</a>
                                </h3>
                                <a href="javascript:;">
                                    <i class="icon-question font-blue"></i>
                                </a>
                                <a href="javascript:;">
                                    <i class="icon-plus font-green-meadow"></i>
                                </a>
                                <div class="tile-desc">
                                    <p>Activity:
                                        <a href="javascript:;">Bob Robson</a> -
                                        <span class="font-grey-salt">25 mins ago</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tile-container">
                            <div class="tile-thumbnail">
                                <a href="javascript:;">
                                    <img src="../assets/pages/img/page_general_search/4.jpg" />
                                </a>
                            </div>
                            <div class="tile-title">
                                <h3>
                                    <a href="javascript:;">Mobile App</a>
                                </h3>
                                <a href="javascript:;">
                                    <i class="icon-question font-blue"></i>
                                </a>
                                <a href="javascript:;">
                                    <i class="icon-plus font-green-meadow"></i>
                                </a>
                                <div class="tile-desc">
                                    <p>Activity:
                                        <a href="javascript:;">Bob Robson</a> -
                                        <span class="font-grey-salt">25 mins ago</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tile-container">
                            <div class="tile-thumbnail">
                                <a href="javascript:;">
                                    <img src="../assets/pages/img/page_general_search/05.jpg" />
                                </a>
                            </div>
                            <div class="tile-title">
                                <h3>
                                    <a href="javascript:;">Mobile App</a>
                                </h3>
                                <a href="javascript:;">
                                    <i class="icon-question font-blue"></i>
                                </a>
                                <a href="javascript:;">
                                    <i class="icon-plus font-green-meadow"></i>
                                </a>
                                <div class="tile-desc">
                                    <p>Activity:
                                        <a href="javascript:;">Bob Robson</a> -
                                        <span class="font-grey-salt">25 mins ago</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
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
        </div>
    </div>
@endsection
