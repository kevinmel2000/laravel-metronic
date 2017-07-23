@extends('layouts.admin-1.master')

@section('title', 'eCommerce Dashboard')

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li>
            <a href="{{ route('admin-1.index') }}">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>eCommerce</span>
        </li>
    </ul>
@endsection

@section('content')
    <h1 class="page-title"> eCommercen Dashboard
        <small>recent ecommerce statistics, charts, recent orders and sales</small>
    </h1>
@endsection
