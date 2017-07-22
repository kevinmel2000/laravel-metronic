@extends('layouts.admin-1.master')

@section('title', 'Support Ticket Detailed Page')

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li>
            <a href="{{ route('admin-1.index') }}">Home</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
@endsection

@section('content')
    <h1 class="page-title"> Support Ticket Detailed Page
        <small>ticket details page</small>
    </h1>

    <div class="row">
        <div class="col-md-12">

            <!-- BEGIN PROFILE SIDEBAR -->
            <div class="profile-sidebar">

                <!-- PORTLET MAIN -->
                <div class="portlet light profile-sidebar-portlet ">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="{{ asset('assets/pages/media/profile/profile_user.jpg') }}" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->

                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name"> Marcus Doe </div>
                        <div class="profile-usertitle-job"> Developer </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->

                    <!-- SIDEBAR BUTTONS -->
                    <div class="profile-userbuttons">
                        <button type="button" class="btn btn-circle green btn-sm">Follow</button>
                        <button type="button" class="btn btn-circle red btn-sm">Message</button>
                    </div>
                    <!-- END SIDEBAR BUTTONS -->

                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="{{ route('admin-1.app-support') }}">
                                    <i class="icon-home"></i> Ticket List
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin-1.partial.support-staff') }}">
                                    <i class="icon-settings"></i> Support Staff
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin-1.partial.support-config') }}">
                                    <i class="icon-info"></i> Configurations
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
                <!-- END PORTLET MAIN -->

                <!-- PORTLET MAIN -->
                <div class="portlet light ">
                    <!-- STAT -->
                    <div class="row list-separated profile-stat">
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="uppercase profile-stat-title"> 37 </div>
                            <div class="uppercase profile-stat-text"> New </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="uppercase profile-stat-title"> 51 </div>
                            <div class="uppercase profile-stat-text"> Processed </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="uppercase profile-stat-title"> 61 </div>
                            <div class="uppercase profile-stat-text"> Completed </div>
                        </div>
                    </div>
                    <!-- END STAT -->

                    <div>
                        <h4 class="profile-desc-title">About Marcus Doe</h4>
                        <span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
                        <div class="margin-top-20 profile-desc-link">
                            <i class="fa fa-globe"></i>
                            <a href="http://www.keenthemes.com">www.keenthemes.com</a>
                        </div>
                        <div class="margin-top-20 profile-desc-link">
                            <i class="fa fa-twitter"></i>
                            <a href="http://www.twitter.com/keenthemes/">@keenthemes</a>
                        </div>
                        <div class="margin-top-20 profile-desc-link">
                            <i class="fa fa-facebook"></i>
                            <a href="http://www.facebook.com/keenthemes/">keenthemes</a>
                        </div>
                    </div>
                </div>
                <!-- END PORTLET MAIN -->
            </div>
            <!-- END BEGIN PROFILE SIDEBAR -->

            <!-- BEGIN TICKET DETAILS CONTENT -->
            <div class="app-ticket app-ticket-details">
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light ">
                            <div class="portlet-title tabbable-line">
                                <div class="caption caption-md">
                                    <i class="icon-globe theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Ticket Details</span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="ticket-id bold font-blue">#1123</div>
                                        <div class="ticket-title bold uppercase font-blue">Changing Colors</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="ticket-cust">
                                            <span class="bold">Customer:</span> Jane (
                                            <a href="mailto:customer@gmail.com">customer@gmail.com)</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="ticket-date">
                                            <span class="bold">Entry Date/Time:</span> 10/12/2015 10:15am </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="ticket-msg">
                                            <h3>
                                                <i class="icon-note"></i> Customer Message
                                            </h3>
                                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac purus urna. Nam eu ante orci. Ut sollicitudin tempor dolor a feugiat. Proin sodales molestie nisl ac varius. <br> <br> Morbi volutpat urna at ultrices lacinia. Integer consectetur justo quis luctus congue. Fusce at sem a ipsum efficitur tincidunt cursus sit amet enim.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ticket-line"></div>
                                <form class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h3>
                                                <i class="icon-action-redo"></i> Ticket Reply
                                            </h3>
                                            <textarea class="ticket-reply-msg" row="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3>
                                                <i class="icon-user-follow"></i> Assign to
                                            </h3>
                                            <select class="ticket-assign">
                                                <option value="">Hugh Jackman</option>
                                                <option value="">Matt Damon</option>
                                                <option value="">Marcus Doe</option>
                                                <option value="">Jennifer Lawrance</option>
                                                <option value="">Jodi Foster</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="ticket-margin">
                                                <i class="icon-calendar"></i> Due Date
                                            </h3>
                                            <input class="form-control form-control-inline input-small date-picker" size="16" type="text" value="">
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="ticket-margin">
                                                <i class="icon-info"></i> Status
                                            </h3>
                                            <select class="ticket-status">
                                                <option value="">New</option>
                                                <option value="">Pending</option>
                                                <option value="">Processed</option>
                                                <option value="">Completed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn btn-square uppercase bold green" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PROFILE CONTENT -->

        </div>
    </div>
@endsection
