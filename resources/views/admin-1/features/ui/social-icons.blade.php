@extends('layouts.admin-1.master')

@section('title', 'Social Icons')

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
    <h1 class="page-title"> Social Icons
        <small>extensive social icons based on socicons plugin</small>
    </h1>

    <div class="m-heading-1 border-green m-bordered">
        <h3>Socicon</h3>
        <p> Socicon provides resolution-free social icon font with full retina support. For more info please check out
            <a href="http://www.socicon.com/" target="_blank">the official documentation</a>. </p>
    </div>
@endsection
