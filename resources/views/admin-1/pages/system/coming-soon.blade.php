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

        <title>{{ config('app.name', 'Laravel') }} | User Lock Screen #1</title>

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
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/css/coming-soon.min.css') }}">
        <!-- END PAGE LEVEL STYLES -->

        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->

        <link rel="shortcut icon" href="favicon.ico">
    </head>
    <body class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 coming-soon-header">
                    <a class="brand" href="index.html">
                        <img src="{{ asset('assets/pages/img/logo-big.png') }}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 coming-soon-content">
                    <h1>Coming Soon!</h1>
                    <p> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi vehicula sem ut volutpat. Ut non libero magna fusce condimentum eleifend
                        enim a feugiat. </p>
                    <br>

                    <form class="form-inline" action="#">
                        <div class="input-group input-group-lg input-large">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn green" type="button"> Subscribe </button>
                            </span>
                        </div>
                    </form>

                    <ul class="social-icons margin-top-20">
                        <li>
                            <a href="javascript:;" data-original-title="Feed" class="rss"> </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-original-title="Facebook" class="facebook"> </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-original-title="Twitter" class="twitter"> </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-original-title="Goole Plus" class="googleplus"> </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-original-title="Pinterest" class="pintrest"> </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-original-title="Linkedin" class="linkedin"> </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-original-title="Vimeo" class="vimeo"> </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 coming-soon-countdown">
                    <div id="defaultCountdown"> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 coming-soon-footer"> 2014 &copy; Metronic. Admin Dashboard Template. </div>
            </div>
        </div>
        
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<script src="../assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/countdown/jquery.countdown.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/coming-soon.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
    </body>

</html>
