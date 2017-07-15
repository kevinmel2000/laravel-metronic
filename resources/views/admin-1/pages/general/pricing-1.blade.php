@extends('layouts.admin-1.master')

@section('title', 'Pricing #1')

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
    <h1 class="page-title"> Pricing Tables
        <small>pricing table samples</small>
    </h1>

    <div class="portlet light portlet-fit bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-share font-green"></i>
                <span class="caption-subject font-green bold uppercase">Pricing 1</span>
            </div>
            <div class="actions">
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                    <i class="icon-cloud-upload"></i>
                </a>
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                    <i class="icon-wrench"></i>
                </a>
                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                    <i class="icon-trash"></i>
                </a>
            </div>
        </div>
        <div class="portlet-body">
            <div class="pricing-content-1">
                <div class="row">
                    <div class="col-md-3">
                        <div class="price-column-container border-active">
                            <div class="price-table-head bg-blue">
                                <h2 class="no-margin">Budget</h2>
                            </div>
                            <div class="arrow-down border-top-blue"></div>
                            <div class="price-table-pricing">
                                <h3>
                                    <sup class="price-sign">$</sup>24</h3>
                                <p>per month</p>
                            </div>
                            <div class="price-table-content">
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-user"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding">3 Members</div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-drawer"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding">50GB Storage</div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-screen-smartphone"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding">Single Device</div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-refresh"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding">Weekly Backups</div>
                                </div>
                            </div>
                            <div class="arrow-down arrow-grey"></div>
                            <div class="price-table-footer">
                                <button type="button" class="btn grey-salsa btn-outline sbold uppercase price-button">Sign Up</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="price-column-container border-active">
                            <div class="price-table-head bg-red">
                                <h2 class="no-margin">Solo</h2>
                            </div>
                            <div class="arrow-down border-top-red"></div>
                            <div class="price-table-pricing">
                                <h3>
                                    <sup class="price-sign">$</sup>39</h3>
                                <p>per month</p>
                            </div>
                            <div class="price-table-content">
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-user"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding">5 Members</div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-drawer"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding">100GB Storage</div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-screen-smartphone"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding">Single Device</div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-refresh"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding">Weekly Backups</div>
                                </div>
                            </div>
                            <div class="arrow-down arrow-grey"></div>
                            <div class="price-table-footer">
                                <button type="button" class="btn grey-salsa btn-outline price-button sbold uppercase">Sign Up</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="price-column-container border-active">
                            <div class="price-table-head bg-green">
                                <h2 class="no-margin">Start up</h2>
                            </div>
                            <div class="arrow-down border-top-green"></div>
                            <div class="price-table-pricing">
                                <h3>
                                    <sup class="price-sign">$</sup>59</h3>
                                <p>per month</p>
                                <div class="price-ribbon">Popular</div>
                            </div>
                            <div class="price-table-content">
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-user-follow"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding">20 Members</div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-drawer"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding">500GB Storage</div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-cloud-download"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding">Cloud Syncing</div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-refresh"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding">Daily Backups</div>
                                </div>
                            </div>
                            <div class="arrow-down arrow-grey"></div>
                            <div class="price-table-footer">
                                <button type="button" class="btn green price-button sbold uppercase">Sign Up</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="price-column-container border-active">
                            <div class="price-table-head bg-purple">
                                <h2 class="no-margin">Enterprise</h2>
                            </div>
                            <div class="arrow-down border-top-purple"></div>
                            <div class="price-table-pricing">
                                <h3>
                                    <sup class="price-sign">$</sup>128</h3>
                                <p>per month</p>
                            </div>
                            <div class="price-table-content">
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-users"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding">100 Members</div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-drawer"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding">2TB Storage</div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-cloud-download"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding">Cloud Syncing</div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-refresh"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding">Weekly Backups</div>
                                </div>
                            </div>
                            <div class="arrow-down arrow-grey"></div>
                            <div class="price-table-footer">
                                <button type="button" class="btn grey-salsa btn-outline price-button sbold uppercase">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portlet light portlet-fit bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-share font-red"></i>
                <span class="caption-subject font-red bold uppercase">Pricing 2</span>
            </div>
            <div class="actions">
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                    <i class="icon-cloud-upload"></i>
                </a>
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                    <i class="icon-wrench"></i>
                </a>
                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                    <i class="icon-trash"></i>
                </a>
            </div>
        </div>
        <div class="portlet-body">
            <div class="pricing-content-2">
                <div class="pricing-table-container">
                    <div class="row padding-fix">
                        <div class="col-md-3 no-padding">
                            <div class="price-column-container border-right border-top border-left">
                                <div class="price-table-head price-1">
                                    <h2 class="uppercase no-margin">Budget</h2>
                                </div>
                                <div class="price-table-pricing">
                                    <h3>
                                        <sup class="price-sign">$</sup>24</h3>
                                    <p class="uppercase">per month</p>
                                </div>
                                <div class="price-table-content">
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-user"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">3 Members</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-drawer"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">50GB Storage</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-screen-smartphone"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">Single Device</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-refresh"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">Monthly Backups</div>
                                    </div>
                                </div>
                                <div class="price-table-footer">
                                    <button type="button" class="btn grey-salsa btn-outline sbold uppercase bold">Sign Up</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 no-padding">
                            <div class="price-column-container border-top">
                                <div class="price-table-head price-1">
                                    <h2 class="uppercase no-margin">Solo</h2>
                                </div>
                                <div class="price-table-pricing">
                                    <h3>
                                        <sup class="price-sign">$</sup>39</h3>
                                    <p class="uppercase">per month</p>
                                </div>
                                <div class="price-table-content">
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-user"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">5 Members</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-drawer"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">100GB Storage</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-screen-smartphone"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">Single Device</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-refresh"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">Weekly Backups</div>
                                    </div>
                                </div>
                                <div class="price-table-footer">
                                    <button type="button" class="btn grey-salsa btn-outline sbold uppercase bold">Sign Up</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 no-padding">
                            <div class="price-column-container featured-price border-top">
                                <div class="price-feature-label uppercase bg-green-jungle">Best Value</div>
                                <div class="price-table-head price-2">
                                    <h2 class="uppercase no-margin">Start up</h2>
                                </div>
                                <div class="price-table-pricing">
                                    <h3>
                                        <sup class="price-sign">$</sup>59</h3>
                                    <p class="uppercase">per month</p>
                                </div>
                                <div class="price-table-content">
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-user-follow"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">20 Members</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-drawer"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">500GB Storage</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-cloud-download"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase font-green sbold">Cloud Syncing</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-refresh"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase font-green sbold">Daily Backups</div>
                                    </div>
                                </div>
                                <div class="price-table-footer">
                                    <button type="button" class="btn green featured-price uppercase">Get it now!</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 no-padding">
                            <div class="price-column-container border-top border-right">
                                <div class="price-table-head price-3">
                                    <h2 class="uppercase no-margin">Enterprise</h2>
                                </div>
                                <div class="price-table-pricing">
                                    <h3>
                                        <sup class="price-sign">$</sup>128</h3>
                                    <p class="uppercase">per month</p>
                                </div>
                                <div class="price-table-content">
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-users"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">100 Members</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-drawer"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase font-green sbold">2TB Storage</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-cloud-download"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">Cloud Syncing</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-refresh"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">Weekly Backups</div>
                                    </div>
                                </div>
                                <div class="price-table-footer">
                                    <button type="button" class="btn grey-salsa btn-outline sbold uppercase bold">Sign Up</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portlet light portlet-fit bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-share font-blue"></i>
                <span class="caption-subject font-blue bold uppercase">Pricing 3</span>
            </div>
            <div class="actions">
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                    <i class="icon-cloud-upload"></i>
                </a>
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                    <i class="icon-wrench"></i>
                </a>
                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                    <i class="icon-trash"></i>
                </a>
            </div>
        </div>
        <div class="portlet-body">
            <div class="pricing-content-2">
                <div class="pricing-table-container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="price-column-container border-left border-top border-right">
                                <div class="price-table-head price-1">
                                    <h2 class="uppercase bg-blue font-grey-cararra opt-pricing-5">Budget</h2>
                                </div>
                                <div class="price-table-pricing">
                                    <h3>
                                        <sup class="price-sign">$</sup>24</h3>
                                    <p class="uppercase">per month</p>
                                </div>
                                <div class="price-table-content">
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-user"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">3 Members</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-drawer"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">50GB Storage</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-screen-smartphone"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">Single Device</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-refresh"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">Monthly Backups</div>
                                    </div>
                                </div>
                                <div class="price-table-footer">
                                    <button type="button" class="btn grey-salsa btn-outline sbold uppercase">Sign Up</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="price-column-container border-left border-top border-right">
                                <div class="price-table-head price-1">
                                    <h2 class="uppercase bg-blue-steel font-grey-cararra opt-pricing-5">Solo</h2>
                                </div>
                                <div class="price-table-pricing">
                                    <h3>
                                        <sup class="price-sign">$</sup>39</h3>
                                    <p class="uppercase">per month</p>
                                </div>
                                <div class="price-table-content">
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-user"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">5 Members</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-drawer"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">100GB Storage</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-screen-smartphone"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">Single Device</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-refresh"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">Weekly Backups</div>
                                    </div>
                                </div>
                                <div class="price-table-footer">
                                    <button type="button" class="btn grey-salsa btn-outline sbold uppercase">Sign Up</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="price-column-container featured-price">
                                <div class="price-feature-label uppercase bg-red">Best Value</div>
                                <div class="price-table-head price-2">
                                    <h2 class="uppercase bg-green-jungle font-grey-cararra opt-pricing-5">Start up</h2>
                                </div>
                                <div class="price-table-pricing">
                                    <h3>
                                        <sup class="price-sign">$</sup>59</h3>
                                    <p class="uppercase">per month</p>
                                </div>
                                <div class="price-table-content">
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-user-follow"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">20 Members</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-drawer"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">500GB Storage</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-cloud-download"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase font-green sbold">Cloud Syncing</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-refresh"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase font-green sbold">Daily Backups</div>
                                    </div>
                                </div>
                                <div class="price-table-footer">
                                    <button type="button" class="btn green featured-price uppercase">Get it now!</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="price-column-container border-left border-top border-right">
                                <div class="price-table-head price-3">
                                    <h2 class="uppercase bg-blue-ebonyclay font-grey-cararra opt-pricing-5">enterprise</h2>
                                </div>
                                <div class="price-table-pricing">
                                    <h3>
                                        <sup class="price-sign">$</sup>128</h3>
                                    <p class="uppercase">per month</p>
                                </div>
                                <div class="price-table-content">
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-users"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">100 Members</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-drawer"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase font-green sbold">2TB Storage</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-cloud-download"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">Cloud Syncing</div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-xs-3 text-right">
                                            <i class="icon-refresh"></i>
                                        </div>
                                        <div class="col-xs-9 text-left uppercase">Weekly Backups</div>
                                    </div>
                                </div>
                                <div class="price-table-footer">
                                    <button type="button" class="btn grey-salsa btn-outline sbold uppercase">Sign Up</button>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/css/pricing.min.css') }}">
@endpush
