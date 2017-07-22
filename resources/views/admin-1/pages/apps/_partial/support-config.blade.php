@extends('layouts.admin-1.master')

@section('title', 'Ticket Support Configuration')

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">Home</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
@endsection

@section('content')
    <h1 class="page-title"> Ticket Support Configuration
        <small>update/edit staff details</small>
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
                            <li>
                                <a href="{{ route('admin-1.app-support') }}">
                                    <i class="icon-home"></i> Ticket List
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin-1.partial.support-staff') }}">
                                    <i class="icon-settings"></i> Support Staff
                                </a>
                            </li>
                            <li class="active">
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
            <div class="app-ticket app-ticket-details app-ticket-config">
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light ">
                            <div class="portlet-title tabbable-line">
                                <div class="caption caption-md">
                                    <i class="icon-globe theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Ticket Support Staff Details</span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="ticket-id bold font-blue">#001</div>
                                        <div class="ticket-title bold uppercase font-blue">Hugh Jackman</div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="ticket-date">
                                            <span class="bold">Join Date:</span> 10/12/2015 </div>
                                    </div>
                                </div>
                                <h3>Staff Progress</h3>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="ticket-counter">
                                            <h4>213</h4>
                                            <p class="label label-md label-info bold uppercase">Responded</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="ticket-counter">
                                            <h4>158</h4>
                                            <p class="label label-md label-success bold uppercase">Resolved</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="ticket-counter">
                                            <h4>21</h4>
                                            <p class="label label-md label-warning bold uppercase">Disputes</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="ticket-counter">
                                            <h4>34</h4>
                                            <p class="label label-md label-default bold uppercase">Pending</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ticket-line"></div>
                                <form class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3>
                                                <i class="icon-user-follow"></i> Staff Role
                                            </h3>
                                            <select class="ticket-assign form-control input-medium">
                                                <option value="">Administrator</option>
                                                <option value="" selected>Developer</option>
                                                <option value="">Customer Support</option>
                                                <option value="">Human Resource</option>
                                                <option value="">Finance</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>
                                                <i class="icon-picture"></i> Staff Avatar
                                            </h3>
                                            <input class="form-control input-medium" type="file" value="">
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

@push('page-level-plugins-header')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}">
@endpush
