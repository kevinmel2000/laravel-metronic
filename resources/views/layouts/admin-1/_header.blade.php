
<title>{{ config('app.name', 'Laravel') }} | Admin-1 | @yield('title')</title>

<meta name="description" content="Laravel Metronic. Combining the power of Laravel and Metronic.">
<meta name="author" content="R. Kukuh">

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}">
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
@stack('page-level-plugins-header')
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME GLOBAL STYLES -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/global/css/components.min.css') }}" id="style_components">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/global/css/plugins.min.css') }}">
<!-- END THEME GLOBAL STYLES -->

<!-- BEGIN THEME LAYOUT STYLES -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/layouts/layout/css/layout.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/layouts/layout/css/themes/darkblue.min.css') }}" id="style_color">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/layouts/layout/css/custom.min.css') }}">
<!-- END THEME LAYOUT STYLES -->

<!-- BEGIN PAGE LEVEL STYLES -->
@stack('page-level-styles')
<!-- END PAGE LEVEL STYLES -->

<link rel="shortcut icon" href="favicon.ico">
