@extends('layouts.admin-1.master')

@section('title', 'eCommerce Orders')

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
    <h1 class="page-title"> eCommerce Orders
        <small>manage and track orders</small>
    </h1>
@endsection
