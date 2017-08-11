@extends('layouts.admin-1.master')

@section('title', 'General Components')

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

@push('page-level-plugins-footer')
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery.pulsate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-bootpag/jquery.bootpag.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/holder.js') }}"></script>
@endpush

@push('page-level-scripts')
    <script type="text/javascript" src="{{ asset('assets/global/scripts/app.min.js') }}"></script>
@endpush
