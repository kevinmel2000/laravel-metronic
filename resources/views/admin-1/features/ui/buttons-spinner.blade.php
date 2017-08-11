@extends('layouts.admin-1.master')

@section('title', 'Spinner Buttons')

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
@endsection

@push('page-level-plugins-header')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/ladda/ladda-themeless.min.css') }}">
@endpush

@push('page-level-plugins-footer')
    <script type="text/javascript" src="{{ asset('assets/global/plugins/ladda/spin.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/ladda/ladda.min.js') }}"></script>
@endpush

@push('page-level-scripts')
    <script type="text/javascript" src="{{ asset('assets/pages/scripts/ui-buttons-spinners.min.js') }}"></script>
@endpush
