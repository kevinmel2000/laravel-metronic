@extends('layouts.admin-1.master')

@section('title', 'Portfolio #1')

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
            <span>Portfolio</span>
        </li>
    </ul>
@endsection

@section('content')
    <h1 class="page-title"> Portfolio 1
        <small>Portfolio 1 - Basic Grid</small>
    </h1>

    <div class="portfolio-content portfolio-1">
        <div id="js-filters-juicy-projects" class="cbp-l-filters-button">
            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item btn dark btn-outline uppercase"> All
                <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".identity" class="cbp-filter-item btn dark btn-outline uppercase"> Identity
                <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".web-design" class="cbp-filter-item btn dark btn-outline uppercase"> Web Design
                <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".graphic" class="cbp-filter-item btn dark btn-outline uppercase"> Graphic
                <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".logos" class="cbp-filter-item btn dark btn-outline uppercase"> Logo
                <div class="cbp-filter-counter"></div>
            </div>
        </div>
        <div id="js-grid-juicy-projects" class="cbp">
            <div class="cbp-item graphic">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/013.jpg') }}" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="assets/global/plugins/cubeportfolio/ajax/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" rel="nofollow">more info</a>
                                <a href="{{ asset('assets/global/img/portfolio/1200x900/57.jpg') }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase btn red uppercase" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">Dashboard</div>
                <div class="cbp-l-grid-projects-desc uppercase text-center uppercase text-center">Web Design / Graphic</div>
            </div>
            <div class="cbp-item web-design logos">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/05.jpg') }}" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="assets/global/plugins/cubeportfolio/ajax/project2.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" rel="nofollow">more info</a>
                                <a href="{{ asset('assets/global/img/portfolio/1200x900/50.jpg') }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase btn red uppercase" data-title="World Clock Widget<br>by Paul Flavius Nechita">view larger</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title uppercase text-center">World Clock Widget</div>
                <div class="cbp-l-grid-projects-desc uppercase text-center">Logo / Web Design</div>
            </div>
            <div class="cbp-item graphic logos">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/16.jpg') }}" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="assets/global/plugins/cubeportfolio/ajax/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" rel="nofollow">more info</a>
                                <a href="http://vimeo.com/14912890" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase btn red uppercase" data-title="To-Do Dashboard<br>by Tiberiu Neamu">view video</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title uppercase text-center">To-Do Dashboard</div>
                <div class="cbp-l-grid-projects-desc uppercase text-center">Graphic / Logo</div>
            </div>
            <div class="cbp-item web-design graphic">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/33.jpg') }}" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="assets/global/plugins/cubeportfolio/ajax/project2.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" rel="nofollow">more info</a>
                                <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/4900333&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"
                                    class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase btn red uppercase" data-title="Events and  More<br>by Tiberiu Neamu">view sound</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title uppercase text-center">Events and More</div>
                <div class="cbp-l-grid-projects-desc uppercase text-center">Web Design / Graphic</div>
            </div>
            <div class="cbp-item identity web-design">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/38.jpg') }}" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="assets/global/plugins/cubeportfolio/ajax/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" rel="nofollow">more info</a>
                                <a href="{{ asset('assets/global/img/portfolio/1200x900/4.jpg') }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase btn red uppercase" data-title="WhereTO App<br>by Tiberiu Neamu">view larger</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title uppercase text-center">Where To App</div>
                <div class="cbp-l-grid-projects-desc uppercase text-center">Web Design / Identity</div>
            </div>
            <div class="cbp-item identity web-design">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/88.jpg') }}" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="assets/global/plugins/cubeportfolio/ajax/project2.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" rel="nofollow">more info</a>
                                <a href="{{ asset('assets/global/img/portfolio/1200x900/7.jpg') }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase btn red uppercase" data-title="Ski * Buddy<br>by Tiberiu Neamu">view larger</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title uppercase text-center">Ski * Buddy</div>
                <div class="cbp-l-grid-projects-desc uppercase text-center">Identity / Web Design</div>
            </div>
            <div class="cbp-item graphic logos">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/02.jpg') }}" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="assets/global/plugins/cubeportfolio/ajax/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase" rel="nofollow">more info</a>
                                <a href="{{ asset('assets/global/img/portfolio/1200x900/60.jpg') }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">view sound</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">Seemple* Music for iPad</div>
                <div class="cbp-l-grid-projects-desc uppercase text-center">Graphic / Logo</div>
            </div>
            <div class="cbp-item identity graphic">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/62.jpg') }}" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="assets/global/plugins/cubeportfolio/ajax/project2.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase" rel="nofollow">more info</a>
                                <a href="http://www.youtube.com/watch?v=Bu9OiDmxCrQ" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="Remind~Me More<br>by Tiberiu Neamu">view video</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title uppercase text-center">Remind~Me More</div>
                <div class="cbp-l-grid-projects-desc uppercase text-center">Identity / Graphic</div>
            </div>
            <div class="cbp-item web-design graphic">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/81.jpg') }}" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="assets/global/plugins/cubeportfolio/ajax/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase" rel="nofollow">more info</a>
                                <a href="https://www.ted.com/talks/andrew_bastawrous_get_your_next_eye_exam_on_a_smartphone" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="Workout Buddy<br>by Tiberiu Neamu">view video</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title uppercase text-center">Workout Buddy</div>
                <div class="cbp-l-grid-projects-desc uppercase text-center">Web Design / Graphic</div>
            </div>
            <div class="cbp-item identity web-design">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/87.jpg') }}" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="assets/global/plugins/cubeportfolio/ajax/project2.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase" rel="nofollow">more info</a>
                                <a href="https://www.youtube.com/watch?v=3wbvpOIIBQA" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="Bills Bills Bills<br>by Cosmin Capitanu">view video</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title uppercase text-center">Bills Bills Bills</div>
                <div class="cbp-l-grid-projects-desc uppercase text-center">Identity / Web Design</div>
            </div>
            <div class="cbp-item identity logos">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/102.jpg') }}" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="assets/global/plugins/cubeportfolio/ajax/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase" rel="nofollow">more info</a>
                                <a href="{{ asset('assets/global/img/portfolio/1200x900/92.jpg') }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="Generic Apps<br>by Cosmin Capitanu">view video</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title uppercase text-center">Generic Apps</div>
                <div class="cbp-l-grid-projects-desc uppercase text-center">Identity / Logo</div>
            </div>
            <div class="cbp-item graphic web-design">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/96.jpg') }}" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="assets/global/plugins/cubeportfolio/ajax/project2.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase" rel="nofollow">more info</a>
                                <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/26519543&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"
                                    class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="Speed Detector<br>by Cosmin Capitanu">view sound</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title uppercase text-center">Speed Detector</div>
                <div class="cbp-l-grid-projects-desc uppercase text-center">Graphic / Web Design</div>
            </div>
        </div>
        <div id="js-loadMore-juicy-projects" class="cbp-l-loadMore-button">
            <a href="{{ route('admin-1.ajax.load-more') }}" class="cbp-l-loadMore-link btn grey-mint btn-outline" rel="nofollow">
                <span class="cbp-l-loadMore-defaultText">LOAD MORE</span>
                <span class="cbp-l-loadMore-loadingText">LOADING...</span>
                <span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>
            </a>
        </div>
    </div>
@endsection

@push('page-level-plugins-header')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/cubeportfolio/css/cubeportfolio.css') }}">
@endpush

@push('page-level-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/css/portfolio.min.css') }}">
@endpush

@push('page-level-plugins-footer')
    <script type="text/javascript" src="{{ asset('assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
@endpush

@push('page-level-scripts')
    <script type="text/javascript" src="{{ asset('assets/pages/scripts/portfolio-1.min.js') }}"></script>
@endpush
