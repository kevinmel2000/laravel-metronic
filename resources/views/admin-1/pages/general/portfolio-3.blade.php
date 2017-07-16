@extends('layouts.admin-1.master')

@section('title', 'Portfolion #3')

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
    <h1 class="page-title"> Portfolio 3
        <small>Portfolio 3 - Lightbox Grid</small>
    </h1>

    <div class="portfolio-content portfolio-3">
        <div class="clearfix">
            <div id="js-filters-lightbox-gallery1" class="cbp-l-filters-dropdown cbp-l-filters-dropdown-floated">
                <div class="cbp-l-filters-dropdownWrap border-grey-salsa">
                    <div class="cbp-l-filters-dropdownHeader uppercase">Sort Gallery</div>
                    <div class="cbp-l-filters-dropdownList">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item uppercase"> All (
                            <div class="cbp-filter-counter"></div> items) </div>
                        <div data-filter=".identity" class="cbp-filter-item uppercase"> Identity (
                            <div class="cbp-filter-counter"></div> items) </div>
                        <div data-filter=".web-design" class="cbp-filter-item uppercase"> Web Design (
                            <div class="cbp-filter-counter"></div> items) </div>
                        <div data-filter=".print" class="cbp-filter-item uppercase"> Print (
                            <div class="cbp-filter-counter"></div> items) </div>
                    </div>
                </div>
            </div>
            <div id="js-filters-lightbox-gallery2" class="cbp-l-filters-button cbp-l-filters-left">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item btn blue btn-outline uppercase">All</div>
                <div data-filter=".graphic" class="cbp-filter-item btn blue btn-outline uppercase">Graphic</div>
                <div data-filter=".logos" class="cbp-filter-item btn blue btn-outline uppercase">Logo</div>
                <div data-filter=".motion" class="cbp-filter-item btn blue btn-outline uppercase">Motion</div>
            </div>
        </div>
        <div id="js-grid-lightbox-gallery" class="cbp">
            <div class="cbp-item web-design graphic print motion">
                <a href="{{ route('admin-1.ajax.project3') }}" class="cbp-caption cbp-singlePageInline" data-title="World Clock Widget<br>by Paul Flavius Nechita" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/01.jpg') }}" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">World Clock Widget</div>
                                <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item web-design logos identity graphic">
                <a href="{{ route('admin-1.ajax.project4') }}" class="cbp-caption cbp-singlePageInline" data-title="Bolt UI<br>by Tiberiu Neamu" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/1.jpg') }}" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Bolt UI</div>
                                <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item graphic print identity">
                <a href="{{ route('admin-1.ajax.project3') }}" class="cbp-caption cbp-singlePageInline" data-title="WhereTO App<br>by Tiberiu Neamu" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/02.jpg') }}" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">WhereTO App</div>
                                <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item web-design motion logos">
                <a href="{{ route('admin-1.ajax.project4') }}" class="cbp-caption cbp-singlePageInline" data-title="iDevices<br>by Tiberiu Neamu" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/2.jpg') }}" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">iDevices</div>
                                <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item identity graphic print">
                <a href="{{ route('admin-1.ajax.project3') }}" class="cbp-caption cbp-singlePageInline" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/03.jpg') }}" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Seemple* Music for iPad</div>
                                <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item motion print logos web-design">
                <a href="{{ route('admin-1.ajax.project4') }}" class="cbp-caption cbp-singlePageInline" data-title="Remind~Me Widget<br>by Tiberiu Neamu" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/3.jpg') }}" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Remind~Me Widget</div>
                                <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item graphic logos">
                <a href="{{ route('admin-1.ajax.project3') }}" class="cbp-caption cbp-singlePageInline" data-title="Workout Buddy<br>by Tiberiu Neamu" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/04.jpg') }}" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Workout Buddy</div>
                                <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item identity print logos motion">
                <a href="{{ route('admin-1.ajax.project4') }}" class="cbp-caption cbp-singlePageInline" data-title="Digital Menu<br>by Cosmin Capitanu" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/4.jpg') }}" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Digital Menu</div>
                                <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item identity motion web-design">
                <a href="{{ route('admin-1.ajax.project3') }}" class="cbp-caption cbp-singlePageInline" data-title="Holiday Selector<br>by Cosmin Capitanu" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset('assets/global/img/portfolio/600x600/05.jpg') }}" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Holiday Selector</div>
                                <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div id="js-loadMore-lightbox-gallery" class="cbp-l-loadMore-button">
            <a href="assets/global/plugins/cubeportfolio/ajax/loadMore3.html" class="cbp-l-loadMore-link btn grey-mint btn-outline" rel="nofollow">
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
    <script type="text/javascript" src="{{ asset('assets/pages/scripts/portfolio-3.min.js') }}"></script>
@endpush
