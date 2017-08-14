@extends('layouts.admin-1.master')

@section('title', 'Timeline 1')

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
    <h1 class="page-title"> Timeline
        <small>multi-purpose bootstrap timeline demos</small>
    </h1>
@endsection
