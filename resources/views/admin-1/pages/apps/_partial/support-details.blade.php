@extends('layouts.admin-1.master')

@section('title', 'Support Ticket Detailed Page')

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li>
            <a href="{{ route('admin-1.index') }}">Home</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
@endsection

@section('content')
    <h1 class="page-title"> Support Ticket Detailed Page
        <small>ticket details page</small>
    </h1>
@endsection
