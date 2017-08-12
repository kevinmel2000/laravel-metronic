@extends('layouts.admin-1.master')

@section('title', 'SweetAlert for Bootstrap')

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
    <h1 class="page-title"> SweetAlert For Bootstrap
        <small>metronic custom alert demos based on bootstrap SweetAlerts plugin</small>
    </h1>
@endsection
