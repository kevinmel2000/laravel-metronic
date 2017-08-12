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

    <div class="m-heading-1 border-green m-bordered">
        <h3>Bootstrap Sweet Alert</h3>
        <p> Metronic Sweet Alerts extends Bootstrap Sweet Alerts to allow options to be defined within the HTML. Please refer below for all option parameters and possible values:
            <br> <code>data-title</code> - Define Sweet Alert Title (Text)
            <br> <code>data-message</code> - Define Sweet Alert Message (Text)
            <br> <code>data-type</code> - Defines the icon type to appear (success / error / warning / info)
            <br> <code>data-show-confirm-button</code> - Defines to show confirm button (true / false)
            <br> <code>data-confirm-button-class</code> - Defines any additional css classes to assign to confirm button (Text)
            <br> <code>data-show-cancel-button</code> - Defines to show cancel button (true / false)
            <br> <code>data-cancel-button-class</code> - Defines any additional css classes to assign to cancel button (Text)
            <br> <code>data-close-on-confirm</code> - Defines if Sweet Alert closes when click on confirm button (true / false)
            <br> <code>data-close-on-cancel</code> - Defines if Sweet Alert closes when click on cancel button (true / false)
            <br> <code>data-confirm-button-text</code> - Defines Sweet Alert confirm button text (Text)
            <br> <code>data-cancel-button-text</code> - Defines Sweet Alert cancel button text (Text)
            <br> <code>data-popup-title-success</code> - Defines Sweet Alert confirmation popup Title for Success (Text)
            <br> <code>data-popup-message-success</code>- Defines Sweet Alert confirmation popup Message for Success
            <br> <code>data-popup-title-cancel</code> - Defines Sweet Alert confirmation popup Title for Cancel
            <br> <code>data-popup-message-cancel</code> - Defines Sweet Alert confirmation popup Message for Cancel
            <br>
            <br> For more info please check out
            <a href="http://lipis.github.io/bootstrap-sweetalert/" target="_blank">the official documentation</a>. </p>
    </div>
@endsection
