@extends('layouts.admin-1.master')

@section('title', 'Spinner Buttons')

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li>
            <a href="{{ route('admin-1.index') }}">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>UI Features</span>
        </li>
    </ul>
@endsection

@section('content')
    <h1 class="page-title"> Spinner Buttons
        <small>bootstrap spinner and progress bar buttons based on ladda bootstrap plugin</small>
    </h1>

    <div class="portlet light portlet-fit bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-refresh font-green"></i>
                <span class="caption-subject bold font-green uppercase"> Spinner Buttons</span>
                <div class="caption-desc font-grey-cascade"> To use the spinner effect, please include these 2 classes: <pre class="mt-code">.mt-ladda-btn</pre> and <pre class="mt-code">.ladda-button</pre> to your button element. Then please include one of the many the spinner
                    stlyes <pre class="mt-code">data-style="expand-left"</pre> to the button element. Finally, add a <pre class="mt-code">span</pre> tag with the class <pre class="mt-code">.ladda-label</pre> for the button label. For
                    more info on spinner buttons, please visit:
                    <a href="http://msurguy.github.io/ladda-bootstrap/" target="_blank">http://msurguy.github.io/ladda-bootstrap/</a>
                </div>
            </div>
        </div>
        <div class="portlet-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-refresh font-green"></i>
                                <span class="caption-subject bold font-green uppercase"> Square Buttons</span>
                                <span class="caption-helper">Click on buttons to view spinner in action</span>
                            </div>
                        </div>
                        <div class="portlet-body util-btn-margin-bottom-5">
                            <div class="clearfix">
                                <h4 class="block">Buttons</h4>
                                <button type="button" class="btn btn-default mt-ladda-btn ladda-button" data-style="expand-left" data-spinner-color="#333">
                                    <span class="ladda-label">Expand Left</span>
                                </button>
                                <button type="button" class="btn btn-primary mt-ladda-btn ladda-button" data-style="expand-right">
                                    <span class="ladda-label">Expand Right</span>
                                </button>
                                <button type="button" class="btn btn-success mt-ladda-btn ladda-button" data-style="expand-up">
                                    <span class="ladda-label">Expand Up</span>
                                </button>
                                <button type="button" class="btn btn-info mt-ladda-btn ladda-button" data-style="expand-down">
                                    <span class="ladda-label">Expand Down</span>
                                </button>
                                <button type="button" class="btn btn-warning mt-ladda-btn ladda-button" data-style="zoom-in">
                                    <span class="ladda-label">Zoom In</span>
                                </button>
                                <button type="button" class="btn btn-danger mt-ladda-btn ladda-button" data-style="zoom-out">
                                    <span class="ladda-label">Zoom Out</span>
                                </button>
                                <button type="button" class="btn purple mt-ladda-btn ladda-button" data-style="slide-left">
                                    <span class="ladda-label">Slide Left</span>
                                </button>
                                <button type="button" class="btn red mt-ladda-btn ladda-button" data-style="slide-right">
                                    <span class="ladda-label">Slide Right</span>
                                </button>
                                <button type="button" class="btn blue mt-ladda-btn ladda-button" data-style="slide-up">
                                    <span class="ladda-label">Slide Up</span>
                                </button>
                                <button type="button" class="btn green mt-ladda-btn ladda-button" data-style="slide-down">
                                    <span class="ladda-label">Slide Down</span>
                                </button>
                                <button type="button" class="btn yellow mt-ladda-btn ladda-button" data-style="contract">
                                    <span class="ladda-label">Contract</span>
                                </button>
                            </div>
                            <div class="clearfix">
                                <h4 class="block">Outline Buttons</h4>
                                <button type="button" class="btn btn-default mt-ladda-btn ladda-button btn-outline" data-style="expand-left" data-spinner-color="#333">
                                    <span class="ladda-label">Expand Left</span>
                                </button>
                                <button type="button" class="btn purple mt-ladda-btn ladda-button btn-outline" data-style="slide-left" data-spinner-color="#333">
                                    <span class="ladda-label">Slide Left</span>
                                </button>
                                <button type="button" class="btn blue mt-ladda-btn ladda-button btn-outline" data-style="slide-up" data-spinner-color="#333">
                                    <span class="ladda-label">Slide Up</span>
                                </button>
                                <button type="button" class="btn yellow mt-ladda-btn ladda-button btn-outline" data-style="contract" data-spinner-color="#333">
                                    <span class="ladda-label">Contract</span>
                                </button>
                            </div>
                            <div class="clearfix">
                                <h4 class="block">Icon Buttons</h4>
                                <button type="button" class="btn btn-default mt-ladda-btn ladda-button" data-style="expand-left" data-spinner-color="#333">
                                    <span class="ladda-label">
                                        <i class="icon-arrow-left"></i> Expand Left</span>
                                </button>
                                <button type="button" class="btn btn-primary mt-ladda-btn ladda-button" data-style="expand-right">
                                    <span class="ladda-label">
                                        <i class="icon-arrow-right"></i> Expand Right</span>
                                </button>
                                <button type="button" class="btn btn-success mt-ladda-btn ladda-button" data-style="expand-up">
                                    <span class="ladda-label">
                                        <i class="icon-arrow-up"></i> Expand Up</span>
                                </button>
                                <button type="button" class="btn btn-info mt-ladda-btn ladda-button" data-style="expand-down">
                                    <span class="ladda-label">
                                        <i class="icon-arrow-down"></i> Expand Down</span>
                                </button>
                                <button type="button" class="btn btn-warning mt-ladda-btn ladda-button" data-style="zoom-in">
                                    <span class="ladda-label">
                                        <i class="icon-magnifier"></i> Zoom In</span>
                                </button>
                                <button type="button" class="btn purple mt-ladda-btn ladda-button btn-outline" data-style="slide-left" data-spinner-color="#333">
                                    <span class="ladda-label">
                                        <i class="icon-logout"></i> Slide Left</span>
                                </button>
                                <button type="button" class="btn red mt-ladda-btn ladda-button btn-outline" data-style="slide-right" data-spinner-color="#333">
                                    <span class="ladda-label">
                                        <i class="icon-login"></i> Slide Right</span>
                                </button>
                                <button type="button" class="btn blue mt-ladda-btn ladda-button btn-outline" data-style="slide-up" data-spinner-color="#333">
                                    <span class="ladda-label">
                                        <i class="icon-layers"></i> Slide Up</span>
                                </button>
                                <button type="button" class="btn green mt-ladda-btn ladda-button btn-outline" data-style="slide-down" data-spinner-color="#333">
                                    <span class="ladda-label">
                                        <i class="icon-present"></i> Slide Down</span>
                                </button>
                                <button type="button" class="btn yellow mt-ladda-btn ladda-button btn-outline" data-style="contract" data-spinner-color="#333">
                                    <span class="ladda-label">
                                        <i class="icon-size-actual"></i> Contract</span>
                                </button>
                            </div>
                            <div class="clearfix">
                                <h4 class="block">Button Sizes</h4>
                                <button type="button" class="btn btn-success btn-sm mt-ladda-btn ladda-button" data-style="expand-right" data-size="s">
                                    <span class="ladda-label">Small</span>
                                </button>
                                <button type="button" class="btn btn-info btn-lg mt-ladda-btn ladda-button" data-style="zoom-in" data-size="l">
                                    <span class="ladda-label">Large</span>
                                </button>
                            </div>
                            <div class="clearfix">
                                <h4 class="block">Progress Button Spinners</h4>
                                <button type="button" data-loading-text="Loading..." class="btn btn-primary mt-ladda-btn ladda-button mt-progress-demo" data-style="expand-left">
                                    <span class="ladda-label">Loading State</span>
                                </button>
                                <button type="button" data-loading-text="Loading..." class="btn purple mt-ladda-btn ladda-button mt-progress-demo" data-style="expand-right">
                                    <span class="ladda-label">Loading State</span>
                                </button>
                                <button type="button" data-loading-text="Loading..." class="btn red mt-ladda-btn ladda-button mt-progress-demo" data-style="slide-left">
                                    <span class="ladda-label">Loading State</span>
                                </button>
                                <button type="button" data-loading-text="Loading..." class="btn blue mt-ladda-btn ladda-button mt-progress-demo" data-style="slide-right">
                                    <span class="ladda-label">Loading State</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-refresh font-green"></i>
                                <span class="caption-subject bold font-green uppercase"> Circle Buttons</span>
                                <span class="caption-helper">Click on buttons to view spinner in action</span>
                            </div>
                        </div>
                        <div class="portlet-body util-btn-margin-bottom-5">
                            <div class="clearfix">
                                <h4 class="block">Buttons</h4>
                                <button type="button" class="btn btn-default mt-ladda-btn ladda-button btn-circle" data-style="expand-left" data-spinner-color="#333">
                                    <span class="ladda-label">Expand Left</span>
                                </button>
                                <button type="button" class="btn btn-primary mt-ladda-btn ladda-button btn-circle" data-style="expand-right">
                                    <span class="ladda-label">Expand Right</span>
                                </button>
                                <button type="button" class="btn btn-success mt-ladda-btn ladda-button btn-circle" data-style="expand-up">
                                    <span class="ladda-label">Expand Up</span>
                                </button>
                                <button type="button" class="btn btn-info mt-ladda-btn ladda-button btn-circle" data-style="expand-down">
                                    <span class="ladda-label">Expand Down</span>
                                </button>
                                <button type="button" class="btn btn-warning mt-ladda-btn ladda-button btn-circle" data-style="zoom-in">
                                    <span class="ladda-label">Zoom In</span>
                                </button>
                                <button type="button" class="btn btn-danger mt-ladda-btn ladda-button btn-circle" data-style="zoom-out">
                                    <span class="ladda-label">Zoom Out</span>
                                </button>
                                <button type="button" class="btn purple mt-ladda-btn ladda-button btn-circle" data-style="slide-left">
                                    <span class="ladda-label">Slide Left</span>
                                </button>
                                <button type="button" class="btn red mt-ladda-btn ladda-button btn-circle" data-style="slide-right">
                                    <span class="ladda-label">Slide Right</span>
                                </button>
                                <button type="button" class="btn blue mt-ladda-btn ladda-button btn-circle" data-style="slide-up">
                                    <span class="ladda-label">Slide Up</span>
                                </button>
                                <button type="button" class="btn green mt-ladda-btn ladda-button btn-circle" data-style="slide-down">
                                    <span class="ladda-label">Slide Down</span>
                                </button>
                                <button type="button" class="btn yellow mt-ladda-btn ladda-button btn-circle" data-style="contract">
                                    <span class="ladda-label">Contract</span>
                                </button>
                            </div>
                            <div class="clearfix">
                                <h4 class="block">Outline Buttons</h4>
                                <button type="button" class="btn btn-default mt-ladda-btn ladda-button btn-outline btn-circle" data-style="expand-left" data-spinner-color="#333">
                                    <span class="ladda-label">Expand Left</span>
                                </button>
                                <button type="button" class="btn purple mt-ladda-btn ladda-button btn-outline btn-circle" data-style="slide-left" data-spinner-color="#333">
                                    <span class="ladda-label">Slide Left</span>
                                </button>
                                <button type="button" class="btn blue mt-ladda-btn ladda-button btn-outline btn-circle" data-style="slide-up" data-spinner-color="#333">
                                    <span class="ladda-label">Slide Up</span>
                                </button>
                                <button type="button" class="btn yellow mt-ladda-btn ladda-button btn-outline btn-circle" data-style="contract" data-spinner-color="#333">
                                    <span class="ladda-label">Contract</span>
                                </button>
                            </div>
                            <div class="clearfix">
                                <h4 class="block">Icon Buttons</h4>
                                <button type="button" class="btn btn-default mt-ladda-btn ladda-button btn-circle" data-style="expand-left" data-spinner-color="#333">
                                    <span class="ladda-label">
                                        <i class="icon-arrow-left"></i> Expand Left</span>
                                </button>
                                <button type="button" class="btn btn-primary mt-ladda-btn ladda-button btn-circle" data-style="expand-right">
                                    <span class="ladda-label">
                                        <i class="icon-arrow-right"></i> Expand Right</span>
                                </button>
                                <button type="button" class="btn btn-success mt-ladda-btn ladda-button btn-circle" data-style="expand-up">
                                    <span class="ladda-label">
                                        <i class="icon-arrow-up"></i> Expand Up</span>
                                </button>
                                <button type="button" class="btn btn-info mt-ladda-btn ladda-button btn-circle" data-style="expand-down">
                                    <span class="ladda-label">
                                        <i class="icon-arrow-down"></i> Expand Down</span>
                                </button>
                                <button type="button" class="btn btn-warning mt-ladda-btn ladda-button btn-circle" data-style="zoom-in">
                                    <span class="ladda-label">
                                        <i class="icon-magnifier"></i> Zoom In</span>
                                </button>
                                <button type="button" class="btn purple mt-ladda-btn ladda-button btn-circle btn-outline" data-style="slide-left" data-spinner-color="#333">
                                    <span class="ladda-label">
                                        <i class="icon-logout"></i> Slide Left</span>
                                </button>
                                <button type="button" class="btn red mt-ladda-btn ladda-button btn-circle btn-outline" data-style="slide-right" data-spinner-color="#333">
                                    <span class="ladda-label">
                                        <i class="icon-login"></i> Slide Right</span>
                                </button>
                                <button type="button" class="btn blue mt-ladda-btn ladda-button btn-circle btn-outline" data-style="slide-up" data-spinner-color="#333">
                                    <span class="ladda-label">
                                        <i class="icon-layers"></i> Slide Up</span>
                                </button>
                                <button type="button" class="btn green mt-ladda-btn ladda-button btn-circle btn-outline" data-style="slide-down" data-spinner-color="#333">
                                    <span class="ladda-label">
                                        <i class="icon-present"></i> Slide Down</span>
                                </button>
                                <button type="button" class="btn yellow mt-ladda-btn ladda-button btn-circle btn-outline" data-style="contract" data-spinner-color="#333">
                                    <span class="ladda-label">
                                        <i class="icon-size-actual"></i> Contract</span>
                                </button>
                            </div>
                            <div class="clearfix">
                                <h4 class="block">Button Sizes</h4>
                                <button type="button" class="btn btn-success btn-sm mt-ladda-btn ladda-button btn-circle" data-style="expand-right" data-size="s">
                                    <span class="ladda-label">Small</span>
                                </button>
                                <button type="button" class="btn btn-info btn-lg mt-ladda-btn ladda-button btn-circle" data-style="zoom-in" data-size="l">
                                    <span class="ladda-label">Large</span>
                                </button>
                            </div>
                            <div class="clearfix">
                                <h4 class="block">Progress Button Spinners</h4>
                                <button type="button" data-loading-text="Loading..." class="btn btn-primary mt-ladda-btn ladda-button mt-progress-demo btn-circle" data-style="expand-left">
                                    <span class="ladda-label">Loading State</span>
                                </button>
                                <button type="button" data-loading-text="Loading..." class="btn purple mt-ladda-btn ladda-button mt-progress-demo btn-circle" data-style="expand-right">
                                    <span class="ladda-label">Loading State</span>
                                </button>
                                <button type="button" data-loading-text="Loading..." class="btn red mt-ladda-btn ladda-button mt-progress-demo btn-circle" data-style="slide-left">
                                    <span class="ladda-label">Loading State</span>
                                </button>
                                <button type="button" data-loading-text="Loading..." class="btn blue mt-ladda-btn ladda-button mt-progress-demo btn-circle" data-style="slide-right">
                                    <span class="ladda-label">Loading State</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page-level-plugins-header')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/ladda/ladda-themeless.min.css') }}">
@endpush

@push('page-level-plugins-footer')
    <script type="text/javascript" src="{{ asset('assets/global/plugins/ladda/spin.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/ladda/ladda.min.js') }}"></script>
@endpush

@push('page-level-scripts')
    <script type="text/javascript" src="{{ asset('assets/pages/scripts/ui-buttons-spinners.min.js') }}"></script>
@endpush
