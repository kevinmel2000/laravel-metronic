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

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                <div class="visual">
                    <i class="fa fa-comments"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="1349">0</span>
                    </div>
                    <div class="desc"> New Feedbacks </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                <div class="visual">
                    <i class="fa fa-bar-chart-o"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="12,5">0</span>M$ </div>
                    <div class="desc"> Total Profit </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                <div class="visual">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="549">0</span>
                    </div>
                    <div class="desc"> New Orders </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                <div class="visual">
                    <i class="fa fa-globe"></i>
                </div>
                <div class="details">
                    <div class="number"> +
                        <span data-counter="counterup" data-value="89"></span>% </div>
                    <div class="desc"> Brand Popularity </div>
                </div>
            </a>
        </div>
    </div>
    <div class="clearfix"></div>


    <div class="row">
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <!-- BEGIN PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bar-chart font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Site Visits</span>
                        <span class="caption-helper">weekly stats...</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                            <label class="btn red btn-outline btn-circle btn-sm active">
                                <input type="radio" name="options" class="toggle" id="option1">New</label>
                            <label class="btn red btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Returning</label>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="site_statistics_loading">
                        <img src="../assets/global/img/loading.gif" alt="loading" /> </div>
                    <div id="site_statistics_content" class="display-none">
                        <div id="site_statistics" class="chart"> </div>
                    </div>
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <!-- BEGIN PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-share font-red-sunglo hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Revenue</span>
                        <span class="caption-helper">monthly stats...</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a href="" class="btn dark btn-outline btn-circle btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Filter Range
                                <span class="fa fa-angle-down"> </span>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;"> Q1 2014
                                        <span class="label label-sm label-default"> past </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;"> Q2 2014
                                        <span class="label label-sm label-default"> past </span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="javascript:;"> Q3 2014
                                        <span class="label label-sm label-success"> current </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;"> Q4 2014
                                        <span class="label label-sm label-warning"> upcoming </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="site_activities_loading">
                        <img src="../assets/global/img/loading.gif" alt="loading" /> </div>
                    <div id="site_activities_content" class="display-none">
                        <div id="site_activities" style="height: 228px;"> </div>
                    </div>
                    <div style="margin: 20px 0 10px 30px">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                <span class="label label-sm label-success"> Revenue: </span>
                                <h3>$13,234</h3>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                <span class="label label-sm label-info"> Tax: </span>
                                <h3>$134,900</h3>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                <span class="label label-sm label-danger"> Shipment: </span>
                                <h3>$1,134</h3>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                <span class="label label-sm label-warning"> Orders: </span>
                                <h3>235090</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-title tabbable-line">
                    <div class="caption">
                        <i class="icon-bubbles font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Comments</span>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#portlet_comments_1" data-toggle="tab"> Pending </a>
                        </li>
                        <li>
                            <a href="#portlet_comments_2" data-toggle="tab"> Approved </a>
                        </li>
                    </ul>
                </div>
                <div class="portlet-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="portlet_comments_1">
                            <!-- BEGIN: Comments -->
                            <div class="mt-comments">
                                <div class="mt-comment">
                                    <div class="mt-comment-img">
                                        <img src="../assets/pages/media/users/avatar1.jpg" /> </div>
                                    <div class="mt-comment-body">
                                        <div class="mt-comment-info">
                                            <span class="mt-comment-author">Michael Baker</span>
                                            <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                        </div>
                                        <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </div>
                                        <div class="mt-comment-details">
                                            <span class="mt-comment-status mt-comment-status-pending">Pending</span>
                                            <ul class="mt-comment-actions">
                                                <li>
                                                    <a href="#">Quick Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#">View</a>
                                                </li>
                                                <li>
                                                    <a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-comment">
                                    <div class="mt-comment-img">
                                        <img src="../assets/pages/media/users/avatar6.jpg" /> </div>
                                    <div class="mt-comment-body">
                                        <div class="mt-comment-info">
                                            <span class="mt-comment-author">Larisa Maskalyova</span>
                                            <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                        </div>
                                        <div class="mt-comment-text"> It is a long established fact that a reader will be distracted. </div>
                                        <div class="mt-comment-details">
                                            <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                            <ul class="mt-comment-actions">
                                                <li>
                                                    <a href="#">Quick Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#">View</a>
                                                </li>
                                                <li>
                                                    <a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-comment">
                                    <div class="mt-comment-img">
                                        <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                    <div class="mt-comment-body">
                                        <div class="mt-comment-info">
                                            <span class="mt-comment-author">Natasha Kim</span>
                                            <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                        </div>
                                        <div class="mt-comment-text"> The generated Lorem or non-characteristic Ipsum is therefore or non-characteristic. </div>
                                        <div class="mt-comment-details">
                                            <span class="mt-comment-status mt-comment-status-pending">Pending</span>
                                            <ul class="mt-comment-actions">
                                                <li>
                                                    <a href="#">Quick Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#">View</a>
                                                </li>
                                                <li>
                                                    <a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-comment">
                                    <div class="mt-comment-img">
                                        <img src="../assets/pages/media/users/avatar4.jpg" /> </div>
                                    <div class="mt-comment-body">
                                        <div class="mt-comment-info">
                                            <span class="mt-comment-author">Sebastian Davidson</span>
                                            <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                        </div>
                                        <div class="mt-comment-text"> The standard chunk of Lorem or non-characteristic Ipsum used since the 1500s or non-characteristic. </div>
                                        <div class="mt-comment-details">
                                            <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                            <ul class="mt-comment-actions">
                                                <li>
                                                    <a href="#">Quick Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#">View</a>
                                                </li>
                                                <li>
                                                    <a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Comments -->
                        </div>
                        <div class="tab-pane" id="portlet_comments_2">
                            <!-- BEGIN: Comments -->
                            <div class="mt-comments">
                                <div class="mt-comment">
                                    <div class="mt-comment-img">
                                        <img src="../assets/pages/media/users/avatar4.jpg" /> </div>
                                    <div class="mt-comment-body">
                                        <div class="mt-comment-info">
                                            <span class="mt-comment-author">Michael Baker</span>
                                            <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                        </div>
                                        <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                        <div class="mt-comment-details">
                                            <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                            <ul class="mt-comment-actions">
                                                <li>
                                                    <a href="#">Quick Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#">View</a>
                                                </li>
                                                <li>
                                                    <a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-comment">
                                    <div class="mt-comment-img">
                                        <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                    <div class="mt-comment-body">
                                        <div class="mt-comment-info">
                                            <span class="mt-comment-author">Larisa Maskalyova</span>
                                            <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                        </div>
                                        <div class="mt-comment-text"> It is a long established fact that a reader will be distracted by. </div>
                                        <div class="mt-comment-details">
                                            <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                            <ul class="mt-comment-actions">
                                                <li>
                                                    <a href="#">Quick Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#">View</a>
                                                </li>
                                                <li>
                                                    <a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-comment">
                                    <div class="mt-comment-img">
                                        <img src="../assets/pages/media/users/avatar6.jpg" /> </div>
                                    <div class="mt-comment-body">
                                        <div class="mt-comment-info">
                                            <span class="mt-comment-author">Natasha Kim</span>
                                            <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                        </div>
                                        <div class="mt-comment-text"> The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. </div>
                                        <div class="mt-comment-details">
                                            <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                            <ul class="mt-comment-actions">
                                                <li>
                                                    <a href="#">Quick Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#">View</a>
                                                </li>
                                                <li>
                                                    <a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-comment">
                                    <div class="mt-comment-img">
                                        <img src="../assets/pages/media/users/avatar1.jpg" /> </div>
                                    <div class="mt-comment-body">
                                        <div class="mt-comment-info">
                                            <span class="mt-comment-author">Sebastian Davidson</span>
                                            <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                        </div>
                                        <div class="mt-comment-text"> The standard chunk of Lorem Ipsum used since the 1500s </div>
                                        <div class="mt-comment-details">
                                            <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                            <ul class="mt-comment-actions">
                                                <li>
                                                    <a href="#">Quick Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#">View</a>
                                                </li>
                                                <li>
                                                    <a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Comments -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-title tabbable-line">
                    <div class="caption">
                        <i class=" icon-social-twitter font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Quick Actions</span>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab_actions_pending" data-toggle="tab"> Pending </a>
                        </li>
                        <li>
                            <a href="#tab_actions_completed" data-toggle="tab"> Completed </a>
                        </li>
                    </ul>
                </div>
                <div class="portlet-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_actions_pending">
                            <!-- BEGIN: Actions -->
                            <div class="mt-actions">
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar10.jpg" /> </div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-icon ">
                                                    <i class="icon-magnet"></i>
                                                </div>
                                                <div class="mt-action-details ">
                                                    <span class="mt-action-author">Natasha Kim</span>
                                                    <p class="mt-action-desc">Dummy text of the printing</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt-action-date">3 jun</span>
                                                <span class="mt-action-dot bg-green"></span>
                                                <span class="mt=action-time">9:30-13:00</span>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                    <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar3.jpg" /> </div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-icon ">
                                                    <i class=" icon-bubbles"></i>
                                                </div>
                                                <div class="mt-action-details ">
                                                    <span class="mt-action-author">Gavin Bond</span>
                                                    <p class="mt-action-desc">pending for approval</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt-action-date">3 jun</span>
                                                <span class="mt-action-dot bg-red"></span>
                                                <span class="mt=action-time">9:30-13:00</span>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                    <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar2.jpg" /> </div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-icon ">
                                                    <i class="icon-call-in"></i>
                                                </div>
                                                <div class="mt-action-details ">
                                                    <span class="mt-action-author">Diana Berri</span>
                                                    <p class="mt-action-desc">Lorem Ipsum is simply dummy text</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt-action-date">3 jun</span>
                                                <span class="mt-action-dot bg-green"></span>
                                                <span class="mt=action-time">9:30-13:00</span>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                    <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar7.jpg" /> </div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-icon ">
                                                    <i class=" icon-bell"></i>
                                                </div>
                                                <div class="mt-action-details ">
                                                    <span class="mt-action-author">John Clark</span>
                                                    <p class="mt-action-desc">Text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt-action-date">3 jun</span>
                                                <span class="mt-action-dot bg-red"></span>
                                                <span class="mt=action-time">9:30-13:00</span>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                    <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-icon ">
                                                    <i class="icon-magnet"></i>
                                                </div>
                                                <div class="mt-action-details ">
                                                    <span class="mt-action-author">Donna Clarkson </span>
                                                    <p class="mt-action-desc">Simply dummy text of the printing</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt-action-date">3 jun</span>
                                                <span class="mt-action-dot bg-green"></span>
                                                <span class="mt=action-time">9:30-13:00</span>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                    <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar9.jpg" /> </div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-icon ">
                                                    <i class="icon-magnet"></i>
                                                </div>
                                                <div class="mt-action-details ">
                                                    <span class="mt-action-author">Tom Larson</span>
                                                    <p class="mt-action-desc">Lorem Ipsum is simply dummy text</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt-action-date">3 jun</span>
                                                <span class="mt-action-dot bg-green"></span>
                                                <span class="mt=action-time">9:30-13:00</span>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                    <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Actions -->
                        </div>
                        <div class="tab-pane" id="tab_actions_completed">
                            <!-- BEGIN:Completed-->
                            <div class="mt-actions">
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar1.jpg" /> </div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-icon ">
                                                    <i class="icon-action-redo"></i>
                                                </div>
                                                <div class="mt-action-details ">
                                                    <span class="mt-action-author">Frank Cameron</span>
                                                    <p class="mt-action-desc">Lorem Ipsum is simply dummy</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt-action-date">3 jun</span>
                                                <span class="mt-action-dot bg-red"></span>
                                                <span class="mt=action-time">9:30-13:00</span>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                    <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-icon ">
                                                    <i class="icon-cup"></i>
                                                </div>
                                                <div class="mt-action-details ">
                                                    <span class="mt-action-author">Ella Davidson </span>
                                                    <p class="mt-action-desc">Text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt-action-date">3 jun</span>
                                                <span class="mt-action-dot bg-green"></span>
                                                <span class="mt=action-time">9:30-13:00</span>
                                            </div>
                                            <div class="mt-action-buttons">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                    <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar5.jpg" /> </div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-icon ">
                                                    <i class=" icon-graduation"></i>
                                                </div>
                                                <div class="mt-action-details ">
                                                    <span class="mt-action-author">Jason Dickens </span>
                                                    <p class="mt-action-desc">Dummy text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt-action-date">3 jun</span>
                                                <span class="mt-action-dot bg-red"></span>
                                                <span class="mt=action-time">9:30-13:00</span>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                    <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar2.jpg" /> </div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-icon ">
                                                    <i class="icon-badge"></i>
                                                </div>
                                                <div class="mt-action-details ">
                                                    <span class="mt-action-author">Jan Kim</span>
                                                    <p class="mt-action-desc">Lorem Ipsum is simply dummy</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt-action-date">3 jun</span>
                                                <span class="mt-action-dot bg-green"></span>
                                                <span class="mt=action-time">9:30-13:00</span>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                    <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Completed -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-directions font-green hide"></i>
                        <span class="caption-subject bold font-dark uppercase "> Activities</span>
                        <span class="caption-helper">Horizontal Timeline</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a class="btn blue btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;"> Action 1</a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="javascript:;">Action 2</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Action 3</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Action 4</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="cd-horizontal-timeline mt-timeline-horizontal" data-spacing="60">
                        <div class="timeline">
                            <div class="events-wrapper">
                                <div class="events">
                                    <ol>
                                        <li>
                                            <a href="#0" data-date="16/01/2014" class="border-after-red bg-after-red selected">16 Jan</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="28/02/2014" class="border-after-red bg-after-red">28 Feb</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="20/04/2014" class="border-after-red bg-after-red">20 Mar</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="20/05/2014" class="border-after-red bg-after-red">20 May</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="09/07/2014" class="border-after-red bg-after-red">09 Jul</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="30/08/2014" class="border-after-red bg-after-red">30 Aug</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="15/09/2014" class="border-after-red bg-after-red">15 Sep</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="01/11/2014" class="border-after-red bg-after-red">01 Nov</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="10/12/2014" class="border-after-red bg-after-red">10 Dec</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="19/01/2015" class="border-after-red bg-after-red">29 Jan</a>
                                        </li>
                                        <li>
                                            <a href="#0" id="test_pest" data-date="03/03/2015" class="border-after-red bg-after-red">3 Mar - 1</a>
                                        </li>
                                    </ol>
                                    <span class="filling-line bg-red" aria-hidden="true"></span>
                                </div>
                                <!-- .events -->
                            </div>
                            <!-- .events-wrapper -->
                            <ul class="cd-timeline-navigation mt-ht-nav-icon">
                                <li>
                                    <a href="#0" class="prev inactive btn btn-outline red md-skip">
                                        <i class="fa fa-chevron-left"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="next btn btn-outline red md-skip">
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- .cd-timeline-navigation -->
                        </div>
                        <!-- .timeline -->
                        <div class="events-content">
                            <ol>
                                <li class="selected" data-date="16/01/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">New User</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_3.jpg" />
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">16 January 2014 : 7:45 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, mi felis, aliquam at iaculis mi felis, aliquam
                                            at iaculis finibus eu ex. Integer efficitur tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non est rhoncus volutpat.</p>
                                        <a href="javascript:;" class="btn btn-circle red btn-outline">Read More</a>
                                        <a href="javascript:;" class="btn btn-circle btn-icon-only blue">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <a href="javascript:;" class="btn btn-circle btn-icon-only green pull-right">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                </li>
                                <li data-date="28/02/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Sending Shipment</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_3.jpg" />
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Hugh Grant</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">28 February 2014 : 10:15 AM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle btn-outline green-jungle">Download Shipment List</a>
                                        <div class="btn-group dropup pull-right">
                                            <button class="btn btn-circle blue-steel dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="javascript:;">Action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Another action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Something else here </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;">Separated link </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li data-date="20/04/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Blue Chambray</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_1.jpg" />
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue">Rory Matthew</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">20 April 2014 : 10:45 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                        <a href="javascript:;" class="btn btn-circle red">Read More</a>
                                    </div>
                                </li>
                                <li data-date="20/05/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">20 May 2014 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                                <li data-date="09/07/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Event Success</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_1.jpg" />
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Matt Goldman</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">9 July 2014 : 8:15 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde.</p>
                                        <a href="javascript:;"
                                            class="btn btn-circle btn-outline purple-medium">View Summary</a>
                                        <div class="btn-group dropup pull-right">
                                            <button class="btn btn-circle green dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="javascript:;">Action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Another action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Something else here </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;">Separated link </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li data-date="30/08/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Conference Call</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_1.jpg" />
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Rory Matthew</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">30 August 2014 : 5:45 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <img class="timeline-body-img pull-left" src="../assets/pages/media/blog/5.jpg" alt="">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                        <a href="javascript:;" class="btn btn-circle red">Read More</a>
                                    </div>
                                </li>
                                <li data-date="15/09/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Conference Decision</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_5.jpg" />
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Jessica Wolf</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">15 September 2014 : 8:30 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <img class="timeline-body-img pull-right" src="../assets/pages/media/blog/6.jpg" alt="">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut.</p>
                                        <a href="javascript:;" class="btn btn-circle green-sharp">Read More</a>
                                    </div>
                                </li>
                                <li data-date="01/11/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">1 November 2014 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                                <li data-date="10/12/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">10 December 2015 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                                <li data-date="19/01/2015">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">19 January 2015 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                                <li data-date="03/03/2015">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">3 March 2015 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <!-- .events-content -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-directions font-green hide"></i>
                        <span class="caption-subject bold font-dark uppercase"> Events</span>
                        <span class="caption-helper">Horizontal Timeline</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                            <label class="btn green btn-outline btn-circle btn-sm active">
                                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                            <label class="btn  green btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Tools</label>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="cd-horizontal-timeline mt-timeline-horizontal" data-spacing="60">
                        <div class="timeline mt-timeline-square">
                            <div class="events-wrapper">
                                <div class="events">
                                    <ol>
                                        <li>
                                            <a href="#0" data-date="16/01/2014" class="border-after-blue bg-after-blue selected">Expo 2016</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="28/02/2014" class="border-after-blue bg-after-blue">New Promo</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="20/04/2014" class="border-after-blue bg-after-blue">Meeting</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="20/05/2014" class="border-after-blue bg-after-blue">Launch</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="09/07/2014" class="border-after-blue bg-after-blue">Party</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="30/08/2014" class="border-after-blue bg-after-blue">Reports</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="15/09/2014" class="border-after-blue bg-after-blue">HR</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="01/11/2014" class="border-after-blue bg-after-blue">IPO</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="10/12/2014" class="border-after-blue bg-after-blue">Board</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="19/01/2015" class="border-after-blue bg-after-blue">Revenue</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="03/03/2015" class="border-after-blue bg-after-blue">Dinner</a>
                                        </li>
                                    </ol>
                                    <span class="filling-line bg-blue" aria-hidden="true"></span>
                                </div>
                                <!-- .events -->
                            </div>
                            <!-- .events-wrapper -->
                            <ul class="cd-timeline-navigation mt-ht-nav-icon">
                                <li>
                                    <a href="#0" class="prev inactive btn blue md-skip">
                                        <i class="fa fa-chevron-left"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="next btn blue md-skip">
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- .cd-timeline-navigation -->
                        </div>
                        <!-- .timeline -->
                        <div class="events-content">
                            <ol>
                                <li class="selected" data-date="16/01/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Expo 2016 Launch</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Lisa Bold</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">23 February 2014</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod mi felis, aliquam at iaculis eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis mi felis, aliquam
                                            at iaculis eu, onsectetur adipiscing elit finibus eu ex. Integer efficitur leo eget dolor tincidunt, et dignissim risus lacinia. Nam in egestas onsectetur adipiscing elit nunc. Suspendisse
                                            potenti</p>
                                        <a href="javascript:;" class="btn btn-circle dark btn-outline">Read More</a>
                                        <a href="javascript:;" class="btn btn-circle btn-icon-only green pull-right">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                </li>
                                <li data-date="28/02/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Sending Shipment</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_3.jpg" />
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Hugh Grant</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">28 February 2014 : 10:15 AM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle btn-outline green-jungle">Download Shipment List</a>
                                        <div class="btn-group dropup pull-right">
                                            <button class="btn btn-circle blue-steel dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="javascript:;">Action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Another action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Something else here </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;">Separated link </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li data-date="20/04/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Blue Chambray</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_1.jpg" />
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue">Rory Matthew</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">20 April 2014 : 10:45 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                        <a href="javascript:;" class="btn btn-circle red">Read More</a>
                                    </div>
                                </li>
                                <li data-date="20/05/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">20 May 2014 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                                <li data-date="09/07/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Event Success</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_1.jpg" />
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Matt Goldman</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">9 July 2014 : 8:15 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde.</p>
                                        <a href="javascript:;"
                                            class="btn btn-circle btn-outline purple-medium">View Summary</a>
                                        <div class="btn-group dropup pull-right">
                                            <button class="btn btn-circle green dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="javascript:;">Action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Another action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Something else here </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;">Separated link </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li data-date="30/08/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Conference Call</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_1.jpg" />
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Rory Matthew</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">30 August 2014 : 5:45 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <img class="timeline-body-img pull-left" src="../assets/pages/media/blog/5.jpg" alt="">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                        <a href="javascript:;" class="btn btn-circle red">Read More</a>
                                    </div>
                                </li>
                                <li data-date="15/09/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Conference Decision</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_5.jpg" />
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Jessica Wolf</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">15 September 2014 : 8:30 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <img class="timeline-body-img pull-right" src="../assets/pages/media/blog/6.jpg" alt="">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut.</p>
                                        <a href="javascript:;" class="btn btn-circle green-sharp">Read More</a>
                                    </div>
                                </li>
                                <li data-date="01/11/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">1 November 2014 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                                <li data-date="10/12/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">10 December 2014 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                                <li data-date="19/01/2015">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">19 January 2015 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                                <li data-date="03/03/2015">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">3 March 2015 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <!-- .events-content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
