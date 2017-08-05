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


    <div class="row">
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-share font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Recent Activities</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a class="btn btn-sm blue btn-outline btn-circle" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Filter By
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                                <label class="mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox" /> Finance
                                    <span></span>
                                </label>
                                <label class="mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox" checked="" /> Membership
                                    <span></span>
                                </label>
                                <label class="mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox" /> Customer Support
                                    <span></span>
                                </label>
                                <label class="mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox" checked="" /> HR
                                    <span></span>
                                </label>
                                <label class="mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox" /> System
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible="0">
                        <ul class="feeds">
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 4 pending tasks.
                                                <span class="label label-sm label-warning "> Take action
                                                    <i class="fa fa-share"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> Just now </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-bar-chart-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Finance Report for year 2013 has been released. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 20 mins </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-danger">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 24 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> New order received with
                                                <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 30 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-success">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 24 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-default">
                                                <i class="fa fa-bell-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> Web server hardware needs to be upgraded.
                                                <span class="label label-sm label-default "> Overdue </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 2 hours </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-briefcase"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> IPO Report for year 2013 has been released. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 20 mins </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 4 pending tasks.
                                                <span class="label label-sm label-warning "> Take action
                                                    <i class="fa fa-share"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> Just now </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-danger">
                                                    <i class="fa fa-bar-chart-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Finance Report for year 2013 has been released. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 20 mins </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-default">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 24 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> New order received with
                                                <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 30 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-success">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 24 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-warning">
                                                <i class="fa fa-bell-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> Web server hardware needs to be upgraded.
                                                <span class="label label-sm label-default "> Overdue </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 2 hours </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-briefcase"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> IPO Report for year 2013 has been released. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 20 mins </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="scroller-footer">
                        <div class="btn-arrow-link pull-right">
                            <a href="javascript:;">See All Records</a>
                            <i class="icon-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <div class="portlet light tasks-widget bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-share font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Tasks</span>
                        <span class="caption-helper">tasks summary...</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a class="btn blue-oleo btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> More
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
                    <div class="task-content">
                        <div class="scroller" style="height: 312px;" data-always-visible="1" data-rail-visible1="1">
                            <!-- START TASK LIST -->
                            <ul class="task-list">
                                <li>
                                    <div class="task-checkbox">
                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                            <input type="checkbox" class="checkboxes" value="1" />
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="task-title">
                                        <span class="task-title-sp"> Present 2013 Year IPO Statistics at Board Meeting </span>
                                        <span class="label label-sm label-success">Company</span>
                                        <span class="task-bell">
                                            <i class="fa fa-bell-o"></i>
                                        </span>
                                    </div>
                                    <div class="task-config">
                                        <div class="task-config-btn btn-group">
                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-check"></i> Complete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="task-checkbox">
                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                            <input type="checkbox" class="checkboxes" value="1" />
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="task-title">
                                        <span class="task-title-sp"> Hold An Interview for Marketing Manager Position </span>
                                        <span class="label label-sm label-danger">Marketing</span>
                                    </div>
                                    <div class="task-config">
                                        <div class="task-config-btn btn-group">
                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-check"></i> Complete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="task-checkbox">
                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                            <input type="checkbox" class="checkboxes" value="1" />
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="task-title">
                                        <span class="task-title-sp"> AirAsia Intranet System Project Internal Meeting </span>
                                        <span class="label label-sm label-success">AirAsia</span>
                                        <span class="task-bell">
                                            <i class="fa fa-bell-o"></i>
                                        </span>
                                    </div>
                                    <div class="task-config">
                                        <div class="task-config-btn btn-group">
                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-check"></i> Complete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="task-checkbox">
                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                            <input type="checkbox" class="checkboxes" value="1" />
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="task-title">
                                        <span class="task-title-sp"> Technical Management Meeting </span>
                                        <span class="label label-sm label-warning">Company</span>
                                    </div>
                                    <div class="task-config">
                                        <div class="task-config-btn btn-group">
                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-check"></i> Complete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="task-checkbox">
                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                            <input type="checkbox" class="checkboxes" value="1" />
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="task-title">
                                        <span class="task-title-sp"> Kick-off Company CRM Mobile App Development </span>
                                        <span class="label label-sm label-info">Internal Products</span>
                                    </div>
                                    <div class="task-config">
                                        <div class="task-config-btn btn-group">
                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-check"></i> Complete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="task-checkbox">
                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                            <input type="checkbox" class="checkboxes" value="1" />
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="task-title">
                                        <span class="task-title-sp"> Prepare Commercial Offer For SmartVision Website Rewamp </span>
                                        <span class="label label-sm label-danger">SmartVision</span>
                                    </div>
                                    <div class="task-config">
                                        <div class="task-config-btn btn-group">
                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-check"></i> Complete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="task-checkbox">
                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                            <input type="checkbox" class="checkboxes" value="1" />
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="task-title">
                                        <span class="task-title-sp"> Sign-Off The Comercial Agreement With AutoSmart </span>
                                        <span class="label label-sm label-default">AutoSmart</span>
                                        <span class="task-bell">
                                            <i class="fa fa-bell-o"></i>
                                        </span>
                                    </div>
                                    <div class="task-config">
                                        <div class="task-config-btn btn-group dropup">
                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-check"></i> Complete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="task-checkbox">
                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                            <input type="checkbox" class="checkboxes" value="1" />
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="task-title">
                                        <span class="task-title-sp"> Company Staff Meeting </span>
                                        <span class="label label-sm label-success">Cruise</span>
                                        <span class="task-bell">
                                            <i class="fa fa-bell-o"></i>
                                        </span>
                                    </div>
                                    <div class="task-config">
                                        <div class="task-config-btn btn-group dropup">
                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-check"></i> Complete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="last-line">
                                    <div class="task-checkbox">
                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                            <input type="checkbox" class="checkboxes" value="1" />
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="task-title">
                                        <span class="task-title-sp"> KeenThemes Investment Discussion </span>
                                        <span class="label label-sm label-warning">KeenThemes </span>
                                    </div>
                                    <div class="task-config">
                                        <div class="task-config-btn btn-group dropup">
                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-check"></i> Complete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- END START TASK LIST -->
                        </div>
                    </div>
                    <div class="task-footer">
                        <div class="btn-arrow-link pull-right">
                            <a href="javascript:;">See All Records</a>
                            <i class="icon-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
