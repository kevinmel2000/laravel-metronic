@extends('layouts.admin-1.master')

@section('title', 'Grey Bg Content')

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <span>Page Layouts</span>
        </li>
    </ul>
@endsection

@section('content')
    {{-- TODO: How do make this content grey colored? --}}
    
    <h1 class="page-title"> Grey Bg Content
        <small>grey bg content sample</small>
    </h1>

    <div class="note note-info">
        <p> Grey content page with page title, breadcrumbs and action dropdown menu. </p>
    </div>
@endsection
