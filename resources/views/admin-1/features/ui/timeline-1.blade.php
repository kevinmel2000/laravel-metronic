@extends('layouts.admin-1.master')

@section('title', 'Timeline 1')

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
    <h1 class="page-title"> Timeline
        <small>multi-purpose bootstrap timeline demos</small>
    </h1>

    <div class="row">
        <div class="col-md-6">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-microphone font-green"></i>
                        <span class="caption-subject bold font-green uppercase"> Clear Timeline 1</span>
                        <span class="caption-helper">default option...</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                            <label class="btn red btn-outline btn-circle btn-sm active">
                                <input type="radio" name="options" class="toggle" id="option1">Settings</label>
                            <label class="btn  red btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Tools</label>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="timeline">
                        <!-- TIMELINE ITEM -->
                        <div class="timeline-item">
                            <div class="timeline-badge">
                                <img class="timeline-badge-userpic" src="{{ asset('assets/pages/media/users/avatar80_1.jpg') }}"> </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow"> </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <a href="javascript:;" class="timeline-body-title font-blue-madison">Andres Iniesta</a>
                                        <span class="timeline-body-time font-grey-cascade">Replied at 7:45 PM</span>
                                    </div>
                                    <div class="timeline-body-head-actions">
                                        <div class="btn-group">
                                            <button class="btn btn-circle green btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="javascript:;">Action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Another action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Something else here </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;">Separated link </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-body-content">
                                    <span class="font-grey-cascade"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                        tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </span>
                                </div>
                            </div>
                        </div>
                        <!-- END TIMELINE ITEM -->
                        <!-- TIMELINE ITEM -->
                        <div class="timeline-item">
                            <div class="timeline-badge">
                                <img class="timeline-badge-userpic" src="{{ asset('assets/pages/media/users/avatar80_2.jpg') }}"> </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow"> </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <a href="javascript:;" class="timeline-body-title font-blue-madison">Vanessa Bond</a>
                                        <span class="timeline-body-time font-grey-cascade">Posted new post at 5:10 PM</span>
                                    </div>
                                    <div class="timeline-body-head-actions"> </div>
                                </div>
                                <div class="timeline-body-content">
                                    <span class="font-grey-cascade">
                                        <p>
                                            <img class="timeline-body-img pull-right" src="{{ asset('assets/pages/media/blog/4.jpg') }}" alt=""> Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard
                                            greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi. coriander bitterleaf epazote radicchio shallot winter purslane collard. </p>
                                        <p> Coriander bitterleaf epazote radicchio shallot winter purslane collard. Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery
                                            coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi. </p>
                                        <p>
                                            <img class="timeline-body-img pull-left" src="{{ asset('assets/pages/media/blog/6.jpg') }}" alt=""> Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard
                                            greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi radicchio shallot winter purslane collard greens spring onion squash lentil.
                                            </p>
                                        <p> Coriander bitterleaf epazote radicchio shallot winter purslane collard. Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery
                                            coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi. </p>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- END TIMELINE ITEM -->
                        <!-- TIMELINE ITEM WITH GOOGLE MAP -->
                        <div class="timeline-item">
                            <div class="timeline-badge">
                                <img class="timeline-badge-userpic" src="{{ asset('assets/pages/media/users/avatar80_3.jpg') }}"> </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow"> </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <a href="javascript:;" class="timeline-body-title font-blue-madison">Carles Puyol</a>
                                        <span class="timeline-body-time font-grey-cascade">Added office location at 2:50 PM</span>
                                    </div>
                                    <div class="timeline-body-head-actions">
                                        <div class="btn-group">
                                            <button class="btn btn-circle btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="javascript:;">Action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Another action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Something else here </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;">Separated link </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-body-content">
                                    <div id="gmap_polygons" class="gmaps"> </div>
                                </div>
                            </div>
                        </div>
                        <!-- END TIMELINE ITEM WITH GOOGLE MAP -->
                        <!-- TIMELINE ITEM -->
                        <div class="timeline-item">
                            <div class="timeline-badge">
                                <div class="timeline-icon">
                                    <i class="icon-user-following font-green-haze"></i>
                                </div>
                            </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow"> </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <span class="timeline-body-alerttitle font-red-intense">You have new follower</span>
                                        <span class="timeline-body-time font-grey-cascade">at 11:00 PM</span>
                                    </div>
                                    <div class="timeline-body-head-actions">
                                        <div class="btn-group">
                                            <button class="btn btn-circle green btn-outline

           btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="javascript:;">Action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Another action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Something else here </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;">Separated link </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-body-content">
                                    <span class="font-grey-cascade"> You have new follower
                                        <a href="javascript:;">Ivan Rakitic</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- END TIMELINE ITEM -->
                        <!-- TIMELINE ITEM -->
                        <div class="timeline-item">
                            <div class="timeline-badge">
                                <img class="timeline-badge-userpic" src="{{ asset('assets/pages/media/users/avatar80_1.jpg') }}"> </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow"> </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <a href="javascript:;" class="timeline-body-title font-blue-madison">Andres Iniesta</a>
                                        <span class="timeline-body-time font-grey-cascade">Replied at 7:45 PM</span>
                                    </div>
                                    <div class="timeline-body-head-actions"> </div>
                                </div>
                                <div class="timeline-body-content">
                                    <span class="font-grey-cascade"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                        tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </span>
                                </div>
                            </div>
                        </div>
                        <!-- END TIMELINE ITEM -->
                        <!-- TIMELINE ITEM -->
                        <div class="timeline-item">
                            <div class="timeline-badge">
                                <img class="timeline-badge-userpic img-circle" src="{{ asset('assets/pages/media/users/avatar80_2.jpg') }}"> </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow"> </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <a href="javascript:;" class="timeline-body-title font-blue-madison">Vanessa Bond</a>
                                        <span class="timeline-body-time font-grey-cascade">Posted new post at 5:10 PM</span>
                                    </div>
                                    <div class="timeline-body-head-actions"> </div>
                                </div>
                                <div class="timeline-body-content">
                                    <span class="font-grey-cascade">
                                        <p>
                                            <img class="timeline-body-img pull-right" src="{{ asset('assets/pages/media/blog/4.jpg') }}" alt=""> Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard
                                            greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi. coriander bitterleaf epazote radicchio shallot winter purslane collard. </p>
                                        <p> Coriander bitterleaf epazote radicchio shallot winter purslane collard. Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery
                                            coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi. </p>
                                        <p>
                                            <img class="timeline-body-img pull-left" src="{{ asset('assets/pages/media/blog/6.jpg') }}" alt=""> Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard
                                            greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi radicchio shallot winter purslane collard greens spring onion squash lentil.
                                            </p>
                                        <p> Coriander bitterleaf epazote radicchio shallot winter purslane collard. Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery
                                            coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi. </p>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- END TIMELINE ITEM -->
                        <!-- TIMELINE ITEM -->
                        <div class="timeline-item">
                            <div class="timeline-badge">
                                <div class="timeline-icon">
                                    <i class="icon-docs font-red-intense"></i>
                                </div>
                            </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow"> </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <span class="timeline-body-alerttitle font-green-haze">Server Report</span>
                                        <span class="timeline-body-time font-grey-cascade">Yesterday at 11:00 PM</span>
                                    </div>
                                    <div class="timeline-body-head-actions">
                                        <div class="btn-group dropup">
                                            <button class="btn btn-circle red btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="javascript:;">Action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Another action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Something else here </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;">Separated link </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-body-content">
                                    <span class="font-grey-cascade"> Lorem ipsum dolore sit amet
                                        <a href="javascript:;">Ispect</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- END TIMELINE ITEM -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="portlet light portlet-fit bg-inverse ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-microphone font-red"></i>
                        <span class="caption-subject bold font-red uppercase"> Grey Timeline 1</span>
                        <span class="caption-helper">white bg...</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="timeline  white-bg ">
                        <!-- TIMELINE ITEM -->
                        <div class="timeline-item">
                            <div class="timeline-badge">
                                <img class="timeline-badge-userpic" src="{{ asset('assets/pages/media/users/avatar80_2.jpg') }}"> </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow"> </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <a href="javascript:;" class="timeline-body-title font-blue-madison">Lisa Strong</a>
                                        <span class="timeline-body-time font-grey-cascade">Replied at 17:45 PM</span>
                                    </div>
                                    <div class="timeline-body-head-actions">
                                        <div class="btn-group">
                                            <button class="btn btn-circle green btn-outline btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="javascript:;">Action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Another action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Something else here </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;">Separated link </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-body-content">
                                    <span class="font-grey-cascade"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut consectetuer adipiscing elit laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </span>
                                </div>
                            </div>
                        </div>
                        <!-- END TIMELINE ITEM -->
                        <!-- TIMELINE ITEM -->
                        <div class="timeline-item">
                            <div class="timeline-badge">
                                <img class="timeline-badge-userpic" src="{{ asset('assets/pages/media/users/avatar80_5.jpg') }}"> </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow"> </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <a href="javascript:;" class="timeline-body-title font-blue-madison">Vanessa Bond</a>
                                        <span class="timeline-body-time font-grey-cascade">Posted new post at 5:10 PM</span>
                                    </div>
                                    <div class="timeline-body-head-actions"> </div>
                                </div>
                                <div class="timeline-body-content">
                                    <span class="font-grey-cascade">
                                        <p>
                                            <img class="timeline-body-img pull-right" src="{{ asset('assets/pages/media/blog/6.jpg') }}" alt=""> Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard
                                            greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi. coriander bitterleaf epazote radicchio shallot winter purslane collard. </p>
                                        <p> Coriander bitterleaf epazote radicchio shallot winter purslane collard. Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery
                                            coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi. </p>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- END TIMELINE ITEM -->
                        <!-- TIMELINE ITEM WITH GOOGLE MAP -->
                        <div class="timeline-item">
                            <div class="timeline-badge">
                                <img class="timeline-badge-userpic" src="{{ asset('assets/pages/media/users/avatar80_7.jpg') }}"> </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow"> </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <a href="javascript:;" class="timeline-body-title font-blue-madison">Paul Kiton</a>
                                        <span class="timeline-body-time font-grey-cascade">Added office location at 2:50 PM</span>
                                    </div>
                                    <div class="timeline-body-head-actions">
                                        <div class="btn-group">
                                            <button class="btn btn-circle red btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="javascript:;">Action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Another action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Something else here </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;">Separated link </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-body-content">
                                    <div id="gmap_polygons" class="gmaps"> </div>
                                </div>
                            </div>
                        </div>
                        <!-- END TIMELINE ITEM WITH GOOGLE MAP -->
                        <!-- TIMELINE ITEM -->
                        <div class="timeline-item">
                            <div class="timeline-badge">
                                <div class="timeline-icon">
                                    <i class="icon-user-following font-green-haze"></i>
                                </div>
                            </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow"> </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <span class="timeline-body-alerttitle font-red-intense">You have new follower</span>
                                        <span class="timeline-body-time font-grey-cascade">at 11:00 PM</span>
                                    </div>
                                    <div class="timeline-body-head-actions">
                                        <div class="btn-group">
                                            <button class="btn btn-circle green btn-outline

           btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="javascript:;">Action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Another action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Something else here </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;">Separated link </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-body-content">
                                    <span class="font-grey-cascade"> You have new follower
                                        <a href="javascript:;">Ivan Rakitic</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- END TIMELINE ITEM -->
                        <!-- TIMELINE ITEM -->
                        <div class="timeline-item">
                            <div class="timeline-badge">
                                <img class="timeline-badge-userpic" src="{{ asset('assets/pages/media/users/avatar80_1.jpg') }}"> </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow"> </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <a href="javascript:;" class="timeline-body-title font-blue-madison">Andres Iniesta</a>
                                        <span class="timeline-body-time font-grey-cascade">Replied at 7:45 PM</span>
                                    </div>
                                    <div class="timeline-body-head-actions"> </div>
                                </div>
                                <div class="timeline-body-content">
                                    <span class="font-grey-cascade"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                        tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </span>
                                </div>
                            </div>
                        </div>
                        <!-- END TIMELINE ITEM -->
                        <!-- TIMELINE ITEM -->
                        <div class="timeline-item">
                            <div class="timeline-badge">
                                <img class="timeline-badge-userpic img-circle" src="{{ asset('assets/pages/media/users/avatar80_2.jpg') }}"> </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow"> </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <a href="javascript:;" class="timeline-body-title font-blue-madison">Vanessa Bond</a>
                                        <span class="timeline-body-time font-grey-cascade">Posted new post at 5:10 PM</span>
                                    </div>
                                    <div class="timeline-body-head-actions"> </div>
                                </div>
                                <div class="timeline-body-content">
                                    <span class="font-grey-cascade">
                                        <p>
                                            <img class="timeline-body-img pull-right" src="{{ asset('assets/pages/media/blog/4.jpg') }}" alt=""> Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard
                                            greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi. coriander bitterleaf epazote radicchio shallot winter purslane collard. </p>
                                        <p> Coriander bitterleaf epazote radicchio shallot winter purslane collard. Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery
                                            coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi. </p>
                                        <p>
                                            <img class="timeline-body-img pull-left" src="{{ asset('assets/pages/media/blog/6.jpg') }}" alt=""> Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard
                                            greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi radicchio shallot winter purslane collard greens spring onion squash lentil.
                                            </p>
                                        <p> Coriander bitterleaf epazote radicchio shallot winter purslane collard. Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery
                                            coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi. </p>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- END TIMELINE ITEM -->
                        <!-- TIMELINE ITEM -->
                        <div class="timeline-item">
                            <div class="timeline-badge">
                                <div class="timeline-icon">
                                    <i class="icon-docs font-red-intense"></i>
                                </div>
                            </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow"> </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <span class="timeline-body-alerttitle font-green-haze">Server Report</span>
                                        <span class="timeline-body-time font-grey-cascade">Yesterday at 11:00 PM</span>
                                    </div>
                                    <div class="timeline-body-head-actions">
                                        <div class="btn-group dropup">
                                            <button class="btn btn-circle red btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="javascript:;">Action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Another action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Something else here </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;">Separated link </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-body-content">
                                    <span class="font-grey-cascade"> Lorem ipsum dolore sit amet
                                        <a href="javascript:;">Ispect</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- END TIMELINE ITEM -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page-level-plugins-footer')
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="{{ asset('assets/global/plugins/gmaps/gmaps.min.js') }}"></script>
@endpush

@push('page-level-scripts')
    <script type="text/javascript" src="{{ asset('assets/apps/scripts/timeline.min.js') }}"></script>
@endpush
