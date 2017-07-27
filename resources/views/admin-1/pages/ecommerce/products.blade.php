@extends('layouts.admin-1.master')

@section('title', 'eCommerce Products')

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
    <h1 class="page-title"> eCommerce Products
        <small>manage products</small>
    </h1>
@endsection
