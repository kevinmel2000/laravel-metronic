@extends('layouts.admin-1.master')

@section('title', 'Blog Post')

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
    <h1 class="page-title"> Blog Post
        <small>blog post samples</small>
    </h1>

    <div class="blog-page blog-content-2">
        <div class="row">
            <div class="col-lg-9">
                <div class="blog-single-content bordered blog-container">
                    <div class="blog-single-head">
                        <h1 class="blog-single-head-title">Metronic Blog Reborn</h1>
                        <div class="blog-single-head-date">
                            <i class="icon-calendar font-blue"></i>
                            <a href="javascript:;">Oct 24, 2015</a>
                        </div>
                    </div>
                    <div class="blog-single-img">
                        <img src="../assets/pages/img/background/4.jpg"> </div>
                    <div class="blog-single-desc">
                        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore siat magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                            ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla et facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum
                            zzril delenit augue et duis dolore feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem
                            insitam; est usus legentis in iis qui facit eorum claritatem. </p>
                        <p> Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam et processus sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quame nunc putamus
                            parum claram, siad anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum. </p>
                    </div>
                    <div class="blog-single-foot">
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
                    </div>
                    <div class="blog-comments">
                        <h3 class="sbold blog-comments-title">Comments(30)</h3>
                        <div class="c-comment-list">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" alt="" src="../assets/pages/img/avatars/team1.jpg"> </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="#">Sean</a> on
                                        <span class="c-date">23 May 2015, 10:40AM</span>
                                    </h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" alt="" src="../assets/pages/img/avatars/team3.jpg"> </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="#">Strong Strong</a> on
                                        <span class="c-date">21 May 2015, 11:40AM</span>
                                    </h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" alt="" src="../assets/pages/img/avatars/team4.jpg"> </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <a href="#">Emma Stone</a> on
                                                <span class="c-date">30 May 2015, 9:40PM</span>
                                            </h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" alt="" src="../assets/pages/img/avatars/team7.jpg"> </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="#">Nick Nilson</a> on
                                        <span class="c-date">30 May 2015, 9:40PM</span>
                                    </h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </div>
                            </div>
                        </div>
                        <h3 class="sbold blog-comments-title">Leave A Comment</h3>
                        <form action="#">
                            <div class="form-group">
                                <input type="text" placeholder="Your Name" class="form-control c-square"> </div>
                            <div class="form-group">
                                <input type="text" placeholder="Your Email" class="form-control c-square"> </div>
                            <div class="form-group">
                                <input type="text" placeholder="Your Website" class="form-control c-square"> </div>
                            <div class="form-group">
                                <textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control c-square"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn blue uppercase btn-md sbold btn-block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="blog-single-sidebar bordered blog-container">
                    <div class="blog-single-sidebar-search">
                        <div class="input-icon right">
                            <i class="icon-magnifier"></i>
                            <input type="text" class="form-control" placeholder="Search Blog"> </div>
                    </div>
                    <div class="blog-single-sidebar-recent">
                        <h3 class="blog-sidebar-title uppercase">Recent Posts</h3>
                        <ul>
                            <li>
                                <a href="javascript:;">Metronic Admin Progress</a>
                            </li>
                            <li>
                                <a href="javascript:;">New UI Features</a>
                            </li>
                            <li>
                                <a href="javascript:;">Lorem Ipsum Dolore Amet</a>
                            </li>
                            <li>
                                <a href="javascript:;">Userfull Pages Released</a>
                            </li>
                        </ul>
                    </div>
                    <div class="blog-single-sidebar-tags">
                        <h3 class="blog-sidebar-title uppercase">Tags</h3>
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
                            <li class="uppercase">
                                <a href="javascript:;">CSS</a>
                            </li>
                            <li class="uppercase">
                                <a href="javascript:;">Gulp</a>
                            </li>
                            <li class="uppercase">
                                <a href="javascript:;">Framework</a>
                            </li>
                            <li class="uppercase">
                                <a href="javascript:;">Admin Theme</a>
                            </li>
                            <li class="uppercase">
                                <a href="javascript:;">UI Features</a>
                            </li>
                        </ul>
                    </div>
                    <div class="blog-single-sidebar-links">
                        <h3 class="blog-sidebar-title uppercase">Useful Links</h3>
                        <ul>
                            <li>
                                <a href="javascript:;">Lorem Ipsum </a>
                            </li>
                            <li>
                                <a href="javascript:;">Dolore Amet</a>
                            </li>
                            <li>
                                <a href="javascript:;">Metronic Database</a>
                            </li>
                            <li>
                                <a href="javascript:;">UI Features</a>
                            </li>
                            <li>
                                <a href="javascript:;">Advanced Forms</a>
                            </li>
                        </ul>
                    </div>
                    <div class="blog-single-sidebar-ui">
                        <h3 class="blog-sidebar-title uppercase">UI Examples</h3>
                        <div class="row ui-margin">
                            <div class="col-xs-4 ui-padding">
                                <a href="javascript:;">
                                    <img src="../assets/pages/img/background/1.jpg">
                                </a>
                            </div>
                            <div class="col-xs-4 ui-padding">
                                <a href="javascript:;">
                                    <img src="../assets/pages/img/background/37.jpg">
                                </a>
                            </div>
                            <div class="col-xs-4 ui-padding">
                                <a href="javascript:;">
                                    <img src="../assets/pages/img/background/57.jpg">
                                </a>
                            </div>
                            <div class="col-xs-4 ui-padding">
                                <a href="javascript:;">
                                    <img src="../assets/pages/img/background/53.jpg">
                                </a>
                            </div>
                            <div class="col-xs-4 ui-padding">
                                <a href="javascript:;">
                                    <img src="../assets/pages/img/background/59.jpg">
                                </a>
                            </div>
                            <div class="col-xs-4 ui-padding">
                                <a href="javascript:;">
                                    <img src="../assets/pages/img/background/42.jpg">
                                </a>
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
