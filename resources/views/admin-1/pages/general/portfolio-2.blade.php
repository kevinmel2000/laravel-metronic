@extends('layouts.admin-1.master')

@section('title', 'Portfolio #2')

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
    <h1 class="page-title"> Portfolio 2
        <small>Portfolio 2 - Mosaic Grid</small>
    </h1>

    <div class="portfolio-content portfolio-2">
        <div id="js-filters-mosaic" class="cbp-l-filters-button">
            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item btn green btn-outline uppercase"> All
                <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".print" class="cbp-filter-item btn green btn-outline uppercase"> Print
                <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".web-design" class="cbp-filter-item btn green btn-outline uppercase"> Web Design
                <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".motion" class="cbp-filter-item btn green btn-outline uppercase"> Motion
                <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".graphic" class="cbp-filter-item btn green btn-outline uppercase"> Graphic
                <div class="cbp-filter-counter"></div>
            </div>
        </div>
        <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">
            <div class="cbp-item web-design graphic">
                <a href="{{ asset('assets/global/img/portfolio/1200x900/1.jpg') }}" class="cbp-caption cbp-lightbox" data-title="Bolt UI<br>by Tiberiu Neamu">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/2.jpg') }}" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Bolt UI</div>
                                <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item print motion">
                <a href="{{ asset('assets/global/img/portfolio/1200x900/02.jpg') }}" class="cbp-caption cbp-lightbox" data-title="World Clock Widget<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/3.jpg') }}" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">World Clock Widget</div>
                                <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item print motion">
                <a href="{{ asset('assets/global/img/portfolio/1200x900/13.jpg') }}" class="cbp-caption cbp-lightbox" data-title="WhereTO App<br>by Tiberiu Neamu">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/1200x900/13.jpg') }}" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">WhereTO App</div>
                                <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item web-design print">
                <a href="{{ asset('assets/global/img/portfolio/1200x900/12.jpg') }}" class="cbp-caption cbp-lightbox" data-title="iDevices<br>by Tiberiu Neamu">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/1200x900/12.jpg') }}" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">iDevices</div>
                                <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item motion graphic">
                <a href="{{ asset('assets/global/img/portfolio/1200x900/07.jpg') }}" class="cbp-caption cbp-lightbox" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/6.jpg') }}" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Seemple* Music for iPad</div>
                                <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item print motion">
                <a href="{{ asset('assets/global/img/portfolio/1200x900/6.jpg') }}" class="cbp-caption cbp-lightbox" data-title="Remind~Me Widget<br>by Tiberiu Neamu">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/45.jpg') }}" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Remind~Me Widget</div>
                                <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item web-design graphic print">
                <a href="{{ asset('assets/global/img/portfolio/1200x900/41.jpg') }}" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/58.jpg') }}" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Workout Buddy</div>
                                <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item print graphic">
                <a href="{{ asset('assets/global/img/portfolio/1200x900/40.jpg') }}" class="cbp-caption cbp-lightbox" data-title="Digital Menu<br>by Cosmin Capitanu">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/1200x900/40.jpg') }}" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Digital Menu</div>
                                <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item motion web-design">
                <a href="assets/global/img/portfolio/1200x900/84.jpg" class="cbp-caption cbp-lightbox" data-title="Holiday Selector<br>by Cosmin Capitanu">
                    <div class="cbp-caption-defaultWrap">
                        <img src="assets/global/img/portfolio/600x600/94.jpg" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Holiday Selector</div>
                                <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item motion">
                <a href="assets/global/img/portfolio/1200x900/72.jpg" class="cbp-caption cbp-lightbox" data-title="Holiday Selector<br>by Cosmin Capitanu">
                    <div class="cbp-caption-defaultWrap">
                        <img src="assets/global/img/portfolio/600x600/62.jpg" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Holiday Selector</div>
                                <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item graphic web-design">
                <a href="assets/global/img/portfolio/1200x900/05.jpg" class="cbp-caption cbp-lightbox" data-title="Holiday Selector<br>by Cosmin Capitanu">
                    <div class="cbp-caption-defaultWrap">
                        <img src="assets/global/img/portfolio/600x600/65.jpg" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Holiday Selector</div>
                                <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div id="js-loadMore-mosaic" class="cbp-l-loadMore-button">
            <a href="assets/global/plugins/cubeportfolio/ajax/loadMore2.html" class="cbp-l-loadMore-link btn grey-mint btn-outline" rel="nofollow">
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
    <script type="text/javascript" src="{{ asset('assets/pages/scripts/portfolio-2.min.js') }}"></script>
@endpush
