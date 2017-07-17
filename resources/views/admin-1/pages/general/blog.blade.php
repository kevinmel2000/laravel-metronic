@extends('layouts.admin-1.master')

@section('title', 'Blog')

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
    <h1 class="page-title"> Blog
        <small>blog listing page</small>
    </h1>

    <div class="blog-page blog-content-1">
        <div class="row">
            <div class="col-lg-6">
                <div class="blog-post-lg bordered blog-container">
                    <div class="blog-img-thumb">
                        <a href="javascript:;">
                            <img src="assets/pages/img/page_general_search/5.jpg">
                        </a>
                    </div>
                    <div class="blog-post-content">
                        <h2 class="blog-title blog-post-title">
                            <a href="javascript:;">Metronic Blog Post</a>
                        </h2>
                        <p class="blog-post-desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                            suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
                        <div class="blog-post-foot">
                            <ul class="blog-post-tags">
                                <li class="uppercase">
                                    <a href="javascript:;">Bootstrap</a>
                                </li>
                                <li class="uppercase">
                                    <a href="javascript:;">Sass</a>
                                </li>
                                <li class="uppercase">
                                    <a href="javascript:;">HTML</a>
                                </li>
                            </ul>
                            <div class="blog-post-meta">
                                <i class="icon-calendar font-blue"></i>
                                <a href="javascript:;">Oct 24, 2015</a>
                            </div>
                            <div class="blog-post-meta">
                                <i class="icon-bubble font-blue"></i>
                                <a href="javascript:;">14 Comments</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-post-lg bordered blog-container">
                    <div class="blog-img-thumb">
                        <a href="javascript:;">
                            <img src="assets/pages/img/page_general_search/05.jpg">
                        </a>
                    </div>
                    <div class="blog-post-content">
                        <h2 class="blog-title blog-post-title">
                            <a href="javascript:;">New Metronic Features</a>
                        </h2>
                        <p class="blog-post-desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                            suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
                        <div class="blog-post-foot">
                            <ul class="blog-post-tags">
                                <li class="uppercase">
                                    <a href="javascript:;">Bootstrap</a>
                                </li>
                                <li class="uppercase">
                                    <a href="javascript:;">Sass</a>
                                </li>
                                <li class="uppercase">
                                    <a href="javascript:;">HTML</a>
                                </li>
                            </ul>
                            <div class="blog-post-meta">
                                <i class="icon-calendar font-blue"></i>
                                <a href="javascript:;">Oct 22, 2015</a>
                            </div>
                            <div class="blog-post-meta">
                                <i class="icon-bubble font-blue"></i>
                                <a href="javascript:;">8 Comments</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="blog-quote bordered blog-container">
                            <div class="blog-quote-label bg-green-jungle">
                                <i class="fa fa-quote-left"></i> Lorem ipsum dolore siat amet consectetuer adipiscing eliot sed diam nonummy nih siad euismod laoreet dolore </div>
                            <div class="blog-quote-avatar">
                                <a href="javascript:;">
                                    <img src="assets/pages/img/avatars/team12.jpg">
                                </a>
                            </div>
                            <div class="blog-quote-author">
                                <h3 class="blog-title blog-quote-title">
                                    <a href="javascript:;">Rob Robson</a>
                                </h3>
                                <p class="blog-quote-desc">Senior Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="blog-video bordered blog-container">
                            <div class="blog-img-thumb">
                                <a href="javascript:;">
                                    <img src="assets/pages/img/page_general_search/4.jpg">
                                </a>
                            </div>
                            <a href="javascript:;" class="blog-video-play">
                                <i class="fa fa-play"></i>
                            </a>
                            <div class="blog-video-content">
                                <h3 class="blog-title blog-video-title">
                                    <a href="javascript:;">Awesome Video</a>
                                </h3>
                                <p class="blog-video-desc">Software</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="blog-banner blog-container" style="background-image:url(assets/pages/img/background/7.jpg);">
                            <h2 class="blog-title blog-banner-title">
                                <a href="javascript:;">Metronic Latest Features</a>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="blog-post-sm bordered blog-container">
                            <div class="blog-img-thumb">
                                <a href="javascript:;">
                                    <img src="assets/pages/img/page_general_search/1.jpg">
                                </a>
                            </div>
                            <div class="blog-post-content">
                                <h2 class="blog-title blog-post-title">
                                    <a href="javascript:;">Metronic Blog Post</a>
                                </h2>
                                <p class="blog-post-desc"> Lorem ipsum dolor sit amet adipiscing elit, sed diam nonummy </p>
                                <div class="blog-post-foot">
                                    <div class="blog-post-meta">
                                        <i class="icon-calendar font-blue"></i>
                                        <a href="javascript:;">Oct 24, 2015</a>
                                    </div>
                                    <div class="blog-post-meta">
                                        <i class="icon-bubble font-blue"></i>
                                        <a href="javascript:;">14 Comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="blog-post-sm bordered blog-container">
                            <div class="blog-img-thumb">
                                <a href="javascript:;">
                                    <img src="assets/pages/img/page_general_search/02.jpg">
                                </a>
                            </div>
                            <div class="blog-post-content">
                                <h2 class="blog-title blog-post-title">
                                    <a href="javascript:;">Metronic Blog Post</a>
                                </h2>
                                <p class="blog-post-desc"> Lorem ipsum dolor sit amet adipiscing elit, sed diam nonummy </p>
                                <div class="blog-post-foot">
                                    <div class="blog-post-meta">
                                        <i class="icon-calendar font-blue"></i>
                                        <a href="javascript:;">Oct 24, 2015</a>
                                    </div>
                                    <div class="blog-post-meta">
                                        <i class="icon-bubble font-blue"></i>
                                        <a href="javascript:;">14 Comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="blog-post-sm bordered blog-container">
                            <div class="blog-img-thumb">
                                <a href="javascript:;">
                                    <img src="assets/pages/img/page_general_search/2.jpg">
                                </a>
                            </div>
                            <div class="blog-post-content">
                                <h2 class="blog-title blog-post-title">
                                    <a href="javascript:;">Metronic Blog Post</a>
                                </h2>
                                <p class="blog-post-desc"> Lorem ipsum dolor sit amet adipiscing elit, sed diam nonummy </p>
                                <div class="blog-post-foot">
                                    <div class="blog-post-meta">
                                        <i class="icon-calendar font-blue"></i>
                                        <a href="javascript:;">Oct 24, 2015</a>
                                    </div>
                                    <div class="blog-post-meta">
                                        <i class="icon-bubble font-blue"></i>
                                        <a href="javascript:;">14 Comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="blog-post-sm bordered blog-container">
                            <div class="blog-img-thumb">
                                <a href="javascript:;">
                                    <img src="assets/pages/img/page_general_search/03.jpg">
                                </a>
                            </div>
                            <div class="blog-post-content">
                                <h2 class="blog-title blog-post-title">
                                    <a href="javascript:;">Metronic Blog Post</a>
                                </h2>
                                <p class="blog-post-desc"> Lorem ipsum dolor sit amet adipiscing elit, sed diam nonummy </p>
                                <div class="blog-post-foot">
                                    <div class="blog-post-meta">
                                        <i class="icon-calendar font-blue"></i>
                                        <a href="javascript:;">Oct 24, 2015</a>
                                    </div>
                                    <div class="blog-post-meta">
                                        <i class="icon-bubble font-blue"></i>
                                        <a href="javascript:;">14 Comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page-level-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/css/blog.min.css') }}">
@endpush
