@extends('layouts.admin-1.master')

@section('title', 'Popover Confirmations')

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
    <h1 class="page-title"> Bootstrap Confirmation
        <small>metronic popover confirmation demos using bootstrap confirmation plugin</small>
    </h1>
@endsection
