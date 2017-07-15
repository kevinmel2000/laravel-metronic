@extends('layouts.admin-1.master')

@section('title', 'Search #2')

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
            <span>Search</span>
        </li>
    </ul>
@endsection

@section('content')
    <h1 class="page-title"> Search Results 2
        <small>search results</small>
    </h1>

    <div class="search-page search-content-2">
        <div class="search-bar ">
            <div class="row">
                <div class="col-md-7">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn blue uppercase bold" type="button">Search</button>
                        </span>
                    </div>
                </div>
                <div class="col-md-5">
                    <p class="search-desc clearfix"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque. </p>
                </div>
            </div>
        </div>
@endsection
