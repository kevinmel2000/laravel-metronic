@extends('layouts.admin-1.master')

@section('title', 'Inbox')

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Apps</span>
        </li>
    </ul>
@endsection

@section('content')
    <h1 class="page-title"> Inbox
        <small>user inbox</small>
    </h1>

    <div class="inbox">
        <div class="row">
            <div class="col-md-2">
                <div class="inbox-sidebar">
                    <a href="javascript:;" data-title="Compose" class="btn red compose-btn btn-block">
                        <i class="fa fa-edit"></i> Compose </a>
                    <ul class="inbox-nav">
                        <li class="active">
                            <a href="javascript:;" data-type="inbox" data-title="Inbox"> Inbox
                                <span class="badge badge-success">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-type="important" data-title="Inbox"> Important </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-type="sent" data-title="Sent"> Sent </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-type="draft" data-title="Draft"> Draft
                                <span class="badge badge-danger">8</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:;" class="sbold uppercase" data-title="Trash"> Trash
                                <span class="badge badge-info">23</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-type="inbox" data-title="Promotions"> Promotions
                                <span class="badge badge-warning">2</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-type="inbox" data-title="News"> News </a>
                        </li>
                    </ul>
                    <ul class="inbox-contacts">
                        <li class="divider margin-bottom-30"></li>
                        <li>
                            <a href="javascript:;">
                                <img class="contact-pic" src="../assets/pages/media/users/avatar4.jpg">
                                <span class="contact-name">Adam Stone</span>
                                <span class="contact-status bg-green"></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img class="contact-pic" src="../assets/pages/media/users/avatar2.jpg">
                                <span class="contact-name">Lisa Wong</span>
                                <span class="contact-status bg-red"></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img class="contact-pic" src="../assets/pages/media/users/avatar5.jpg">
                                <span class="contact-name">Nick Strong</span>
                                <span class="contact-status bg-green"></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img class="contact-pic" src="../assets/pages/media/users/avatar6.jpg">
                                <span class="contact-name">Anna Bold</span>
                                <span class="contact-status bg-yellow"></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img class="contact-pic" src="../assets/pages/media/users/avatar7.jpg">
                                <span class="contact-name">Richard Nilson</span>
                                <span class="contact-status bg-green"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <div class="inbox-body">
                    <div class="inbox-header">
                        <h1 class="pull-left">Inbox</h1>
                        <form class="form-inline pull-right" action="index.html">
                            <div class="input-group input-medium">
                                <input type="text" class="form-control" placeholder="Password">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn green">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="inbox-content"> </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page-level-plugins-header')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/fancybox/source/jquery.fancybox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css') }}">
@endpush

@push('page-level-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/apps/css/inbox.min.css') }}">
@endpush

@push('page-level-plugins-footer')
    <script type="text/javascript" src="{{ asset('assets/global/plugins/fancybox/source/jquery.fancybox.pack.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-file-upload/js/vendor/load-image.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-video.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js') }}"></script>
@endpush

@push('page-level-scripts')
    <script type="text/javascript">
        /* Personal enhancement (REQUIRED) */

        var app_inbox_url = "{{ route('admin-1.ajax.inbox-datalist') }}";
        var app_inbox_view = "{{ route('admin-1.ajax.inbox-view') }}";
    </script>
@endpush

@push('page-level-scripts')
    <script type="text/javascript" src="{{ asset('assets/apps/scripts/inbox.js') }}"></script>
@endpush

@push('page-level-scripts')
    <script>
        $('body').addClass('page-container-bg-solid page-sidebar-closed');
        $('ul.page-sidebar-menu').addClass('page-sidebar-menu-closed');
    </script>
@endpush
