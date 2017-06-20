@extends('layouts.admin-1.master')

@section('title', 'Light Page Head')

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Page Layouts</span>
        </li>
    </ul>
@endsection

@section('content')
    <h1 class="page-title"> Light Page Head
        <small>light page head option</small>
    </h1>

    <div class="note note-info">
        <p> Light page head with page title, breadcrumbs and action dropdown menu. </p>
    </div>
@endsection
