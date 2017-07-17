@extends('layouts.admin-1.master')

@section('title', 'Invoice #2')

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>General</span>
        </li>
    </ul>
@endsection

@section('content')
    <h1 class="page-title"> Invoice 2
        <small>invoice sample</small>
    </h1>

    <div class="invoice-content-2 bordered">
        <div class="row invoice-head">
            <div class="col-md-7 col-xs-6">
                <div class="invoice-logo">
                    <img src="../assets/pages/img/logos/logo5.jpg" class="img-responsive" alt="" />
                    <h1 class="uppercase">Invoice</h1>
                </div>
            </div>
            <div class="col-md-5 col-xs-6">
                <div class="company-address">
                    <span class="bold uppercase">Metronic Inc.</span>
                    <br/> 25, Lorem Lis Street, Orange C
                    <br/> California, US
                    <br/>
                    <span class="bold">T</span> 1800 123 456
                    <br/>
                    <span class="bold">E</span> support@keenthemes.com
                    <br/>
                    <span class="bold">W</span> www.keenthemes.com </div>
            </div>
        </div>
        <div class="row invoice-cust-add">
            <div class="col-xs-3">
                <h2 class="invoice-title uppercase">Customer</h2>
                <p class="invoice-desc">Lorem Tech Co.</p>
            </div>
            <div class="col-xs-3">
                <h2 class="invoice-title uppercase">Date</h2>
                <p class="invoice-desc">Nov 12, 2015</p>
            </div>
            <div class="col-xs-6">
                <h2 class="invoice-title uppercase">Address</h2>
                <p class="invoice-desc inv-address">25, Lorem Lis Street, Orange C, California, US</p>
            </div>
        </div>
        <div class="row invoice-body">
            <div class="col-xs-12 table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="invoice-title uppercase">Description</th>
                            <th class="invoice-title uppercase text-center">Hours</th>
                            <th class="invoice-title uppercase text-center">Rate</th>
                            <th class="invoice-title uppercase text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h3>Web Design & Development</h3>
                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet et dolore siat magna aliquam erat volutpat. </p>
                            </td>
                            <td class="text-center sbold">200</td>
                            <td class="text-center sbold">80$</td>
                            <td class="text-center sbold">16,000$</td>
                        </tr>
                        <tr>
                            <td>
                                <h3>Branding</h3>
                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod. </p>
                            </td>
                            <td class="text-center sbold">130</td>
                            <td class="text-center sbold">60$</td>
                            <td class="text-center sbold">7,800$</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row invoice-subtotal">
            <div class="col-xs-3">
                <h2 class="invoice-title uppercase">Subtotal</h2>
                <p class="invoice-desc">23,800$</p>
            </div>
            <div class="col-xs-3">
                <h2 class="invoice-title uppercase">Tax (0%)</h2>
                <p class="invoice-desc">0$</p>
            </div>
            <div class="col-xs-6">
                <h2 class="invoice-title uppercase">Total</h2>
                <p class="invoice-desc grand-total">23,800$</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <a class="btn btn-lg green-haze hidden-print uppercase print-btn" onclick="javascript:window.print();">Print</a>
            </div>
        </div>
    </div>
@endsection

@push('page-level-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/css/invoice-2.min.css') }}">
@endpush
