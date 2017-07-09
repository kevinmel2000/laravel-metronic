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

    <!-- BEGIN TEXT & VIDEO -->
    <div class="row margin-bottom-40">
        <div class="col-lg-6">
            <div class="portlet light about-text">
                <h4>
                    <i class="fa fa-check icon-info"></i> About Metronic</h4>
                <p class="margin-top-20"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                    lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
                    iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
                <div class="row">
                    <div class="col-xs-6">
                        <ul class="list-unstyled margin-top-10 margin-bottom-10">
                            <li>
                                <i class="fa fa-check"></i> Nam liber tempor cum soluta </li>
                            <li>
                                <i class="fa fa-check"></i> Mirum est notare quam </li>
                            <li>
                                <i class="fa fa-check"></i> Lorem ipsum dolor sit amet </li>
                            <li>
                                <i class="fa fa-check"></i> Mirum est notare quam </li>
                            <li>
                                <i class="fa fa-check"></i> Mirum est notare quam </li>
                        </ul>
                    </div>
                    <div class="col-xs-6">
                        <ul class="list-unstyled margin-top-10 margin-bottom-10">
                            <li>
                                <i class="fa fa-check"></i> Nam liber tempor cum soluta </li>
                            <li>
                                <i class="fa fa-check"></i> Mirum est notare quam </li>
                            <li>
                                <i class="fa fa-check"></i> Lorem ipsum dolor sit amet </li>
                            <li>
                                <i class="fa fa-check"></i> Mirum est notare quam </li>
                            <li>
                                <i class="fa fa-check"></i> Mirum est notare quam </li>
                        </ul>
                    </div>
                </div>
                <div class="about-quote">
                    <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</h3>
                    <p class="about-author">Tom Hardy, 2015</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <iframe src="http://player.vimeo.com/video/22439234" style="width:100%; height:500px;border:0" allowfullscreen> </iframe>
        </div>
    </div>
    <!-- END TEXT & VIDEO -->
@endsection
