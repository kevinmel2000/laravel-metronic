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

        <title>{{ config('app.name', 'Laravel') }} | User Login #2</title>

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
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/select2/css/select2.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}">
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN THEME GLOBAL STYLES -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/css/components.min.css') }}" id="style_components">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/css/plugins.min.css') }}">
        <!-- END THEME GLOBAL STYLES -->

        <!-- BEGIN PAGE LEVEL STYLES -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/css/login-3.min.css') }}">
        <!-- END PAGE LEVEL STYLES -->

        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->

        <link rel="shortcut icon" href="favicon.ico">
    </head>
    <body class=" login">

        <div class="logo">
            <a href="index.html">
                <img src="../assets/pages/img/logo-big.png" alt="">
            </a>
        </div>

        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="index.html" method="post">
                <h3 class="form-title">Login to your account</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter any username and password. </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password">
                    </div>
                </div>
                <div class="form-actions">
                    <label class="rememberme mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" value="1"> Remember me
                        <span></span>
                    </label>
                    <button type="submit" class="btn green pull-right"> Login </button>
                </div>
                <div class="login-options">
                    <h4>Or login with</h4>
                    <ul class="social-icons">
                        <li>
                            <a class="facebook" data-original-title="facebook" href="javascript:;"> </a>
                        </li>
                        <li>
                            <a class="twitter" data-original-title="Twitter" href="javascript:;"> </a>
                        </li>
                        <li>
                            <a class="googleplus" data-original-title="Goole Plus" href="javascript:;"> </a>
                        </li>
                        <li>
                            <a class="linkedin" data-original-title="Linkedin" href="javascript:;"> </a>
                        </li>
                    </ul>
                </div>
                <div class="forget-password">
                    <h4>Forgot your password ?</h4>
                    <p> no worries, click
                        <a href="javascript:;" id="forget-password"> here </a> to reset your password. </p>
                </div>
                <div class="create-account">
                    <p> Don't have an account yet ?&nbsp;
                        <a href="javascript:;" id="register-btn"> Create an account </a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->

            <!-- BEGIN FORGOT PASSWORD FORM -->
            <form class="forget-form" action="index.html" method="post">
                <h3>Forget Password ?</h3>
                <p> Enter your e-mail address below to reset your password. </p>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-envelope"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn grey-salsa btn-outline"> Back </button>
                    <button type="submit" class="btn green pull-right"> Submit </button>
                </div>
            </form>
            <!-- END FORGOT PASSWORD FORM -->

            <!-- BEGIN REGISTRATION FORM -->
            <form class="register-form" action="index.html" method="post">
                <h3>Sign Up</h3>
                <p> Enter your personal details below: </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Full Name</label>
                    <div class="input-icon">
                        <i class="fa fa-font"></i>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="Full Name" name="fullname">
                    </div>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <div class="input-icon">
                        <i class="fa fa-envelope"></i>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Address</label>
                    <div class="input-icon">
                        <i class="fa fa-check"></i>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="Address" name="address">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">City/Town</label>
                    <div class="input-icon">
                        <i class="fa fa-location-arrow"></i>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="City/Town" name="city">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Country</label>
                    <select name="country" id="country_list" class="select2 form-control">
                        <option value=""></option>
                        <option value="AF">Afghanistan</option>
                        <option value="AL">Albania</option>
                        <option value="...">...</option>
                    </select>
                </div>
                <p> Enter your account details below: </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                    <div class="controls">
                        <div class="input-icon">
                            <i class="fa fa-check"></i>
                            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="tnc"> I agree to the
                        <a href="javascript:;">Terms of Service </a> &amp;
                        <a href="javascript:;">Privacy Policy </a>
                        <span></span>
                    </label>
                    <div id="register_tnc_error"> </div>
                </div>
                <div class="form-actions">
                    <button id="register-back-btn" type="button" class="btn grey-salsa btn-outline"> Back </button>
                    <button type="submit" id="register-submit-btn" class="btn green pull-right"> Sign Up </button>
                </div>
            </form>
            <!-- END REGISTRATION FORM -->
        </div>

        <div class="copyright"> 2017 © R.Kukuh</div>

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
        <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}"></script>
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script type="text/javascript" src="{{ asset('assets/global/scripts/app.min.js') }}"></script>
        <!-- END THEME GLOBAL SCRIPTS -->

        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script type="text/javascript" src="{{ asset('assets/pages/scripts/login.min.js') }}"></script>
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
