@extends('layouts.admin-1.master')

@section('title', 'eCommerce Dashboard')

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li>
            <a href="{{ route('admin-1.index') }}">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>eCommerce</span>
        </li>
    </ul>
@endsection

@section('content')
    <h1 class="page-title"> eCommercen Dashboard
        <small>recent ecommerce statistics, charts, recent orders and sales</small>
    </h1>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
            <div class="dashboard-stat blue">
                <div class="visual">
                    <i class="fa fa-briefcase fa-icon-medium"></i>
                </div>
                <div class="details">
                    <div class="number"> $168,492.54 </div>
                    <div class="desc"> Lifetime Sales </div>
                </div>
                <a class="more" href="javascript:;"> View more
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="dashboard-stat red">
                <div class="visual">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="details">
                    <div class="number"> 1,127,390 </div>
                    <div class="desc"> Total Orders </div>
                </div>
                <a class="more" href="javascript:;"> View more
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-group fa-icon-medium"></i>
                </div>
                <div class="details">
                    <div class="number"> $670.54 </div>
                    <div class="desc"> Average Orders </div>
                </div>
                <a class="more" href="javascript:;"> View more
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <!-- Begin: life time stats -->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-share font-blue"></i>
                        <span class="caption-subject font-blue bold uppercase">Overview</span>
                        <span class="caption-helper">report overview...</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a class="btn green btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;"> All Project </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="javascript:;"> AirAsia </a>
                                </li>
                                <li>
                                    <a href="javascript:;"> Cruise </a>
                                </li>
                                <li>
                                    <a href="javascript:;"> HSBC </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="javascript:;"> Pending
                                        <span class="badge badge-danger"> 4 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;"> Completed
                                        <span class="badge badge-success"> 12 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;"> Overdue
                                        <span class="badge badge-warning"> 9 </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#overview_1" data-toggle="tab"> Top Selling </a>
                            </li>
                            <li>
                                <a href="#overview_2" data-toggle="tab"> Most Viewed </a>
                            </li>
                            <li>
                                <a href="#overview_3" data-toggle="tab"> New Customers </a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> Orders
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#overview_4" data-toggle="tab">
                                            <i class="icon-bell"></i> Latest 10 Orders </a>
                                    </li>
                                    <li>
                                        <a href="#overview_4" data-toggle="tab">
                                            <i class="icon-info"></i> Pending Orders </a>
                                    </li>
                                    <li>
                                        <a href="#overview_4" data-toggle="tab">
                                            <i class="icon-speech"></i> Completed Orders </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#overview_4" data-toggle="tab">
                                            <i class="icon-settings"></i> Rejected Orders </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="overview_1">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th> Product Name </th>
                                                <th> Price </th>
                                                <th> Sold </th>
                                                <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> Apple iPhone 4s - 16GB - Black </a>
                                                </td>
                                                <td> $625.50 </td>
                                                <td> 809 </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> Samsung Galaxy S III SGH-I747 - 16GB </a>
                                                </td>
                                                <td> $915.50 </td>
                                                <td> 6709 </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> Motorola Droid 4 XT894 - 16GB - Black </a>
                                                </td>
                                                <td> $878.50 </td>
                                                <td> 784 </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> Samsung Galaxy Note 4 </a>
                                                </td>
                                                <td> $925.50 </td>
                                                <td> 21245 </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> Regatta Luca 3 in 1 Jacket </a>
                                                </td>
                                                <td> $25.50 </td>
                                                <td> 1245 </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> Samsung Galaxy Note 3 </a>
                                                </td>
                                                <td> $925.50 </td>
                                                <td> 21245 </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="overview_2">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th> Product Name </th>
                                                <th> Price </th>
                                                <th> Views </th>
                                                <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> Metronic - Responsive Admin + Frontend Theme </a>
                                                </td>
                                                <td> $20.00 </td>
                                                <td> 11190 </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> Regatta Luca 3 in 1 Jacket </a>
                                                </td>
                                                <td> $25.50 </td>
                                                <td> 1245 </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> Motorola Droid 4 XT894 - 16GB - Black </a>
                                                </td>
                                                <td> $878.50 </td>
                                                <td> 784 </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> Apple iPhone 4s - 16GB - Black </a>
                                                </td>
                                                <td> $625.50 </td>
                                                <td> 809 </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> Samsung Galaxy S III SGH-I747 - 16GB </a>
                                                </td>
                                                <td> $915.50 </td>
                                                <td> 6709 </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> Motorola Droid 4 XT894 - 16GB - Black </a>
                                                </td>
                                                <td> $878.50 </td>
                                                <td> 784 </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="overview_3">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th> Customer Name </th>
                                                <th> Total Orders </th>
                                                <th> Total Amount </th>
                                                <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> David Wilson </a>
                                                </td>
                                                <td> 3 </td>
                                                <td> $625.50 </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> Amanda Nilson </a>
                                                </td>
                                                <td> 4 </td>
                                                <td> $12625.50 </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> Paul Strong </a>
                                                </td>
                                                <td> 1 </td>
                                                <td> $890.85 </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> Jhon Doe </a>
                                                </td>
                                                <td> 2 </td>
                                                <td> $125.00 </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> Bill Chang </a>
                                                </td>
                                                <td> 45 </td>
                                                <td> $12,125.70 </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> Paul Strong </a>
                                                </td>
                                                <td> 1 </td>
                                                <td> $890.85 </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="overview_4">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th> Customer Name </th>
                                                <th> Date </th>
                                                <th> Amount </th>
                                                <th> Status </th>
                                                <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> David Wilson </a>
                                                </td>
                                                <td> 3 Jan, 2013 </td>
                                                <td> $625.50 </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> Pending </span>
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> Amanda Nilson </a>
                                                </td>
                                                <td> 13 Feb, 2013 </td>
                                                <td> $12625.50 </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> Pending </span>
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> Paul Strong </a>
                                                </td>
                                                <td> 1 Jun, 2013 </td>
                                                <td> $890.85 </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Success </span>
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> Jhon Doe </a>
                                                </td>
                                                <td> 20 Mar, 2013 </td>
                                                <td> $125.00 </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Success </span>
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> Bill Chang </a>
                                                </td>
                                                <td> 29 May, 2013 </td>
                                                <td> $12,125.70 </td>
                                                <td>
                                                    <span class="label label-sm label-info"> In Process </span>
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;"> Paul Strong </a>
                                                </td>
                                                <td> 1 Jun, 2013 </td>
                                                <td> $890.85 </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Success </span>
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i> View </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End: life time stats -->
        </div>
        <div class="col-md-6">
            <!-- Begin: life time stats -->
            <!-- BEGIN PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title tabbable-line">
                    <div class="caption">
                        <i class="icon-globe font-red"></i>
                        <span class="caption-subject font-red bold uppercase">Revenue</span>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#portlet_ecommerce_tab_1" data-toggle="tab"> Amounts </a>
                        </li>
                        <li>
                            <a href="#portlet_ecommerce_tab_2" id="statistics_orders_tab" data-toggle="tab"> Orders </a>
                        </li>
                    </ul>
                </div>
                <div class="portlet-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="portlet_ecommerce_tab_1">
                            <div id="statistics_1" class="chart"> </div>
                        </div>
                        <div class="tab-pane" id="portlet_ecommerce_tab_2">
                            <div id="statistics_2" class="chart"> </div>
                        </div>
                    </div>
                    <div class="well margin-top-20">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                <span class="label label-success"> Revenue: </span>
                                <h3>$1,234,112.20</h3>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                <span class="label label-info"> Tax: </span>
                                <h3>$134,90.10</h3>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                <span class="label label-danger"> Shipment: </span>
                                <h3>$1,134,90.10</h3>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                <span class="label label-warning"> Orders: </span>
                                <h3>235090</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End: life time stats -->
        </div>
    </div>
@endsection
