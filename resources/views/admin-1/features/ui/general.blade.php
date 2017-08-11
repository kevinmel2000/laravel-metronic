@extends('layouts.admin-1.master')

@section('title', 'General Components')

@section('breadcrumb')
@endsection

@section('content')
@endsection

@push('page-level-plugins-footer')
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery.pulsate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-bootpag/jquery.bootpag.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/holder.js') }}"></script>
@endpush
