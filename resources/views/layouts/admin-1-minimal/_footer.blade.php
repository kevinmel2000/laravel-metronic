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
@stack('page-level-plugins-footer')
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script type="text/javascript" src="{{ asset('assets/global/scripts/app.min.js') }}"></script>
<!-- END THEME GLOBAL SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
@stack('page-level-scripts')
<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script type="text/javascript" src="{{ asset('assets/layouts/layout/scripts/layout.min.js') }}"></script>
<!-- END THEME LAYOUT SCRIPTS -->
