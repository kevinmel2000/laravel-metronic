@extends('layouts.admin-1.master')

@section('title', 'About')

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>General</span>
        </li>
    </ul>
@endsection

@section('content')
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> About Us
        <small>about us page</small>
    </h1>
    <!-- END PAGE TITLE-->

    <!-- BEGIN CONTENT HEADER -->
    <div class="row margin-bottom-40 about-header">
        <div class="col-md-12">
            <h1>About Us</h1>
            <h2>Life is either a great adventure or nothing</h2>
            <button type="button" class="btn btn-danger">JOIN US TODAY</button>
        </div>
    </div>
    <!-- END CONTENT HEADER -->

    <!-- BEGIN CARDS -->
    <div class="row margin-bottom-20">
        <div class="col-lg-3 col-md-6">
            <div class="portlet light">
                <div class="card-icon">
                    <i class="icon-user-follow font-red-sunglo theme-font"></i>
                </div>
                <div class="card-title">
                    <span> Best User Expierence </span>
                </div>
                <div class="card-desc">
                    <span> The best way to find yourself is
                        <br> to lose yourself in the service of others </span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="portlet light">
                <div class="card-icon">
                    <i class="icon-trophy font-green-haze theme-font"></i>
                </div>
                <div class="card-title">
                    <span> Awards Winner </span>
                </div>
                <div class="card-desc">
                    <span> The best way to find yourself is
                        <br> to lose yourself in the service of others </span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="portlet light">
                <div class="card-icon">
                    <i class="icon-basket font-purple-wisteria theme-font"></i>
                </div>
                <div class="card-title">
                    <span> eCommerce Components </span>
                </div>
                <div class="card-desc">
                    <span> The best way to find yourself is
                        <br> to lose yourself in the service of others </span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="portlet light">
                <div class="card-icon">
                    <i class="icon-layers font-blue theme-font"></i>
                </div>
                <div class="card-title">
                    <span> Adaptive Components </span>
                </div>
                <div class="card-desc">
                    <span> The best way to find yourself is
                        <br> to lose yourself in the service of others </span>
                </div>
            </div>
        </div>
    </div>
    <!-- END CARDS -->
@endsection
