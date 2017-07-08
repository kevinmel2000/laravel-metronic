@extends('layouts.admin-1.master')

@section('title', 'About')

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
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> About Us
        <small>about us page</small>
    </h1>
    <!-- END PAGE TITLE-->

    <!-- BEGIN CONTENT HEADER -->
    <div class="row margin-bottom-40 about-header">
        <div class="col-md-12">
            <h1>About Us</h1>
            <h2>Life is either a great adventure or nothing</h2>
            <button type="button" class="btn btn-danger">JOIN US TODAY</button>
        </div>
    </div>
    <!-- END CONTENT HEADER -->
@endsection
