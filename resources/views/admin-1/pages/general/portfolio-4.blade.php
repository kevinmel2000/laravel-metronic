@extends('layouts.admin-1.master')

@section('title', 'Portfolio #4')

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
    <h1 class="page-title"> Portfolio 4
        <small>Portfolio 4 - Full Width Grid</small>
    </h1>

    <div class="portfolio-content portfolio-4">
        <div id="js-filters-full-width" class="cbp-l-filters-alignCenter">
            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> ALL
                <div class="cbp-filter-counter"></div>
            </div> /
            <div data-filter=".identity" class="cbp-filter-item"> IDENTITY
                <div class="cbp-filter-counter"></div>
            </div> /
            <div data-filter=".web-design" class="cbp-filter-item"> WEB DESIGN
                <div class="cbp-filter-counter"></div>
            </div> /
            <div data-filter=".graphic" class="cbp-filter-item"> GRAPHIC
                <div class="cbp-filter-counter"></div>
            </div> /
            <div data-filter=".logos" class="cbp-filter-item"> LOGO
                <div class="cbp-filter-counter"></div>
            </div> /
            <div data-filter=".motion" class="cbp-filter-item"> MOTION
                <div class="cbp-filter-counter"></div>
            </div>
        </div>
        <div id="js-grid-full-width" class="cbp">
            <div class="cbp-item identity logos">
                <a href="../assets/global/img/portfolio/1200x900/01.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="../assets/global/img/portfolio/600x600/21.jpg" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Dashboard</div>
                                <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item web-design">
                <a href="../assets/global/img/portfolio/1200x900/1.jpg" class="cbp-caption cbp-lightbox" data-title="Client chat app WIP<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="../assets/global/img/portfolio/600x600/22.jpg" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Client chat app WIP</div>
                                <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item motion identity">
                <a href="../assets/global/img/portfolio/1200x900/02.jpg" class="cbp-caption cbp-lightbox" data-title="World Clock Widget<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="../assets/global/img/portfolio/600x600/23.jpg" alt=""> </div>
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
            <div class="cbp-item identity graphic">
                <a href="../assets/global/img/portfolio/1200x900/2.jpg" class="cbp-caption cbp-lightbox" data-title="Website Lightbox<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="../assets/global/img/portfolio/600x600/24.jpg" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Website Lightbox</div>
                                <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item motion logos">
                <a href="../assets/global/img/portfolio/1200x900/03.jpg" class="cbp-caption cbp-lightbox" data-title="Skateshop Website<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="../assets/global/img/portfolio/600x600/25.jpg" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Skateshop Website</div>
                                <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item web-design">
                <a href="../assets/global/img/portfolio/1200x900/3.jpg" class="cbp-caption cbp-lightbox" data-title="10 Navigation Bars<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="../assets/global/img/portfolio/600x600/26.jpg" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">10 Navigation Bars</div>
                                <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item identity motion">
                <a href="../assets/global/img/portfolio/1200x900/04.jpg" class="cbp-caption cbp-lightbox" data-title="To-Do Dashboard<br>by Tiberiu Neamu">
                    <div class="cbp-caption-defaultWrap">
                        <img src="../assets/global/img/portfolio/1200x900/10.jpg" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">To-Do Dashboard</div>
                                <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item web-design graphic">
                <a href="../assets/global/img/portfolio/1200x900/4.jpg" class="cbp-caption cbp-lightbox" data-title="Events and  More<br>by Tiberiu Neamu">
                    <div class="cbp-caption-defaultWrap">
                        <img src="../assets/global/img/portfolio/600x600/27.jpg" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Events and More</div>
                                <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item graphic logos">
                <a href="../assets/global/img/portfolio/1200x900/05.jpg" class="cbp-caption cbp-lightbox" data-title="WhereTO App<br>by Tiberiu Neamu">
                    <div class="cbp-caption-defaultWrap">
                        <img src="../assets/global/img/portfolio/600x600/28.jpg" alt=""> </div>
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
            <div class="cbp-item graphic motion">
                <a href="../assets/global/img/portfolio/1200x900/5.jpg" class="cbp-caption cbp-lightbox" data-title="Bolt UI<br>by Tiberiu Neamu">
                    <div class="cbp-caption-defaultWrap">
                        <img src="../assets/global/img/portfolio/600x600/29.jpg" alt=""> </div>
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
            <div class="cbp-item graphic">
                <a href="../assets/global/img/portfolio/1200x900/06.jpg" class="cbp-caption cbp-lightbox" data-title="iDevices<br>by Tiberiu Neamu">
                    <div class="cbp-caption-defaultWrap">
                        <img src="../assets/global/img/portfolio/600x600/30.jpg" alt=""> </div>
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
            <div class="cbp-item graphic logos">
                <a href="../assets/global/img/portfolio/1200x900/6.jpg" class="cbp-caption cbp-lightbox" data-title="Ski * Buddy<br>by Tiberiu Neamu">
                    <div class="cbp-caption-defaultWrap">
                        <img src="../assets/global/img/portfolio/600x600/31.jpg" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Ski * Buddy</div>
                                <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item graphic logos">
                <a href="../assets/global/img/portfolio/1200x900/07.jpg" class="cbp-caption cbp-lightbox" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">
                    <div class="cbp-caption-defaultWrap">
                        <img src="../assets/global/img/portfolio/600x600/32.jpg" alt=""> </div>
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
            <div class="cbp-item graphic logos">
                <a href="../assets/global/img/portfolio/1200x900/7.jpg" class="cbp-caption cbp-lightbox" data-title="Drag 2 Upload ~ Widget<br>by Tiberiu Neamu">
                    <div class="cbp-caption-defaultWrap">
                        <img src="../assets/global/img/portfolio/600x600/33.jpg" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Drag 2 Upload ~ Widget</div>
                                <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div id="js-loadMore-full-width" class="cbp-l-loadMore-text">
            <a href="../assets/global/plugins/cubeportfolio/ajax/loadMore4.html" class="cbp-l-loadMore-link btn" rel="nofollow">
                <span class="cbp-l-loadMore-defaultText">LOAD MORE</span>
                <span class="cbp-l-loadMore-loadingText">LOADING...</span>
                <span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>
            </a>
        </div>
    </div>
@endsection
