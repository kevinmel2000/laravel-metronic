@extends('layouts.admin-1.master')

@section('title', '404 #1')

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
    <h1 class="page-title">
        404 Page Option 1
        <small>404 page option 1</small>
    </h1>

    <div class="row">
        <div class="col-md-12 page-404">
            <div class="number font-green"> 404 </div>
            <div class="details">
                <h3>Oops! You're lost.</h3>
                <p> We can not find the page you're looking for.<br>
                    <a href="{{ route('admin-1.index') }}"> Return home </a> or try the search bar below.</p>

                <form action="#">
                    <div class="input-group input-medium">
                        <input type="text" class="form-control" placeholder="keyword...">
                        <span class="input-group-btn">
                            <button type="submit" class="btn green">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@push('page-level-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/css/error.min.css') }}">
@endpush
