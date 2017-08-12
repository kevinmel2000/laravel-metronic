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
            <a href="http://lipis.github.io/bootstrap-sweetalert/" target="_blank">the official documentation</a>.
        </p>
    </div>

    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-bubble font-green-sharp"></i>
                <span class="caption-subject font-green-sharp bold uppercase">Bootstrap Sweet Alerts on Buttons</span>
            </div>
            <div class="actions">
                <div class="btn-group">
                    <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="javascript:;"> Option 1</a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="javascript:;">Option 2</a>
                        </li>
                        <li>
                            <a href="javascript:;">Option 3</a>
                        </li>
                        <li>
                            <a href="javascript:;">Option 4</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="portlet-body">
            <h4>Sweet Alert Samples</h4>
            <button class="btn btn-default mt-sweetalert" data-title="Sweet Alerts" data-message="Beautiful popup alerts" data-allow-outside-click="true" data-confirm-button-class="btn-default">Default Alert</button>
            <button class="btn btn-primary mt-sweetalert" data-title="Sweet Alerts" data-message="Beautiful popup alerts" data-allow-outside-click="true" data-confirm-button-class="btn-primary">Primary Alert</button>
            <button class="btn btn-info mt-sweetalert" data-title="Sweet Alerts" data-message="Beautiful popup alerts" data-allow-outside-click="true" data-confirm-button-class="btn-info">Info Alert</button>
            <button class="btn btn-warning mt-sweetalert" data-title="Sweet Alerts" data-message="Beautiful popup alerts" data-allow-outside-click="true" data-confirm-button-class="btn-warning">Warning Alert</button>
            <button class="btn btn-danger mt-sweetalert" data-title="Sweet Alerts" data-message="Beautiful popup alerts" data-allow-outside-click="true" data-confirm-button-class="btn-danger">Danger Alert</button>
            <button class="btn btn-success mt-sweetalert" data-title="Sweet Alerts" data-message="Beautiful popup alerts" data-allow-outside-click="true" data-confirm-button-class="btn-success">Success Alert</button>
            <h4 class="mt-sweetalert-title">Sweet Alert Samples with Icons</h4>
            <button class="btn btn-success mt-sweetalert" data-title="Sweet Alerts with Icons" data-message="Success Icon" data-type="success" data-allow-outside-click="true" data-confirm-button-class="btn-success">Icon Success Alert</button>
            <button class="btn btn-warning mt-sweetalert" data-title="Sweet Alerts with Icons" data-message="Warning Icon" data-type="warning" data-allow-outside-click="true" data-confirm-button-class="btn-warning">Icon Warning Alert</button>
            <button class="btn btn-danger mt-sweetalert" data-title="Sweet Alerts with Icons" data-message="Error Icon" data-type="error" data-allow-outside-click="true" data-confirm-button-class="btn-danger">Icon Error Alert</button>
            <button class="btn btn-info mt-sweetalert" data-title="Sweet Alerts with Icons" data-message="Info Icon" data-type="info" data-allow-outside-click="true" data-confirm-button-class="btn-info">Icon Info Alert</button>
            <h4 class="mt-sweetalert-title">Sweet Alert Samples with Custom Buttons</h4>
            <button class="btn btn-default mt-sweetalert" data-title="Do you agree to the Terms and Conditions?" data-type="info" data-allow-outside-click="true" data-confirm-button-text='Yes, I agree'
                data-confirm-button-class="btn-info">Custom Confirm Button</button>
            <button class="btn btn-warning mt-sweetalert" data-title="Do you agree to the Terms and Conditions?" data-type="error" data-allow-outside-click="true" data-show-confirm-button="false" data-show-cancel-button="true"
                data-cancel-button-class="btn-danger" data-cancel-button-text='No, I do not agree'>Custom Cancel Button</button>
            <button class="btn btn-primary mt-sweetalert" data-title="Do you agree to the Terms and Conditions?" data-type="warning" data-allow-outside-click="true" data-show-confirm-button="true" data-show-cancel-button="true"
                data-cancel-button-class="btn-danger" data-cancel-button-text='No, I do not agree' data-confirm-button-text='Yes, I agree' data-confirm-button-class="btn-info">Custom Confirm & Cancel Button</button>
            <h4 class="mt-sweetalert-title">Sweet Alert Samples with Confimation Message</h4>
            <button class="btn btn-default mt-sweetalert" data-title="Do you agree to the Terms and Conditions?" data-message="Duis mollis, est non commodo luctus, nisi erat porttitor ligula, mattis consectetur purus sit amet eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum."
                data-type="info" data-show-confirm-button="true" data-confirm-button-class="btn-success" data-show-cancel-button="true" data-cancel-button-class="btn-default" data-close-on-confirm="false" data-close-on-cancel="false" data-confirm-button-text='Yes, I agree'
                data-cancel-button-text='No, I disagree' data-popup-title-success="Thank you" data-popup-message-success="You have agreed to our Terms and Conditions" data-popup-title-cancel="Cancelled" data-popup-message-cancel="You have disagreed to our Terms and Conditions">Agree to Terms & Conditions</button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bubble font-blue"></i>
                        <span class="caption-subject font-blue bold uppercase">Bootstrap Sweet Alerts on Circle Buttons</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a class="btn blue btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;"> Option 1</a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="javascript:;">Option 2</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Option 3</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Option 4</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <h4>Solid Circle Buttons</h4>
                    <button class="btn btn-default btn-circle mt-sweetalert" data-title="Sweet Alerts" data-message="Beautiful popup alerts" data-allow-outside-click="true" data-confirm-button-class="btn-default">Default Alert</button>
                    <button class="btn btn-primary btn-circle mt-sweetalert" data-title="Sweet Alerts" data-message="Beautiful popup alerts" data-allow-outside-click="true" data-confirm-button-class="btn-primary">Primary Alert</button>
                    <button class="btn btn-info btn-circle mt-sweetalert" data-title="Sweet Alerts" data-message="Beautiful popup alerts" data-allow-outside-click="true" data-confirm-button-class="btn-info">Info Alert</button>
                    <button class="btn btn-warning btn-circle mt-sweetalert" data-title="Sweet Alerts" data-message="Beautiful popup alerts" data-allow-outside-click="true" data-confirm-button-class="btn-warning">Warning Alert</button>
                    <button class="btn btn-danger btn-circle mt-sweetalert" data-title="Sweet Alerts" data-message="Beautiful popup alerts" data-allow-outside-click="true" data-confirm-button-class="btn-danger">Danger Alert</button>
                    <button class="btn btn-success btn-circle mt-sweetalert" data-title="Sweet Alerts" data-message="Beautiful popup alerts" data-allow-outside-click="true" data-confirm-button-class="btn-success">Success Alert</button>
                    <h4>Outline Circle Buttons</h4>
                    <button class="btn btn-circle green-haze btn-outline sbold uppercase mt-sweetalert" data-title="Sweet Alerts with Icons" data-message="Success Icon" data-type="success" data-allow-outside-click="true"
                        data-confirm-button-class="btn-success">Icon Success Alert</button>
                    <button class="btn yellow-lemon btn-circle btn-outline sbold uppercase mt-sweetalert" data-title="Sweet Alerts with Icons" data-message="Warning Icon" data-type="warning" data-allow-outside-click="true"
                        data-confirm-button-class="btn-warning">Icon Warning Alert</button>
                    <button class="btn red btn-circle btn-outline sbold uppercase mt-sweetalert" data-title="Sweet Alerts with Icons" data-message="Error Icon" data-type="error" data-allow-outside-click="true"
                        data-confirm-button-class="btn-danger">Icon Error Alert</button>
                    <button class="btn blue btn-circle btn-outline sbold uppercase mt-sweetalert" data-title="Sweet Alerts with Icons" data-message="Info Icon" data-type="info" data-allow-outside-click="true"
                        data-confirm-button-class="btn-info">Icon Info Alert</button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bubble font-red"></i>
                        <span class="caption-subject font-red bold uppercase">Bootstrap Sweet Alerts on Text</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a class="btn red btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;"> Option 1</a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="javascript:;">Option 2</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Option 3</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Option 4</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <h4>Standard Text Link</h4>
                    <a href="javascript:;" class="mt-sweetalert" data-title="Sweet Alerts" data-message="Beautiful popup alerts" data-allow-outside-click="true" data-confirm-button-class="btn-default">Standard Link</a>
                    <a href="javascript:;" class="bold mt-sweetalert" data-title="Sweet Alerts" data-message="Beautiful popup alerts" data-allow-outside-click="true" data-confirm-button-class="btn-primary">Bold Link</a>
                    <a href="javascript:;" class="mt-sweetalert mt-intalic" data-title="Sweet Alerts" data-message="Beautiful popup alerts" data-allow-outside-click="true" data-confirm-button-class="btn-info">Italic Link</a>
                    <a href="javascript:;" class="mt-sweetalert mt-italic bold" data-title="Sweet Alerts" data-message="Beautiful popup alerts" data-allow-outside-click="true" data-confirm-button-class="btn-warning">Mixed Text Link</a>
                    <h4 class="mt-sweetalert-title">Colored Text Link</h4>
                    <a href="javascript:;" class="mt-sweetalert font-red" data-title="Sweet Alerts" data-message="Beautiful popup alerts" data-allow-outside-click="true" data-confirm-button-class="btn-danger"
                        data-type="error">Red Text</a>
                    <a href="javascript:;" class="bold font-green mt-sweetalert" data-title="Sweet Alerts" data-message="Beautiful popup alerts" data-allow-outside-click="true" data-confirm-button-class="btn-primary" data-type="success">Green Bold Link</a>
                    <a href="javascript:;" class="mt-sweetalert font-blue mt-intalic" data-title="Sweet Alerts" data-message="Beautiful popup alerts" data-allow-outside-click="true" data-confirm-button-class="btn-info"
                        data-type="info">Blue Italic Link</a>
                    <a href="javascript:;" class="mt-sweetalert font-purple mt-italic bold" data-title="Sweet Alerts" data-message="Beautiful popup alerts" data-allow-outside-click="true" data-confirm-button-class="btn-warning"
                        data-type="warning">Purple Mixed Text Link</a>
                    <h4 class="mt-sweetalert-title">Regular Text</h4>
                    <p class="mt-sweetalert" data-title="Sweet Alerts with Icons" data-message="Success Icon" data-type="success" data-allow-outside-click="true" data-confirm-button-class="btn-success">Icon Success Alert Pop up on regular text. Please click text.</p>
                    <p class="mt-sweetalert" data-title="Sweet Alerts with Icons" data-message="Warning Icon" data-type="warning" data-allow-outside-click="true" data-confirm-button-class="btn-warning">It can be placed on any text paragraph. Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis,
                        nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
