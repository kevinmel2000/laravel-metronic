@extends('layouts.admin-1.master')

@section('title', 'Cookie Consent #2')

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li>
            <a href="{{ route('admin-1.index') }}">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>System</span>
        </li>
    </ul>
@endsection

@section('content')
    <h1 class="page-title"> Cookie Consent 2
        <small>Cookie Consent Demo</small>
    </h1>

    <div class="note note-success">
        <h3>Cookie Consent Bar</h3>
        <p> A simple, lightweight jQuery plugin for creating a notification bar that is dismissable and dismiss is saved by cookie. Perfect for implementing the new eu cookielaw. For more info check <a class="btn red btn-outline" href="https://github.com/carlwoodhouse/jquery.cookieBar" target="_blank">the official documentation</a></p>
    </div>

    <div class="mt-cookie-consent-bar mt-cookie-consent-bar-light">
        <div class="mt-cookie-consent-bar-holder">
            <div class="mt-cookie-consent-bar-content"> This website uses cookies to ensure you get the best experience on our website.
                <a href="http://www.allaboutcookies.org/cookies/" tatget="_blank">What is cookie ?</a>
                <a href="#">Our Cookie Policy</a>
            </div>
            <div class="mt-cookie-consent-bar-action">
                <a href="javascript:;" class="mt-cookie-consent-btn btn btn-circle red">Understand</a>
            </div>
        </div>
    </div>
@endsection

@push('page-level-plugins-footer')
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-cookiebar/jquery.cookieBar.min.js') }}"></script>
@endpush

@push('page-level-scripts')
    <script type="text/javascript" src="{{ asset('assets/layouts/global/scripts/cookie-consent.min.js') }}"></script>
@endpush
