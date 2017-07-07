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

        <title>{{ config('app.name', 'Laravel') }} | Admin-1 | 404 #2</title>

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
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/css/error.min.css') }}">
        <!-- END PAGE LEVEL STYLES -->

        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->

        <link rel="shortcut icon" href="favicon.ico">
    </head>
    <body class=" page-500-full-page">
        <div class="row">
            <div class="col-md-12 page-500">
                <div class=" number font-red"> 500 </div>
                <div class=" details">
                    <h3>Oops! Something went wrong.</h3>
                    <p> We are fixing it! Please come back in a while.</p>
                    <p><a href="index.html" class="btn red btn-outline"> Return home </a></p>
                </div>
            </div>
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
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script type="text/javascript" src="{{ asset('assets/global/scripts/app.min.js') }}"></script>
        <!-- END THEME GLOBAL SCRIPTS -->

        <!-- BEGIN PAGE LEVEL SCRIPTS -->
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
