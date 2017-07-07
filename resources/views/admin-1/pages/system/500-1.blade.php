@extends('layouts.admin-1.master')

@section('title', '500 #1')

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>System</span>
        </li>
    </ul>
@endsection

@section('content')
    <h1 class="page-title"> 500 Page Option 1
        <small>500 page option 1</small>
    </h1>

    <div class="row">
        <div class="col-md-12 page-500">
            <div class=" number font-red"> 500 </div>
            <div class=" details">
                <h3>Oops! Something went wrong.</h3>
                <p> We are fixing it! Please come back in a while.</p>
                <p><a href="index.html" class="btn red btn-outline"> Return home </a></p>
            </div>
        </div>
    </div>
@endsection

@push('page-level-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/css/error.min.css') }}">
@endpush
