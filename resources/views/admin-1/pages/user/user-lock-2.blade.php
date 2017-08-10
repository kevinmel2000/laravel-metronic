<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }} | Admin-1 | User Lock Screen #2</title>

        <meta name="description" content="Integration between Laravel framework and Metronic template">
        <meta name="author" content="R. Kukuh">

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}">
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN THEME GLOBAL STYLES -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/css/components.min.css') }}" id="style_components">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/css/plugins.min.css') }}">
        <!-- END THEME GLOBAL STYLES -->

        <!-- BEGIN PAGE LEVEL STYLES -->
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/css/lock-2.min.css') }}"> --}}
        <link rel="stylesheet" type="text/css" href="{{ mix('css/lock-2.min.css') }}">
        <!-- END PAGE LEVEL STYLES -->

        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->

        <link rel="shortcut icon" href="favicon.ico">
    </head>
    <body class="">
        <div class="page-lock">
            <div class="page-logo">
                <a class="brand" href="{{ route('admin-1.index') }}">
                    <img src="{{ asset('assets/pages/img/logo-big.png') }}" alt="logo">
                </a>
            </div>
            <div class="page-body">
                <img class="page-lock-img" src="{{ asset('assets/pages/media/profile/profile.jpg') }}" alt="">
                <div class="page-lock-info">
                    <h1>Bob Nilson</h1>
                    <span class="email"> bob@keenthemes.com </span>
                    <span class="locked"> Locked </span>

                    <form class="form-inline" action="{{ route('admin-1.index') }}" method="get">
                        <div class="input-group input-medium">
                            <input type="text" class="form-control" placeholder="Password">
                            <span class="input-group-btn">
                                <button type="submit" class="btn green icn-only">
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                        <div class="relogin">
                            <a href="login.html"> Not Bob Nilson ? </a>
                        </div>
                    </form>

                </div>
            </div>
            <div class="page-footer-custom"> 2017 © R.Kukuh </div>
        </div>

        <!--[if lt IE 9]>
        <script type="text/javascript" src="{{ asset('assets/global/plugins/respond.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/global/plugins/excanvas.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/global/plugins/ie8.fix.min.js') }}"></script>
        <![endif]-->

        <!-- BEGIN CORE PLUGINS -->
        <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/global/plugins/js.cookie.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery.blockui.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
        <!-- END CORE PLUGINS -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script type="text/javascript" src="{{ asset('assets/global/plugins/backstretch/jquery.backstretch.min.js') }}"></script>
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script type="text/javascript" src="{{ asset('assets/global/scripts/app.min.js') }}"></script>
        <!-- END THEME GLOBAL SCRIPTS -->

        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        {{-- <script type="text/javascript" src="{{ asset('assets/pages/scripts/lock-2.min.js') }}"></script> --}}
        <script type="text/javascript" src="{{ mix('js/lock-2.min.js') }}"></script>
        <!-- END PAGE LEVEL SCRIPTS -->

        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->

        <script>
            $(document).ready(function() {
                $('#clickmewow').click(function() {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
    </body>
</html>
