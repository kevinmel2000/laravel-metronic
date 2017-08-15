@extends('layouts.admin-1.master')

@section('title', 'Buttons')

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
    <h1 class="page-title"> Buttons
        <small>metronic & bootstrap style buttons, dropdowns, dropdown buttons, icon buttons, social icons, toolbars and more</small>
    </h1>

    <div class="row">
        <div class="col-md-12">
            <div class="tabbable-line">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_1_1" data-toggle="tab">Square Buttons</a>
                    </li>
                    <li>
                        <a href="#tab_1_2" data-toggle="tab">Circle Buttons
                            <span class="label label-sm label-danger circle">new</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1_1">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- BEGIN BUTTONS PORTLET-->
                                <div class="portlet light tasks-widget bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <span class="caption-subject font-green-haze bold uppercase">Buttons</span>
                                            <span class="caption-helper">tasks summary...</span>
                                        </div>
                                        <div class="actions">
                                            <div class="btn-group">
                                                <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="i"></i> Option 1</a>
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
                                    <div class="portlet-body util-btn-margin-bottom-5">
                                        <div class="clearfix">
                                            <h4 class="block">Default Bootstrap Buttons(Customized to Match Theme Style)</h4>
                                            <!-- Standard gray button with gradient -->
                                            <button type="button" class="btn btn-default">Default</button>
                                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                            <button type="button" class="btn btn-primary">Primary</button>
                                            <!-- Indicates a successful or positive action -->
                                            <button type="button" class="btn btn-success">Success</button>
                                            <!-- Contextual button for informational alert messages -->
                                            <button type="button" class="btn btn-info">Info</button>
                                            <!-- Indicates caution should be taken with this action -->
                                            <button type="button" class="btn btn-warning">Warning</button>
                                            <!-- Indicates a dangerous or potentially negative action -->
                                            <button type="button" class="btn btn-danger">Danger</button>
                                            <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
                                            <button type="button" class="btn btn-link">Link</button>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Metronic Custom Buttons</h4>
                                            <p>
                                                <button type="button" class="btn default">Default</button>
                                                <button type="button" class="btn red">Red</button>
                                                <button type="button" class="btn blue">Blue</button>
                                                <button type="button" class="btn green">Green</button>
                                                <button type="button" class="btn yellow">Yellow</button>
                                                <button type="button" class="btn purple">Purple</button>
                                                <button type="button" class="btn dark">Dark</button>
                                            </p>
                                            <p>
                                                <button type="button" class="btn dark">Dark</button>
                                                <button type="button" class="btn red-mint">Red</button>
                                                <button type="button" class="btn blue-hoki">Blue</button>
                                                <button type="button" class="btn green-haze">Green</button>
                                                <button type="button" class="btn yellow-mint">Yellow</button>
                                                <button type="button" class="btn purple-sharp">Purple</button>
                                                <button type="button" class="btn grey-mint">Grey</button>
                                            </p>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Metronic Outline Buttons</h4>
                                            <p>
                                                <button type="button" class="btn default btn-outline">Default</button>
                                                <button type="button" class="btn red btn-outline">Red</button>
                                                <button type="button" class="btn blue btn-outline">Blue</button>
                                                <button type="button" class="btn green btn-outline">Green</button>
                                                <button type="button" class="btn yellow btn-outline">Yellow</button>
                                                <button type="button" class="btn purple btn-outline">Purple</button>
                                                <button type="button" class="btn dark btn-outline">Dark</button>
                                            </p>
                                            <p>
                                                <button type="button" class="btn dark btn-outline sbold uppercase">Dark</button>
                                                <button type="button" class="btn red-mint btn-outline sbold uppercase">Red</button>
                                                <button type="button" class="btn blue-hoki btn-outline sbold uppercase">Blue</button>
                                                <button type="button" class="btn green-haze btn-outline sbold uppercase">Green</button>
                                                <button type="button" class="btn yellow-mint btn-outline sbold uppercase">Yellow</button>
                                                <button type="button" class="btn purple-sharp btn-outline sbold uppercase">Purple</button>
                                                <button type="button" class="btn grey-mint btn-outline sbold uppercase">Grey</button>
                                            </p>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">More Button Colors(go to
                                                <a href="ui_colors.html"> ui_colors.html </a> for more colors) </h4>
                                            <button type="button" class="btn blue-hoki">Blue Hoki</button>
                                            <button type="button" class="btn blue-madison">Blue Madison</button>
                                            <button type="button" class="btn green-meadow">Green Meadow</button>
                                            <button type="button" class="btn red-sunglo">Red Sunglo</button>
                                            <button type="button" class="btn yellow-crusta">Yellow Crusta</button>
                                            <button type="button" class="btn purple-plum">Purple Plum</button>
                                            <button type="button" class="btn grey-cascade">Grey Cascade</button>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Button Stripe</h4>
                                            <a href="javascript:;" class="btn default red-stripe"> Red </a>
                                            <a href="javascript:;" class="btn default blue-stripe"> Blue </a>
                                            <a href="javascript:;" class="btn default green-stripe"> Green </a>
                                            <a href="javascript:;" class="btn default yellow-stripe"> Yellow </a>
                                            <a href="javascript:;" class="btn default purple-stripe"> Purple </a>
                                            <a href="javascript:;" class="btn default green-stripe"> Green </a>
                                            <a href="javascript:;" class="btn default dark-stripe"> Dark </a>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Disabled</h4>
                                            <a href="javascript:;" class="btn default disabled"> Default </a>
                                            <a href="javascript:;" class="btn red disabled"> Red </a>
                                            <a href="javascript:;" class="btn blue disabled"> Blue </a>
                                            <a href="javascript:;" class="btn green disabled"> Green </a>
                                            <a href="javascript:;" class="btn yellow disabled"> Yellow </a>
                                            <a href="javascript:;" class="btn purple disabled"> Purple </a>
                                            <a href="javascript:;" class="btn dark disabled"> Dark </a>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Button Sizes</h4>
                                            <button type="button" class="btn default btn-lg">Large button</button>
                                            <button type="button" class="btn red">Default button</button>
                                            <button type="button" class="btn blue btn-sm">Small button</button>
                                            <button type="button" class="btn green btn-xs">Extra small button</button>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Button Tags</h4>
                                            <a href="javascript:;" class="btn default"> Link </a>
                                            <button class="btn default">Button</button>
                                            <input type="button" class="btn default" value="Input">
                                            <input type="submit" class="btn default" value="Submit"> </div>
                                        <div class="clearfix">
                                            <h4 class="block">Block Buttons</h4>
                                            <a href="javascript:;" class="btn default btn-block"> Link </a>
                                            <button class="btn blue btn-block">Button</button>
                                            <input type="button" class="btn red btn-block" value="Input">
                                            <input type="submit" class="btn purple btn-block" value="Submit">
                                            <button class="btn blue btn-block btn-outline ">Button</button>
                                            <input type="button" class="btn red btn-outline btn-block" value="Input">
                                            <input type="submit" class="btn purple btn-outline  btn-block" value="Submit">
                                            <button class="btn yellow-mint btn-block btn-outline sbold uppercase">Button</button>
                                            <input type="button" class="btn red-mint btn-outline btn-block sbold uppercase" value="Input">
                                            <input type="submit" class="btn green-sharp btn-outline  btn-block sbold uppercase" value="Submit"> </div>
                                    </div>
                                </div>
                                <!-- END BUTTONS PORTLET-->
                                <!-- BEGIN BUTTONS WITH ICONS PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption">
                                            <i class="icon-globe font-green-sharp"></i>
                                            <span class="caption-subject font-green-sharp bold uppercase">Iconic</span>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#dropdown_fontawesome" data-toggle="tab"> Fontawesome </a>
                                            </li>
                                            <li>
                                                <a href="#dropdown_simplelineicons" data-toggle="tab"> Simple Line</a>
                                            </li>
                                            <li>
                                                <a href="#dropdown_glyphicon" data-toggle="tab"> Glyphicon </a>
                                            </li>
                                            <li>
                                                <a href="#buttons_metro" data-toggle="tab"> Metro </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="portlet-body util-btn-margin-bottom-5">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="dropdown_fontawesome">
                                                <div class="clearfix">
                                                    <h4 class="block">Large Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-lg default"> Default
                                                        <i class="fa fa-user"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-lg red"> Red
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-lg blue">
                                                        <i class="fa fa-file-o"></i> Blue </a>
                                                    <a href="javascript:;" class="btn btn-lg green"> Green
                                                        <i class="fa fa-font"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-lg yellow"> Yellow
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-lg purple">
                                                        <i class="fa fa-times"></i> Purple </a>
                                                    <a href="javascript:;" class="btn btn-lg green"> Green
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-lg grey-cascade"> Dark
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Default Buttons</h4>
                                                    <a href="javascript:;" class="btn default"> Default
                                                        <i class="fa fa-user"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn red"> Red
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn blue">
                                                        <i class="fa fa-file-o"></i> Blue </a>
                                                    <a href="javascript:;" class="btn green"> Green
                                                        <i class="fa fa-font"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn yellow"> Yellow
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn purple">
                                                        <i class="fa fa-times"></i> Purple </a>
                                                    <a href="javascript:;" class="btn green"> Green
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn grey-cascade"> Dark
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Small Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-sm default"> Default
                                                        <i class="fa fa-user"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-sm red"> Red
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-sm blue">
                                                        <i class="fa fa-file-o"></i> Blue </a>
                                                    <a href="javascript:;" class="btn btn-sm green"> Green
                                                        <i class="fa fa-font"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-sm yellow"> Yellow
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-sm purple">
                                                        <i class="fa fa-times"></i> Purple </a>
                                                    <a href="javascript:;" class="btn btn-sm green"> Green
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-sm grey-cascade"> Dark
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Extra Small</h4>
                                                    <a href="javascript:;" class="btn btn-xs default"> Default
                                                        <i class="fa fa-user"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-xs red"> Red
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-xs blue">
                                                        <i class="fa fa-file-o"></i> Blue </a>
                                                    <a href="javascript:;" class="btn btn-xs green"> Green
                                                        <i class="fa fa-font"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-xs yellow"> Yellow
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-xs purple">
                                                        <i class="fa fa-times"></i> Purple </a>
                                                    <a href="javascript:;" class="btn btn-xs green"> Green
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-xs grey-cascade"> Dark
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Icon Only Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-icon-only default">
                                                        <i class="fa fa-user"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only red">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only blue">
                                                        <i class="fa fa-file-o"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only green">
                                                        <i class="fa fa-font"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only yellow">
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only purple">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only green">
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only grey-cascade">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="dropdown_glyphicon">
                                                <div class="clearfix">
                                                    <h4 class="block">Large Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-lg default"> Default
                                                        <span class="glyphicon glyphicon-cog"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-lg red"> Red
                                                        <span class="glyphicon glyphicon-calendar"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-lg blue">
                                                        <span class="glyphicon glyphicon-font"> </span> Blue </a>
                                                    <a href="javascript:;" class="btn btn-lg green"> Green
                                                        <span class="glyphicon glyphicon-gift"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-lg yellow"> Yellow
                                                        <span class="glyphicon glyphicon-pencil"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-lg purple">
                                                        <span class="glyphicon glyphicon-tag"> </span> Purple </a>
                                                    <a href="javascript:;" class="btn btn-lg green"> Green
                                                        <span class="glyphicon glyphicon-user"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-lg grey-cascade"> Dark
                                                        <span class="glyphicon glyphicon-link"> </span>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Default Buttons</h4>
                                                    <a href="javascript:;" class="btn default"> Default
                                                        <span class="glyphicon glyphicon-cog"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn red"> Red
                                                        <span class="glyphicon glyphicon-calendar"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn blue">
                                                        <span class="glyphicon glyphicon-font"> </span> Blue </a>
                                                    <a href="javascript:;" class="btn green"> Green
                                                        <span class="glyphicon glyphicon-gift"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn yellow"> Yellow
                                                        <span class="glyphicon glyphicon-pencil"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn purple">
                                                        <span class="glyphicon glyphicon-tag"> </span> Purple </a>
                                                    <a href="javascript:;" class="btn green"> Green
                                                        <span class="glyphicon glyphicon-user"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn grey-cascade"> Dark
                                                        <span class="glyphicon glyphicon-link"> </span>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Small Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-sm default"> Default
                                                        <span class="glyphicon glyphicon-cog"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-sm red"> Red
                                                        <span class="glyphicon glyphicon-calendar"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-sm blue">
                                                        <span class="glyphicon glyphicon-font"> </span> Blue </a>
                                                    <a href="javascript:;" class="btn btn-sm green"> Green
                                                        <span class="glyphicon glyphicon-gift"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-sm yellow"> Yellow
                                                        <span class="glyphicon glyphicon-pencil"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-sm purple">
                                                        <span class="glyphicon glyphicon-tag"> </span> Purple </a>
                                                    <a href="javascript:;" class="btn btn-sm green"> Green
                                                        <span class="glyphicon glyphicon-user"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-sm grey-cascade"> Dark
                                                        <span class="glyphicon glyphicon-link"> </span>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Extra Small Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-sm default"> Default
                                                        <i class="glyphicon glyphicon-cog"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-xs red"> Red
                                                        <i class="glyphicon glyphicon-calendar"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-xs blue">
                                                        <i class="glyphicon glyphicon-font"> </i> Blue </a>
                                                    <a href="javascript:;" class="btn btn-xs green"> Green
                                                        <i class="glyphicon glyphicon-gift"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-xs yellow"> Yellow
                                                        <i class="glyphicon glyphicon-pencil"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-xs purple">
                                                        <i class="glyphicon glyphicon-tag"> </i> Purple </a>
                                                    <a href="javascript:;" class="btn btn-xs green"> Green
                                                        <i class="glyphicon glyphicon-user"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-xs grey-cascade"> Dark
                                                        <i class="glyphicon glyphicon-link"> </i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Icon Only Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-icon-only default">
                                                        <i class="glyphicon glyphicon-cog"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only red">
                                                        <i class="glyphicon glyphicon-calendar"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only blue">
                                                        <i class="glyphicon glyphicon-font"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only green">
                                                        <i class="glyphicon glyphicon-gift"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only yellow">
                                                        <i class="glyphicon glyphicon-pencil"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only purple">
                                                        <i class="glyphicon glyphicon-tag"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only green">
                                                        <i class="glyphicon glyphicon-user"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only grey-cascade">
                                                        <i class="glyphicon glyphicon-link"> </i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="dropdown_simplelineicons">
                                                <div class="clearfix">
                                                    <h4 class="block">Large Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-lg default"> Default
                                                        <i class="icon-social-dribbble"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-lg red"> Red
                                                        <i class="icon-crop"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-lg blue">
                                                        <i class="icon-screen-desktop"> </i> Blue </a>
                                                    <a href="javascript:;" class="btn btn-lg green"> Green
                                                        <i class="icon-badge"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-lg yellow"> Yellow
                                                        <i class="icon-anchor"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-lg purple">
                                                        <i class="icon-bell"> </i> Purple </a>
                                                    <a href="javascript:;" class="btn btn-lg green"> Green
                                                        <i class="icon-present"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-lg grey-cascade"> Dark
                                                        <i class="icon-pin"> </i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Default Buttons</h4>
                                                    <a href="javascript:;" class="btn default"> Default
                                                        <i class="icon-social-dribbble"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn red"> Red
                                                        <i class="icon-crop"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn blue">
                                                        <i class="icon-screen-desktop"> </i> Blue </a>
                                                    <a href="javascript:;" class="btn green"> Green
                                                        <i class="icon-badge"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn yellow"> Yellow
                                                        <i class="icon-anchor"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn purple">
                                                        <i class="icon-bell"> </i> Purple </a>
                                                    <a href="javascript:;" class="btn green"> Green
                                                        <i class="icon-present"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn grey-cascade"> Dark
                                                        <i class="icon-pin"> </i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Small Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-sm default"> Default
                                                        <i class="icon-social-dribbble"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-sm red"> Red
                                                        <i class="icon-crop"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-sm blue">
                                                        <i class="icon-screen-desktop"> </i> Blue </a>
                                                    <a href="javascript:;" class="btn btn-sm green"> Green
                                                        <i class="icon-badge"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-sm yellow"> Yellow
                                                        <i class="icon-anchor"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-sm purple">
                                                        <i class="icon-bell"> </i> Purple </a>
                                                    <a href="javascript:;" class="btn btn-sm green"> Green
                                                        <i class="icon-present"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-sm grey-cascade"> Dark
                                                        <i class="icon-pin"> </i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Extra Small Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-sm default"> Default
                                                        <i class="icon-social-dribbble"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-xs red"> Red
                                                        <i class="icon-crop"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-xs blue">
                                                        <i class="icon-screen-desktop"> </i> Blue </a>
                                                    <a href="javascript:;" class="btn btn-xs green"> Green
                                                        <i class="icon-badge"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-xs yellow"> Yellow
                                                        <i class="icon-anchor"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-xs purple">
                                                        <i class="icon-bell"> </i> Purple </a>
                                                    <a href="javascript:;" class="btn btn-xs green"> Green
                                                        <i class="icon-present"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-xs grey-cascade"> Dark
                                                        <i class="icon-pin"> </i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Icon Only Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-icon-only default">
                                                        <i class="icon-social-dribbble"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only red">
                                                        <i class="icon-crop"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only blue">
                                                        <i class="icon-screen-desktop"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only green">
                                                        <i class="icon-badge"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only yellow">
                                                        <i class="icon-anchor"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only purple">
                                                        <i class="icon-bell"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only green">
                                                        <i class="icon-present"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only grey-cascade">
                                                        <i class="icon-pin"> </i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="tab-pane " id="buttons_metro">
                                                <div class="clearfix">
                                                    <h4 class="block">Navigation Large Icons Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-lg default m-icon-big"> Submit
                                                        <i class="m-icon-big-swapleft"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-lg green m-icon-big"> Submit
                                                        <i class="m-icon-big-swapright m-icon-white"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-lg blue m-icon-big"> Submit
                                                        <i class="m-icon-big-swapdown m-icon-white"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-lg dark m-icon-big"> Submit
                                                        <i class="m-icon-big-swapup m-icon-white"></i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Navigation Large Icons Only Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-lg default m-icon-big m-icon-only">
                                                        <i class="m-icon-big-swapleft"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-lg green m-icon-big m-icon-only">
                                                        <i class="m-icon-big-swapright m-icon-white"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-lg blue m-icon-big m-icon-only">
                                                        <i class="m-icon-big-swapdown m-icon-white"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-lg dark m-icon-big m-icon-only">
                                                        <i class="m-icon-big-swapup m-icon-white"></i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Navigation Block Large Icons</h4>
                                                    <button class="btn blue btn-block btn-lg m-icon-big">Button
                                                        <i class="m-icon-big-swapright m-icon-white"></i>
                                                    </button>
                                                    <a href="javascript:;" class="btn green btn-block btn-lg m-icon-big"> Link
                                                        <i class="m-icon-big-swapright m-icon-white"></i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Navigation Defualt Icons Buttons</h4>
                                                    <a href="javascript:;" class="btn default m-icon"> Submit
                                                        <i class="m-icon-swapleft"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn green m-icon"> Submit
                                                        <i class="m-icon-swapright m-icon-white"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn blue m-icon"> Submit
                                                        <i class="m-icon-swapdown m-icon-white"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn dark m-icon"> Submit
                                                        <i class="m-icon-swapup m-icon-white"></i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Navigation Defualt Icons Only Buttons</h4>
                                                    <a href="javascript:;" class="btn default m-icon m-icon-only">
                                                        <i class="m-icon-swapleft"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn green m-icon m-icon-only">
                                                        <i class="m-icon-swapright m-icon-white"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn blue m-icon m-icon-only">
                                                        <i class="m-icon-swapdown m-icon-white"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn dark m-icon m-icon-only">
                                                        <i class="m-icon-swapup m-icon-white"></i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Navigation Block Defualt Icons</h4>
                                                    <button class="btn blue btn-block m-icon">Button
                                                        <i class="m-icon-swapright m-icon-white"></i>
                                                    </button>
                                                    <a href="javascript:;" class="btn green btn-block m-icon"> Link
                                                        <i class="m-icon-swapright m-icon-white"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END BUTTONS WITH ICONS PORTLET-->
                                <!-- BEGIN BLOCK BUTTONS PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green-sharp"></i>
                                            <span class="caption-subject font-green-sharp bold uppercase">Font Awesome Styled Buttons</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-group"></i>
                                            <div> Users </div>
                                            <span class="badge badge-danger"> 2 </span>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-barcode"></i>
                                            <div> Products </div>
                                            <span class="badge badge-success"> 4 </span>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-bar-chart-o"></i>
                                            <div> Reports </div>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-sitemap"></i>
                                            <div> Categories </div>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-calendar"></i>
                                            <div> Calendar </div>
                                            <span class="badge badge-success"> 4 </span>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-envelope"></i>
                                            <div> Inbox </div>
                                            <span class="badge badge-info"> 12 </span>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-bullhorn"></i>
                                            <div> Notification </div>
                                            <span class="badge badge-danger"> 3 </span>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-map-marker"></i>
                                            <div> Locations </div>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-money">
                                                <i></i>
                                            </i>
                                            <div> Finance </div>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-plane"></i>
                                            <div> Projects </div>
                                            <span class="badge badge-info"> 21 </span>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-thumbs-up"></i>
                                            <div> Feedback </div>
                                            <span class="badge badge-info"> 2 </span>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-cloud"></i>
                                            <div> Servers </div>
                                            <span class="badge badge-danger"> 2 </span>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-globe"></i>
                                            <div> Regions </div>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-heart-o"></i>
                                            <div> Popularity </div>
                                            <span class="badge badge-info"> 221 </span>
                                        </a>
                                    </div>
                                </div>
                                <!-- BEGIN BLOCK BUTTONS PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green-sharp"></i>
                                            <span class="caption-subject font-green-sharp bold uppercase">List Social Icons(UL)</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body util-btn-margin-bottom-5">
                                        <ul class="social-icons">
                                            <li>
                                                <a href="javascript:;" data-original-title="amazon" class="amazon"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="behance" class="behance"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="blogger" class="blogger"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="deviantart" class="deviantart"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="dribbble" class="dribbble"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="dropbox" class="dropbox"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="facebook" class="facebook"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="forrst" class="forrst"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="github" class="github"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="Goole Plus" class="googleplus"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="jolicloud" class="jolicloud"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="last-fm" class="last-fm"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="linkedin" class="linkedin"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="picasa" class="picasa"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="pintrest" class="pintrest"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="rss" class="rss"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="skype" class="skype"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="spotify" class="spotify"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="stumbleupon" class="stumbleupon"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="tumblr" class="tumblr"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="twitter" class="twitter"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="vimeo" class="vimeo"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="wordpress" class="wordpress"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="xing" class="xing"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="yahoo" class="yahoo"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="youtube" class="youtube"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="vk" class="vk"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="instagram" class="instagram"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="reddit" class="reddit"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="aboutme" class="aboutme"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="flickr" class="flickr"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="foursquare" class="foursquare"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="gravatar" class="gravatar"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="klout" class="klout"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="myspace" class="myspace"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="quora" class="quora"> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- END BLOCK BUTTONS PORTLET-->
                                <!-- BEGIN BLOCK BUTTONS PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green-sharp"></i>
                                            <span class="caption-subject font-green-sharp bold uppercase">Inline Social Icons</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body util-btn-margin-bottom-5">
                                        <a href="javascript:;" data-original-title="amazon" class="social-icon amazon"> </a>
                                        <a href="javascript:;" data-original-title="behance" class="social-icon behance"> </a>
                                        <a href="javascript:;" data-original-title="blogger" class="social-icon blogger"> </a>
                                        <a href="javascript:;" data-original-title="deviantart" class="social-icon deviantart"> </a>
                                        <a href="javascript:;" data-original-title="dribbble" class="social-icon dribbble"> </a>
                                        <a href="javascript:;" data-original-title="dropbox" class="social-icon dropbox"> </a>
                                        <a href="javascript:;" data-original-title="facebook" class="social-icon facebook"> </a>
                                        <a href="javascript:;" data-original-title="forrst" class="social-icon forrst"> </a>
                                        <a href="javascript:;" data-original-title="github" class="social-icon github"> </a>
                                        <a href="javascript:;" data-original-title="Goole Plus" class="social-icon googleplus"> </a>
                                        <a href="javascript:;" data-original-title="jolicloud" class="social-icon jolicloud"> </a>
                                        <a href="javascript:;" data-original-title="last-fm" class="social-icon last-fm"> </a>
                                        <a href="javascript:;" data-original-title="linkedin" class="social-icon linkedin"> </a>
                                        <a href="javascript:;" data-original-title="picasa" class="social-icon picasa"> </a>
                                        <a href="javascript:;" data-original-title="pintrest" class="social-icon pintrest"> </a>
                                        <a href="javascript:;" data-original-title="rss" class="social-icon rss"> </a>
                                        <a href="javascript:;" data-original-title="skype" class="social-icon skype"> </a>
                                        <a href="javascript:;" data-original-title="spotify" class="social-icon spotify"> </a>
                                        <a href="javascript:;" data-original-title="stumbleupon" class="social-icon stumbleupon"> </a>
                                        <a href="javascript:;" data-original-title="tumblr" class="social-icon tumblr"> </a>
                                        <a href="javascript:;" data-original-title="twitter" class="social-icon twitter"> </a>
                                        <a href="javascript:;" data-original-title="vimeo" class="social-icon vimeo"> </a>
                                        <a href="javascript:;" data-original-title="wordpress" class="social-icon wordpress"> </a>
                                        <a href="javascript:;" data-original-title="xing" class="social-icon xing"> </a>
                                        <a href="javascript:;" data-original-title="yahoo" class="social-icon yahoo"> </a>
                                        <a href="javascript:;" data-original-title="youtube" class="social-icon youtube"> </a>
                                        <a href="javascript:;" data-original-title="vk" class="social-icon vk"> </a>
                                        <a href="javascript:;" data-original-title="instagram" class="social-icon instagram"> </a>
                                        <a href="javascript:;" data-original-title="reddit" class="social-icon reddit"> </a>
                                        <a href="javascript:;" data-original-title="aboutme" class="social-icon aboutme"> </a>
                                        <a href="javascript:;" data-original-title="flickr" class="social-icon flickr"> </a>
                                        <a href="javascript:;" data-original-title="foursquare" class="social-icon foursquare"> </a>
                                        <a href="javascript:;" data-original-title="gravatar" class="social-icon gravatar"> </a>
                                        <a href="javascript:;" data-original-title="klout" class="social-icon klout"> </a>
                                        <a href="javascript:;" data-original-title="myspace" class="social-icon myspace"> </a>
                                        <a href="javascript:;" data-original-title="quora" class="social-icon quora"> </a>
                                    </div>
                                </div>
                                <!-- END BLOCK BUTTONS PORTLET-->
                                <!-- BEGIN BLOCK BUTTONS PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green-sharp"></i>
                                            <span class="caption-subject font-green-sharp bold uppercase">Social Icons(Colored)</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <ul class="social-icons social-icons-color">
                                            <li>
                                                <a href="javascript:;" data-original-title="amazon" class="amazon"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="behance" class="behance"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="blogger" class="blogger"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="deviantart" class="deviantart"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="dribbble" class="dribbble"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="dropbox" class="dropbox"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="facebook" class="facebook"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="forrst" class="forrst"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="github" class="github"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="Goole Plus" class="googleplus"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="jolicloud" class="jolicloud"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="last-fm" class="last-fm"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="linkedin" class="linkedin"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="picasa" class="picasa"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="pintrest" class="pintrest"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="rss" class="rss"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="skype" class="skype"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="spotify" class="spotify"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="stumbleupon" class="stumbleupon"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="tumblr" class="tumblr"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="twitter" class="twitter"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="vimeo" class="vimeo"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="wordpress" class="wordpress"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="xing" class="xing"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="yahoo" class="yahoo"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="youtube" class="youtube"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="vk" class="vk"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="instagram" class="instagram"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="reddit" class="reddit"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="aboutme" class="aboutme"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="flickr" class="flickr"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="foursquare" class="foursquare"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="gravatar" class="gravatar"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="klout" class="klout"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="myspace" class="myspace"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="quora" class="quora"> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- END BLOCK BUTTONS PORTLET-->
                                <!-- BEGIN BLOCK BUTTONS PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green-sharp"></i>
                                            <span class="caption-subject font-green-sharp bold uppercase">Inline Social Icons(Colored)</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body util-btn-margin-bottom-5">
                                        <a href="javascript:;" data-original-title="amazon" class="social-icon social-icon-color amazon"> </a>
                                        <a href="javascript:;" data-original-title="behance" class="social-icon social-icon-color behance"> </a>
                                        <a href="javascript:;" data-original-title="blogger" class="social-icon social-icon-color blogger"> </a>
                                        <a href="javascript:;" data-original-title="deviantart" class="social-icon social-icon-color deviantart"> </a>
                                        <a href="javascript:;" data-original-title="dribbble" class="social-icon social-icon-color dribbble"> </a>
                                        <a href="javascript:;" data-original-title="dropbox" class="social-icon social-icon-color dropbox"> </a>
                                        <a href="javascript:;" data-original-title="facebook" class="social-icon social-icon-color facebook"> </a>
                                        <a href="javascript:;" data-original-title="forrst" class="social-icon social-icon-color forrst"> </a>
                                        <a href="javascript:;" data-original-title="github" class="social-icon social-icon-color github"> </a>
                                        <a href="javascript:;" data-original-title="Goole Plus" class="social-icon social-icon-color googleplus"> </a>
                                        <a href="javascript:;" data-original-title="jolicloud" class="social-icon social-icon-color jolicloud"> </a>
                                        <a href="javascript:;" data-original-title="last-fm" class="social-icon social-icon-color last-fm"> </a>
                                        <a href="javascript:;" data-original-title="linkedin" class="social-icon social-icon-color linkedin"> </a>
                                        <a href="javascript:;" data-original-title="picasa" class="social-icon social-icon-color picasa"> </a>
                                        <a href="javascript:;" data-original-title="pintrest" class="social-icon social-icon-color pintrest"> </a>
                                        <a href="javascript:;" data-original-title="rss" class="social-icon social-icon-color rss"> </a>
                                        <a href="javascript:;" data-original-title="skype" class="social-icon social-icon-color skype"> </a>
                                        <a href="javascript:;" data-original-title="spotify" class="social-icon social-icon-color spotify"> </a>
                                        <a href="javascript:;" data-original-title="stumbleupon" class="social-icon social-icon-color stumbleupon"> </a>
                                        <a href="javascript:;" data-original-title="tumblr" class="social-icon social-icon-color tumblr"> </a>
                                        <a href="javascript:;" data-original-title="twitter" class="social-icon social-icon-color twitter"> </a>
                                        <a href="javascript:;" data-original-title="vimeo" class="social-icon social-icon-color vimeo"> </a>
                                        <a href="javascript:;" data-original-title="wordpress" class="social-icon social-icon-color wordpress"> </a>
                                        <a href="javascript:;" data-original-title="xing" class="social-icon social-icon-color xing"> </a>
                                        <a href="javascript:;" data-original-title="yahoo" class="social-icon social-icon-color yahoo"> </a>
                                        <a href="javascript:;" data-original-title="youtube" class="social-icon social-icon-color youtube"> </a>
                                        <a href="javascript:;" data-original-title="vk" class="social-icon social-icon-color vk"> </a>
                                        <a href="javascript:;" data-original-title="instagram" class="social-icon social-icon-color instagram"> </a>
                                        <a href="javascript:;" data-original-title="reddit" class="social-icon social-icon-color reddit"> </a>
                                        <a href="javascript:;" data-original-title="aboutme" class="social-icon social-icon-color aboutme"> </a>
                                        <a href="javascript:;" data-original-title="flickr" class="social-icon social-icon-color flickr"> </a>
                                        <a href="javascript:;" data-original-title="foursquare" class="social-icon social-icon-color foursquare"> </a>
                                        <a href="javascript:;" data-original-title="gravatar" class="social-icon social-icon-color gravatar"> </a>
                                        <a href="javascript:;" data-original-title="klout" class="social-icon social-icon-color klout"> </a>
                                        <a href="javascript:;" data-original-title="myspace" class="social-icon social-icon-color myspace"> </a>
                                        <a href="javascript:;" data-original-title="quora" class="social-icon social-icon-color quora"> </a>
                                    </div>
                                </div>
                                <!-- END BLOCK BUTTONS PORTLET-->
                            </div>
                            <div class="col-md-6">
                                <!-- BEGIN BLOCK BUTTONS PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-red-mint"></i>
                                            <span class="caption-subject font-red-mint bold uppercase">Button Groups</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="clearfix">
                                            <h4 class="block">Basic Example</h4>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default">Left</button>
                                                <button type="button" class="btn btn-default">Middle</button>
                                                <button type="button" class="btn btn-default">Right</button>
                                            </div>
                                            <div class="btn-group btn-group-solid">
                                                <button type="button" class="btn red">Left</button>
                                                <button type="button" class="btn yellow">Middle</button>
                                                <button type="button" class="btn green">Right</button>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Button Toolbar</h4>
                                            <div class="btn-toolbar margin-bottom-10">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default">1</button>
                                                    <button type="button" class="btn btn-default">2</button>
                                                    <button type="button" class="btn btn-default">3</button>
                                                    <button type="button" class="btn btn-default">4</button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default">5</button>
                                                    <button type="button" class="btn btn-default">6</button>
                                                    <button type="button" class="btn btn-default">7</button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default">8</button>
                                                </div>
                                            </div>
                                            <div class="btn-toolbar">
                                                <div class="btn-group btn-group-solid">
                                                    <button type="button" class="btn red">1</button>
                                                    <button type="button" class="btn green">2</button>
                                                    <button type="button" class="btn blue">3</button>
                                                    <button type="button" class="btn yellow">4</button>
                                                </div>
                                                <div class="btn-group btn-group-solid">
                                                    <button type="button" class="btn purple">5</button>
                                                    <button type="button" class="btn dark">6</button>
                                                    <button type="button" class="btn default">7</button>
                                                </div>
                                                <div class="btn-group btn-group-solid">
                                                    <button type="button" class="btn red">8</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Button Group Sizing</h4>
                                            <div class="btn-toolbar">
                                                <div class="btn-group btn-group-lg btn-group-solid margin-bottom-10">
                                                    <button type="button" class="btn red">Left</button>
                                                    <button type="button" class="btn green">Middle</button>
                                                    <button type="button" class="btn blue">Right</button>
                                                </div>
                                            </div>
                                            <div class="btn-toolbar margin-bottom-10">
                                                <div class="btn-group btn-group-solid">
                                                    <button type="button" class="btn red">Left</button>
                                                    <button type="button" class="btn green">Middle</button>
                                                    <button type="button" class="btn blue">Right</button>
                                                </div>
                                            </div>
                                            <div class="btn-toolbar margin-bottom-10">
                                                <div class="btn-group btn-group-sm btn-group-solid">
                                                    <button type="button" class="btn red">Left</button>
                                                    <button type="button" class="btn green">Middle</button>
                                                    <button type="button" class="btn blue">Right</button>
                                                </div>
                                            </div>
                                            <div class="btn-toolbar margin-bottom-10">
                                                <div class="btn-group btn-group-xs btn-group-solid">
                                                    <button type="button" class="btn red">Left</button>
                                                    <button type="button" class="btn green">Middle</button>
                                                    <button type="button" class="btn blue">Right</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Nesting Button Group</h4>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default">
                                                    <i class="fa fa-user"></i> Profile</button>
                                                <button type="button" class="btn btn-default">
                                                    <i class="fa fa-cogs"></i> Settings</button>
                                                <button type="button" class="btn btn-default">
                                                    <i class="fa fa-bullhorn"></i> Feeds</button>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-horizontal"></i> More
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="clearfix margin-bottom-10"> </div>
                                            <div class="btn-group btn-group-solid">
                                                <button type="button" class="btn red">
                                                    <i class="fa fa-user"></i> Profile</button>
                                                <button type="button" class="btn green">
                                                    <i class="fa fa-cogs"></i> Settings</button>
                                                <button type="button" class="btn purple">
                                                    <i class="fa fa-bullhorn"></i> Feeds</button>
                                                <div class="btn-group btn-group-solid">
                                                    <button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-horizontal"></i> More
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Vertical variation</h4>
                                            <div class="btn-group-vertical margin-right-10">
                                                <button type="button" class="btn btn-default">Button</button>
                                                <div class="btn-group">
                                                    <button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> Dropdown
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop1">
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button type="button" class="btn btn-default">Button</button>
                                                <div class="btn-group">
                                                    <button id="btnGroupVerticalDrop4" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> Dropdown
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop4">
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="btn-group-vertical btn-group-solid">
                                                <button type="button" class="btn green">Button</button>
                                                <div class="btn-group">
                                                    <button id="btnGroupVerticalDrop5" type="button" class="btn yellow dropdown-toggle" data-toggle="dropdown"> Dropdown
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop5">
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button type="button" class="btn dark">Button</button>
                                                <div class="btn-group">
                                                    <button id="btnGroupVerticalDrop8" type="button" class="btn yellow dropdown-toggle" data-toggle="dropdown"> Dropdown
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop8">
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Justified Link Variation</h4>
                                            <div class="btn-group btn-group-justified">
                                                <a href="javascript:;" class="btn btn-default"> Left </a>
                                                <a href="javascript:;" class="btn btn-default"> Middle </a>
                                                <a href="javascript:;" class="btn btn-default"> Right </a>
                                            </div>
                                            <div class="clearfix margin-bottom-10"> </div>
                                            <div class="btn-group btn-group btn-group-justified">
                                                <a href="javascript:;" class="btn red"> Left </a>
                                                <a href="javascript:;" class="btn blue"> Middle </a>
                                                <a href="javascript:;" class="btn green"> Right </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END BLOCK BUTTONS PORTLET-->
                                <!-- BEGIN DROPDOWNS PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green-sharp"></i>
                                            <span class="caption-subject font-green-sharp bold uppercase">Dropdowns</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="dropdown_1">
                                                <h4 class="block">Dropdown buttons</h4>
                                                <div class="btn-group">
                                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="javascript:;"> Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="javascript:;"> Settings
                                                                <span class="badge badge-success"> 3 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Preferences </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Window Options </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Help
                                                                <span class="badge badge-danger"> 7 </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn red dropdown-toggle" data-toggle="dropdown">Primary
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="javascript:;"> Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action
                                                                <span class="badge badge-warning"> 2 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link
                                                                <span class="badge badge-info"> 7 </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn purple dropdown-toggle" data-toggle="dropdown">Success
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="javascript:;"> Action
                                                                <span class="badge badge-inverse"> 7 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link
                                                                <span class="badge"> 4 </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="btn-toolbar hide">
                                                    <div class="btn-group">
                                                        <button class="btn green dropdown-toggle" data-toggle="dropdown">Success
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="javascript:;"> Action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Another action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Something else here </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;"> Separated link </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group">
                                                        <button class="btn blue dropdown-toggle" data-toggle="dropdown">Info
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="javascript:;"> Action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Another action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Something else here </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;"> Separated link </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group">
                                                        <button class="btn black dropdown-toggle" data-toggle="dropdown">Inverse
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu opens-left">
                                                            <li>
                                                                <a href="javascript:;"> Action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Another action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Something else here </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;"> Separated link </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <h4 class="block">Dropdown button with icons</h4>
                                                <div class="btn-toolbar">
                                                    <div class="btn-group">
                                                        <a class="btn green" href="javascript:;" data-toggle="dropdown">
                                                            <i class="fa fa-user"></i> User
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-pencil"></i> Edit </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-trash-o"></i> Delete </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-ban"></i> Ban </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="i"></i> Make admin </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a class="btn purple" href="javascript:;" data-toggle="dropdown">
                                                            <i class="fa fa-user"></i> Settings
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-plus"></i> Add </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-trash-o"></i> Edit </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-times"></i> Delete </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="i"></i> Full Settings </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="dropdown_2">
                                                <h4 class="block">Hoverable Dropdown Buttons</h4>
                                                <div class="btn-group">
                                                    <a class="btn dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true" href="javascript:;"> Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="javascript:;"> Settings
                                                                <span class="badge badge-success"> 3 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Preferences </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Window Options </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Help
                                                                <span class="badge badge-danger"> 7 </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn red dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">Primary
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="javascript:;"> Action
                                                                <span class="badge badge-warning"> 7 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action
                                                                <span class="badge badge-danger"> 2 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link
                                                                <span class="badge badge-info"> 4 </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn purple dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">Success
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="javascript:;"> Action
                                                                <span class="badge badge-inverse"> 7 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link
                                                                <span class="badge"> 4 </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="btn-toolbar hide">
                                                    <div class="btn-group">
                                                        <button class="btn green dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">Success
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="javascript:;"> Action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Another action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Something else here </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;"> Separated link </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group">
                                                        <button class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">Info
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="javascript:;"> Action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Another action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Something else here </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;"> Separated link </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group">
                                                        <button class="btn black dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">Inverse
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu opens-left">
                                                            <li>
                                                                <a href="javascript:;"> Action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Another action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Something else here </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;"> Separated link </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <h4 class="block">Hoverable Dropdown Buttons with Icons</h4>
                                                <div class="btn-toolbar">
                                                    <div class="btn-group">
                                                        <a class="btn green" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                                                            <i class="fa fa-user"></i> User
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-pencil"></i> Edit </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-trash-o"></i> Delete </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-ban"></i> Ban </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="i"></i> Make admin </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a class="btn purple" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                                                            <i class="fa fa-user"></i> Settings
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-plus"></i> Add </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-trash-o"></i> Edit </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-times"></i> Delete </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="i"></i> Full Settings </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="well">
                                                    <h4 class="block">Hoverable Dropdown Buttons Dropdown with Checkboxes.</h4>
                                                    <div class="btn-group">
                                                        <a class="btn green" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Options #1
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <div class="dropdown-menu hold-on-click dropdown-checkboxes">
                                                            <label>
                                                                <input type="checkbox">Option 1</label>
                                                            <label>
                                                                <input type="checkbox">Option 2</label>
                                                            <label>
                                                                <input type="checkbox">Option 3</label>
                                                            <label>
                                                                <input type="checkbox">Option 4</label>
                                                            <label>
                                                                <input type="checkbox">Option 5</label>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a class="btn red" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Options #2
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <div class="dropdown-menu hold-on-click dropdown-checkboxes">
                                                            <label>
                                                                <input type="checkbox">Option 1</label>
                                                            <label>
                                                                <input type="checkbox" checked>Option 2</label>
                                                            <label>
                                                                <input type="checkbox">Option 3</label>
                                                            <label>
                                                                <input type="checkbox" checked>Option 4</label>
                                                            <label>
                                                                <input type="checkbox">Option 5</label>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        <span class="label label-success"> NOTE: </span> &nbsp; By adding <code>hold-on-click</code> class you can avoid closing the dropdown on click </p>
                                                </div>
                                                <div class="well">
                                                    <h4 class="block">Hoverable Dropup Buttons.</h4>
                                                    <div class="btn-group">
                                                        <button class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">Info
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu bottom-up">
                                                            <li>
                                                                <a href="javascript:;"> Action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Another action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Something else here </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;"> Separated link </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group">
                                                        <button class="btn black dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">Inverse
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu bottom-up">
                                                            <li>
                                                                <a href="javascript:;"> Action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Another action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Something else here </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;"> Separated link </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <p>
                                                        <span class="label label-success"> NOTE: </span> &nbsp; By adding <code>bottom-up</code> class you make dropup menu. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END DROPDOWNS PORTLET-->
                                <!-- BEGIN DROPDOWNS PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green-sharp"></i>
                                            <span class="caption-subject font-green-sharp bold uppercase">Button Dropdowns</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body util-btn-group-margin-bottom-5">
                                        <div class="clearfix">
                                            <h4 class="block">Default Bootstrap Style</h4>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default">Default</button>
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">Primary</button>
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success">Success</button>
                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info">Info</button>
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-warning">Warning</button>
                                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger">Danger</button>
                                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Metronic Style</h4>
                                            <div class="btn-group">
                                                <button type="button" class="btn default">Default</button>
                                                <button type="button" class="btn default dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group">
                                                <button type="button" class="btn blue">Blue</button>
                                                <button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group">
                                                <button type="button" class="btn green">Green</button>
                                                <button type="button" class="btn green dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group">
                                                <button type="button" class="btn red">Red</button>
                                                <button type="button" class="btn red dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group">
                                                <button type="button" class="btn yellow">Yellow</button>
                                                <button type="button" class="btn yellow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group">
                                                <button type="button" class="btn dark">Dark</button>
                                                <button type="button" class="btn dark dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group">
                                                <button type="button" class="btn purple">Purple</button>
                                                <button type="button" class="btn purple dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Dropdowns with Multilevel Submenu</h4>
                                            <!-- Large button group -->
                                            <div class="btn-group">
                                                <button class="btn blue dropdown-toggle" type="button" data-toggle="dropdown"> Dropdown
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li class="dropdown-submenu">
                                                        <a href="javascript:;"> More options </a>
                                                        <ul class="dropdown-menu" style="">
                                                            <li>
                                                                <a href="javascript:;"> Second level link </a>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a href="javascript:;"> More options </a>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="index.html"> Third level link </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="index.html"> Third level link </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="index.html"> Third level link </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="index.html"> Third level link </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="index.html"> Third level link </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="index.html"> Second level link </a>
                                                            </li>
                                                            <li>
                                                                <a href="index.html"> Second level link </a>
                                                            </li>
                                                            <li>
                                                                <a href="index.html"> Second level link </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="btn-group dropup">
                                                <button class="btn green dropdown-toggle" type="button" data-toggle="dropdown"> Dropup
                                                    <i class="fa fa-angle-up"></i>
                                                </button>
                                                <ul class="dropdown-menu pull-right" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li class="dropdown-submenu">
                                                        <a href="javascript:;"> More options </a>
                                                        <ul class="dropdown-menu" style="">
                                                            <li>
                                                                <a href="javascript:;"> Second level link </a>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a href="javascript:;"> More options </a>
                                                                <ul class="dropdown-menu pull-right">
                                                                    <li>
                                                                        <a href="index.html"> Third level link </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="index.html"> Third level link </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="index.html"> Third level link </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="index.html"> Third level link </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="index.html"> Third level link </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="index.html"> Second level link </a>
                                                            </li>
                                                            <li>
                                                                <a href="index.html"> Second level link </a>
                                                            </li>
                                                            <li>
                                                                <a href="index.html"> Second level link </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Sizing</h4>
                                            <!-- Large button group -->
                                            <div class="btn-group">
                                                <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown"> Large button
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Small button group -->
                                            <div class="btn-group">
                                                <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown"> Small button
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Extra small button group -->
                                            <div class="btn-group">
                                                <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown"> Extra small button
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="clearfix margin-bottom-10"> </div>
                                            <!-- Large button group -->
                                            <div class="btn-group">
                                                <button class="btn red btn-lg dropdown-toggle" type="button" data-toggle="dropdown"> Large button
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Small button group -->
                                            <div class="btn-group">
                                                <button class="btn blue btn-sm dropdown-toggle" type="button" data-toggle="dropdown"> Small button
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Extra small button group -->
                                            <div class="btn-group">
                                                <button class="btn green btn-sm dropdown-toggle" type="button" data-toggle="dropdown"> Extra small button
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Dropup</h4>
                                            <div class="btn-toolbar margin-bottom-10">
                                                <div class="btn-group dropup">
                                                    <button type="button" class="btn btn-default">Dropup</button>
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-angle-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="javascript:;"> Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                                <div class="btn-group dropup">
                                                    <button type="button" class="btn btn-primary">Right dropup</button>
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-angle-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right" role="menu">
                                                        <li>
                                                            <a href="javascript:;"> Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                            </div>
                                            <div class="btn-toolbar">
                                                <div class="btn-group dropup">
                                                    <button type="button" class="btn blue">Dropup</button>
                                                    <button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-angle-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="javascript:;"> Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                                <div class="btn-group dropup">
                                                    <button type="button" class="btn green">Right dropup</button>
                                                    <button type="button" class="btn green dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-angle-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right" role="menu">
                                                        <li>
                                                            <a href="javascript:;"> Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Hoveralbe Dropdowns</h4>
                                            <div class="btn-toolbar margin-bottom-10">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default">Dropdown</button>
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="javascript:;"> Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                                <div class="btn-group dropup">
                                                    <button type="button" class="btn btn-primary">Dropup</button>
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                                                        <i class="fa fa-angle-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="javascript:;"> Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Dropup
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="javascript:;"> Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                            </div>
                                            <div class="btn-toolbar">
                                                <div class="btn-group">
                                                    <button type="button" class="btn blue">Dropdown</button>
                                                    <button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="javascript:;"> Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                                <div class="btn-group dropup">
                                                    <button type="button" class="btn green">Dropup</button>
                                                    <button type="button" class="btn green dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                                                        <i class="fa fa-angle-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="javascript:;"> Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                                <div class="btn-group">
                                                    <button type="button" class="btn yellow dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Dropdown
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="javascript:;"> Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Dropdown with Checkboxes & Search Form</h4>
                                            <div class="btn-group">
                                                <button class="btn green dropdown-toggle" type="button" data-toggle="dropdown"> Search Dropdown
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-content input-large hold-on-click" role="menu">
                                                    <form action="#">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="search...">
                                                            <span class="input-group-btn">
                                                                <button class="btn blue" type="submit">Go!</button>
                                                            </span>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn blue">Dropdown</button>
                                                <button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="dropdown-menu hold-on-click dropdown-checkboxes" role="menu">
                                                    <label>
                                                        <input type="checkbox">Option 1</label>
                                                    <label>
                                                        <input type="checkbox" checked>Option 2</label>
                                                    <label>
                                                        <input type="checkbox">Option 3</label>
                                                    <label>
                                                        <input type="checkbox" checked>Option 4</label>
                                                    <label>
                                                        <input type="checkbox">Option 5</label>
                                                </div>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group dropup">
                                                <button type="button" class="btn green">Dropup</button>
                                                <button type="button" class="btn green dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-up"></i>
                                                </button>
                                                <div class="dropdown-menu hold-on-click dropdown-checkboxes" role="menu">
                                                    <label>
                                                        <input type="checkbox">Option 1</label>
                                                    <label>
                                                        <input type="checkbox" checked>Option 2</label>
                                                    <label>
                                                        <input type="checkbox">Option 3</label>
                                                    <label>
                                                        <input type="checkbox" checked>Option 4</label>
                                                    <label>
                                                        <input type="checkbox">Option 5</label>
                                                </div>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="clearfix margin-top-10">
                                                <span class="label label-success"> NOTE: </span> &nbsp; By adding <code>hold-on-click</code> class you can avoid closing the dropdown on click </div>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Dropdown with Radio Buttons</h4>
                                            <div class="btn-group">
                                                <button type="button" class="btn blue">Dropdown</button>
                                                <button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="dropdown-menu hold-on-click dropdown-radiobuttons" role="menu">
                                                    <label>
                                                        <input type="radio" name="radio_button_1">Option 1</label>
                                                    <label>
                                                        <input type="radio" name="radio_button_1">Option 2</label>
                                                    <label>
                                                        <input type="radio" name="radio_button_1">Option 3</label>
                                                    <label>
                                                        <input type="radio" name="radio_button_1">Option 4</label>
                                                    <label>
                                                        <input type="radio" name="radio_button_1">Option 5</label>
                                                </div>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group dropup">
                                                <button type="button" class="btn green">Dropup</button>
                                                <button type="button" class="btn green dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-up"></i>
                                                </button>
                                                <div class="dropdown-menu hold-on-click dropdown-radiobuttons" role="menu">
                                                    <label>
                                                        <input type="radio" name="radio_button_2">Option 1</label>
                                                    <label>
                                                        <input type="radio" name="radio_button_2">Option 2</label>
                                                    <label>
                                                        <input type="radio" name="radio_button_2">Option 3</label>
                                                    <label>
                                                        <input type="radio" name="radio_button_2">Option 4</label>
                                                    <label>
                                                        <input type="radio" name="radio_button_2">Option 5</label>
                                                </div>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="clearfix margin-top-10">
                                                <span class="label label-success"> NOTE: </span> &nbsp; By adding <code>hold-on-click</code> class you can avoid closing the dropdown on click </div>
                                        </div>
                                    </div>
                                    <!-- END DROPDOWNS PORTLET-->
                                </div>
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green-sharp"></i>
                                            <span class="caption-subject font-green-sharp bold uppercase">Button States</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body util-btn-margin-bottom-5">
                                        <h4>Loading State</h4>
                                        <div class="clearfix">
                                            <button type="button" data-loading-text="Loading..." class="demo-loading-btn btn btn-primary"> Loading state </button>
                                            <button type="button" data-loading-text="Loading..." class="demo-loading-btn btn btn-default"> Loading state </button>
                                            <button type="button" data-loading-text="Loading..." class="demo-loading-btn btn red"> Loading state </button>
                                            <button type="button" data-loading-text="Loading..." class="demo-loading-btn btn blue"> Loading state </button>
                                        </div>
                                        <h4>Single Toggle</h4>
                                        <div class="clearfix">
                                            <button type="button" class="btn btn-primary" data-toggle="button"> Single toggle </button>
                                            <button type="button" class="btn btn-default" data-toggle="button"> Single toggle </button>
                                            <button type="button" class="btn red" data-toggle="button"> Single toggle </button>
                                            <button type="button" class="btn blue" data-toggle="button"> Single toggle </button>
                                        </div>
                                        <h4>Checkbox</h4>
                                        <div class="clearfix">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn default active">
                                                    <input type="checkbox" class="toggle"> Option 1 </label>
                                                <label class="btn default">
                                                    <input type="checkbox" class="toggle"> Option 2 </label>
                                                <label class="btn default">
                                                    <input type="checkbox" class="toggle"> Option 3 </label>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-default">
                                                    <input type="checkbox" class="toggle"> Option 1 </label>
                                                <label class="btn btn-default active">
                                                    <input type="checkbox" class="toggle"> Option 2 </label>
                                                <label class="btn btn-default">
                                                    <input type="checkbox" class="toggle"> Option 3 </label>
                                            </div>
                                        </div>
                                        <h4>Radio</h4>
                                        <div class="clearfix">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn blue active">
                                                    <input type="radio" class="toggle"> Option 1 </label>
                                                <label class="btn blue">
                                                    <input type="radio" class="toggle"> Option 2 </label>
                                                <label class="btn blue">
                                                    <input type="radio" class="toggle"> Option 3 </label>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-default active">
                                                    <input type="radio" class="toggle"> Option 1 </label>
                                                <label class="btn btn-default">
                                                    <input type="radio" class="toggle"> Option 2 </label>
                                                <label class="btn btn-default">
                                                    <input type="radio" class="toggle"> Option 3 </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_1_2">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- BEGIN BUTTONS PORTLET-->
                                <div class="portlet light tasks-widget bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <span class="caption-subject font-green-haze bold uppercase">Buttons</span>
                                            <span class="caption-helper">tasks summary...</span>
                                        </div>
                                        <div class="actions">
                                            <div class="btn-group">
                                                <a class="btn btn-circle green-haze btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="i"></i> Option 1</a>
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
                                    <div class="portlet-body util-btn-margin-bottom-5">
                                        <div class="clearfix">
                                            <h4 class="block">Default Bootstrap Buttons(Customized to Match Theme Style)</h4>
                                            <!-- Standard gray button with gradient -->
                                            <button type="button" class="btn btn-circle btn-default">Default</button>
                                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                            <button type="button" class="btn btn-circle btn-primary">Primary</button>
                                            <!-- Indicates a successful or positive action -->
                                            <button type="button" class="btn btn-circle btn-success">Success</button>
                                            <!-- Contextual button for informational alert messages -->
                                            <button type="button" class="btn btn-circle btn-info">Info</button>
                                            <!-- Indicates caution should be taken with this action -->
                                            <button type="button" class="btn btn-circle btn-warning">Warning</button>
                                            <!-- Indicates a dangerous or potentially negative action -->
                                            <button type="button" class="btn btn-circle btn-danger">Danger</button>
                                            <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
                                            <button type="button" class="btn btn-circle btn-link">Link</button>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Metronic Custom Buttons</h4>
                                            <p>
                                                <button type="button" class="btn btn-circle default">Default</button>
                                                <button type="button" class="btn btn-circle red">Red</button>
                                                <button type="button" class="btn btn-circle blue">Blue</button>
                                                <button type="button" class="btn btn-circle green">Green</button>
                                                <button type="button" class="btn btn-circle yellow">Yellow</button>
                                                <button type="button" class="btn btn-circle purple">Purple</button>
                                                <button type="button" class="btn btn-circle dark">Dark</button>
                                            </p>
                                            <p>
                                                <button type="button" class="btn btn-circle dark">Dark</button>
                                                <button type="button" class="btn btn-circle red-mint">Red</button>
                                                <button type="button" class="btn btn-circle blue-hoki">Blue</button>
                                                <button type="button" class="btn btn-circle green-haze">Green</button>
                                                <button type="button" class="btn btn-circle yellow-mint">Yellow</button>
                                                <button type="button" class="btn btn-circle purple-sharp">Purple</button>
                                                <button type="button" class="btn btn-circle grey-mint">Grey</button>
                                            </p>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Metronic Outline Buttons</h4>
                                            <p>
                                                <button type="button" class="btn btn-circle default btn-outline">Default</button>
                                                <button type="button" class="btn btn-circle red btn-outline">Red</button>
                                                <button type="button" class="btn btn-circle blue btn-outline">Blue</button>
                                                <button type="button" class="btn btn-circle green btn-outline">Green</button>
                                                <button type="button" class="btn btn-circle yellow btn-outline">Yellow</button>
                                                <button type="button" class="btn btn-circle purple btn-outline">Purple</button>
                                                <button type="button" class="btn btn-circle dark btn-outline">Dark</button>
                                            </p>
                                            <p>
                                                <button type="button" class="btn btn-circle dark btn-outline sbold uppercase">Dark</button>
                                                <button type="button" class="btn btn-circle red-mint btn-outline sbold uppercase">Red</button>
                                                <button type="button" class="btn btn-circle blue-hoki btn-outline sbold uppercase">Blue</button>
                                                <button type="button" class="btn btn-circle green-haze btn-outline sbold uppercase">Green</button>
                                                <button type="button" class="btn btn-circle yellow-mint btn-outline sbold uppercase">Yellow</button>
                                                <button type="button" class="btn btn-circle purple-sharp btn-outline sbold uppercase">Purple</button>
                                                <button type="button" class="btn btn-circle grey-mint btn-outline sbold uppercase">Grey</button>
                                            </p>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">More Button Colors(go to
                                                <a href="ui_colors.html"> ui_colors.html </a> for more colors) </h4>
                                            <button type="button" class="btn btn-circle blue-hoki">Blue Hoki</button>
                                            <button type="button" class="btn btn-circle blue-madison">Blue Madison</button>
                                            <button type="button" class="btn btn-circle green-meadow">Green Meadow</button>
                                            <button type="button" class="btn btn-circle red-sunglo">Red Sunglo</button>
                                            <button type="button" class="btn btn-circle yellow-crusta">Yellow Crusta</button>
                                            <button type="button" class="btn btn-circle purple-plum">Purple Plum</button>
                                            <button type="button" class="btn btn-circle grey-cascade">Grey Cascade</button>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Button Stripe</h4>
                                            <a href="javascript:;" class="btn btn-circle default red-stripe"> Red </a>
                                            <a href="javascript:;" class="btn btn-circle default blue-stripe"> Blue </a>
                                            <a href="javascript:;" class="btn btn-circle default green-stripe"> Green </a>
                                            <a href="javascript:;" class="btn btn-circle default yellow-stripe"> Yellow </a>
                                            <a href="javascript:;" class="btn btn-circle default purple-stripe"> Purple </a>
                                            <a href="javascript:;" class="btn btn-circle default green-stripe"> Green </a>
                                            <a href="javascript:;" class="btn btn-circle default dark-stripe"> Dark </a>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Disabled</h4>
                                            <a href="javascript:;" class="btn btn-circle default disabled"> Default </a>
                                            <a href="javascript:;" class="btn btn-circle red disabled"> Red </a>
                                            <a href="javascript:;" class="btn btn-circle blue disabled"> Blue </a>
                                            <a href="javascript:;" class="btn btn-circle green disabled"> Green </a>
                                            <a href="javascript:;" class="btn btn-circle yellow disabled"> Yellow </a>
                                            <a href="javascript:;" class="btn btn-circle purple disabled"> Purple </a>
                                            <a href="javascript:;" class="btn btn-circle dark disabled"> Dark </a>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Button Sizes</h4>
                                            <button type="button" class="btn btn-circle default btn-lg">Large button</button>
                                            <button type="button" class="btn btn-circle red">Default button</button>
                                            <button type="button" class="btn btn-circle blue btn-sm">Small button</button>
                                            <button type="button" class="btn btn-circle green btn-sm">Extra small button</button>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Button Tags</h4>
                                            <a href="javascript:;" class="btn btn-circle default"> Link </a>
                                            <button class="btn btn-circle default">Button</button>
                                            <input type="button" class="btn btn-circle default" value="Input">
                                            <input type="submit" class="btn btn-circle default" value="Submit"> </div>
                                        <div class="clearfix">
                                            <h4 class="block">Block Buttons</h4>
                                            <a href="javascript:;" class="btn btn-circle default btn-block"> Link </a>
                                            <button class="btn btn-circle blue btn-block">Button</button>
                                            <input type="button" class="btn btn-circle red btn-block" value="Input">
                                            <input type="submit" class="btn btn-circle purple btn-block" value="Submit">
                                            <button class="btn btn-circle blue btn-block btn-outline ">Button</button>
                                            <input type="button" class="btn btn-circle red btn-outline btn-block" value="Input">
                                            <input type="submit" class="btn btn-circle purple btn-outline  btn-block" value="Submit">
                                            <button class="btn btn-circle yellow-mint btn-block btn-outline sbold uppercase">Button</button>
                                            <input type="button" class="btn btn-circle red-mint btn-outline btn-block sbold uppercase" value="Input">
                                            <input type="submit" class="btn btn-circle green-sharp btn-outline  btn-block sbold uppercase" value="Submit"> </div>
                                    </div>
                                </div>
                                <!-- END BUTTONS PORTLET-->
                                <!-- BEGIN BUTTONS WITH ICONS PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption">
                                            <i class="icon-globe font-green-sharp"></i>
                                            <span class="caption-subject font-green-sharp bold uppercase">Iconic</span>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#dropdown_fontawesome_1" data-toggle="tab"> Fontawesome </a>
                                            </li>
                                            <li>
                                                <a href="#dropdown_simplelineicons_1" data-toggle="tab"> Simple Line</a>
                                            </li>
                                            <li>
                                                <a href="#dropdown_glyphicon_1" data-toggle="tab"> Glyphicon </a>
                                            </li>
                                            <li>
                                                <a href="#buttons_metro_1" data-toggle="tab"> Metro </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="portlet-body util-btn-margin-bottom-5">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="dropdown_fontawesome_1">
                                                <div class="clearfix">
                                                    <h4 class="block">Large Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg default"> Default
                                                        <i class="fa fa-user"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg red"> Red
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg blue">
                                                        <i class="fa fa-file-o"></i> Blue </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg green"> Green
                                                        <i class="fa fa-font"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg yellow"> Yellow
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg purple">
                                                        <i class="fa fa-times"></i> Purple </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg green"> Green
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg grey-cascade"> Dark
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Default Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-circle default"> Default
                                                        <i class="fa fa-user"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle red"> Red
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle blue">
                                                        <i class="fa fa-file-o"></i> Blue </a>
                                                    <a href="javascript:;" class="btn btn-circle green"> Green
                                                        <i class="fa fa-font"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle yellow"> Yellow
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle purple">
                                                        <i class="fa fa-times"></i> Purple </a>
                                                    <a href="javascript:;" class="btn btn-circle green"> Green
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle grey-cascade"> Dark
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Small Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm default"> Default
                                                        <i class="fa fa-user"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm red"> Red
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm blue">
                                                        <i class="fa fa-file-o"></i> Blue </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm green"> Green
                                                        <i class="fa fa-font"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm yellow"> Yellow
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm purple">
                                                        <i class="fa fa-times"></i> Purple </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm green"> Green
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm grey-cascade"> Dark
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Extra Small</h4>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs default"> Default
                                                        <i class="fa fa-user"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs red"> Red
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs blue">
                                                        <i class="fa fa-file-o"></i> Blue </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs green"> Green
                                                        <i class="fa fa-font"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs yellow"> Yellow
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs purple">
                                                        <i class="fa fa-times"></i> Purple </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs green"> Green
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs grey-cascade"> Dark
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Icon Only Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only default">
                                                        <i class="fa fa-user"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only red">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only blue">
                                                        <i class="fa fa-file-o"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only green">
                                                        <i class="fa fa-font"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only yellow">
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only purple">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only green">
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only grey-cascade">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="dropdown_simplelineicons_1">
                                                <div class="clearfix">
                                                    <h4 class="block">Large Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg default"> Default
                                                        <span class="glyphicon glyphicon-cog"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg red"> Red
                                                        <span class="glyphicon glyphicon-calendar"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg blue">
                                                        <span class="glyphicon glyphicon-font"> </span> Blue </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg green"> Green
                                                        <span class="glyphicon glyphicon-gift"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg yellow"> Yellow
                                                        <span class="glyphicon glyphicon-pencil"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg purple">
                                                        <span class="glyphicon glyphicon-tag"> </span> Purple </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg green"> Green
                                                        <span class="glyphicon glyphicon-user"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg grey-cascade"> Dark
                                                        <span class="glyphicon glyphicon-link"> </span>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Default Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-circle default"> Default
                                                        <span class="glyphicon glyphicon-cog"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle red"> Red
                                                        <span class="glyphicon glyphicon-calendar"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle blue">
                                                        <span class="glyphicon glyphicon-font"> </span> Blue </a>
                                                    <a href="javascript:;" class="btn btn-circle green"> Green
                                                        <span class="glyphicon glyphicon-gift"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle yellow"> Yellow
                                                        <span class="glyphicon glyphicon-pencil"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle purple">
                                                        <span class="glyphicon glyphicon-tag"> </span> Purple </a>
                                                    <a href="javascript:;" class="btn btn-circle green"> Green
                                                        <span class="glyphicon glyphicon-user"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle grey-cascade"> Dark
                                                        <span class="glyphicon glyphicon-link"> </span>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Small Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm default"> Default
                                                        <span class="glyphicon glyphicon-cog"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm red"> Red
                                                        <span class="glyphicon glyphicon-calendar"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm blue">
                                                        <span class="glyphicon glyphicon-font"> </span> Blue </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm green"> Green
                                                        <span class="glyphicon glyphicon-gift"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm yellow"> Yellow
                                                        <span class="glyphicon glyphicon-pencil"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm purple">
                                                        <span class="glyphicon glyphicon-tag"> </span> Purple </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm green"> Green
                                                        <span class="glyphicon glyphicon-user"> </span>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm grey-cascade"> Dark
                                                        <span class="glyphicon glyphicon-link"> </span>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Extra Small Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs default"> Default
                                                        <i class="glyphicon glyphicon-cog"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs red"> Red
                                                        <i class="glyphicon glyphicon-calendar"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs blue">
                                                        <i class="glyphicon glyphicon-font"> </i> Blue </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs green"> Green
                                                        <i class="glyphicon glyphicon-gift"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs yellow"> Yellow
                                                        <i class="glyphicon glyphicon-pencil"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs purple">
                                                        <i class="glyphicon glyphicon-tag"> </i> Purple </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs green"> Green
                                                        <i class="glyphicon glyphicon-user"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs grey-cascade"> Dark
                                                        <i class="glyphicon glyphicon-link"> </i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Icon Only Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only default">
                                                        <i class="glyphicon glyphicon-cog"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only red">
                                                        <i class="glyphicon glyphicon-calendar"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only blue">
                                                        <i class="glyphicon glyphicon-font"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only green">
                                                        <i class="glyphicon glyphicon-gift"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only yellow">
                                                        <i class="glyphicon glyphicon-pencil"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only purple">
                                                        <i class="glyphicon glyphicon-tag"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only green">
                                                        <i class="glyphicon glyphicon-user"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only grey-cascade">
                                                        <i class="glyphicon glyphicon-link"> </i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="dropdown_glyphicon_1">
                                                <div class="clearfix">
                                                    <h4 class="block">Large Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg default"> Default
                                                        <i class="icon-social-dribbble"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg red"> Red
                                                        <i class="icon-crop"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg blue">
                                                        <i class="icon-screen-desktop"> </i> Blue </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg green"> Green
                                                        <i class="icon-badge"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg yellow"> Yellow
                                                        <i class="icon-anchor"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg purple">
                                                        <i class="icon-bell"> </i> Purple </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg green"> Green
                                                        <i class="icon-present"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg grey-cascade"> Dark
                                                        <i class="icon-pin"> </i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Default Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-circle default"> Default
                                                        <i class="icon-social-dribbble"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle red"> Red
                                                        <i class="icon-crop"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle blue">
                                                        <i class="icon-screen-desktop"> </i> Blue </a>
                                                    <a href="javascript:;" class="btn btn-circle green"> Green
                                                        <i class="icon-badge"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle yellow"> Yellow
                                                        <i class="icon-anchor"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle purple">
                                                        <i class="icon-bell"> </i> Purple </a>
                                                    <a href="javascript:;" class="btn btn-circle green"> Green
                                                        <i class="icon-present"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle grey-cascade"> Dark
                                                        <i class="icon-pin"> </i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Small Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm default"> Default
                                                        <i class="icon-social-dribbble"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm red"> Red
                                                        <i class="icon-crop"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm blue">
                                                        <i class="icon-screen-desktop"> </i> Blue </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm green"> Green
                                                        <i class="icon-badge"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm yellow"> Yellow
                                                        <i class="icon-anchor"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm purple">
                                                        <i class="icon-bell"> </i> Purple </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm green"> Green
                                                        <i class="icon-present"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm grey-cascade"> Dark
                                                        <i class="icon-pin"> </i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Extra Small Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs default"> Default
                                                        <i class="icon-social-dribbble"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs red"> Red
                                                        <i class="icon-crop"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs blue">
                                                        <i class="icon-screen-desktop"> </i> Blue </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs green"> Green
                                                        <i class="icon-badge"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs yellow"> Yellow
                                                        <i class="icon-anchor"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs purple">
                                                        <i class="icon-bell"> </i> Purple </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs green"> Green
                                                        <i class="icon-present"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-xs grey-cascade"> Dark
                                                        <i class="icon-pin"> </i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Icon Only Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only default">
                                                        <i class="icon-social-dribbble"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only red">
                                                        <i class="icon-crop"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only blue">
                                                        <i class="icon-screen-desktop"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only green">
                                                        <i class="icon-badge"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only yellow">
                                                        <i class="icon-anchor"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only purple">
                                                        <i class="icon-bell"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only green">
                                                        <i class="icon-present"> </i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only grey-cascade">
                                                        <i class="icon-pin"> </i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="buttons_metro_1">
                                                <div class="clearfix">
                                                    <h4 class="block">Navigation Large Icons Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg default m-icon-big"> Submit
                                                        <i class="m-icon-big-swapleft"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg green m-icon-big"> Submit
                                                        <i class="m-icon-big-swapright m-icon-white"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg blue m-icon-big"> Submit
                                                        <i class="m-icon-big-swapdown m-icon-white"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg dark m-icon-big"> Submit
                                                        <i class="m-icon-big-swapup m-icon-white"></i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Navigation Large Icons Only Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg default m-icon-big m-icon-only">
                                                        <i class="m-icon-big-swapleft"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg green m-icon-big m-icon-only">
                                                        <i class="m-icon-big-swapright m-icon-white"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg blue m-icon-big m-icon-only">
                                                        <i class="m-icon-big-swapdown m-icon-white"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-lg dark m-icon-big m-icon-only">
                                                        <i class="m-icon-big-swapup m-icon-white"></i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Navigation Block Large Icons</h4>
                                                    <button class="btn btn-circle blue btn-block btn-lg m-icon-big">Button
                                                        <i class="m-icon-big-swapright m-icon-white"></i>
                                                    </button>
                                                    <a href="javascript:;" class="btn btn-circle green btn-block btn-lg m-icon-big"> Link
                                                        <i class="m-icon-big-swapright m-icon-white"></i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Navigation Defualt Icons Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-circle default m-icon"> Submit
                                                        <i class="m-icon-swapleft"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle green m-icon"> Submit
                                                        <i class="m-icon-swapright m-icon-white"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle blue m-icon"> Submit
                                                        <i class="m-icon-swapdown m-icon-white"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle dark m-icon"> Submit
                                                        <i class="m-icon-swapup m-icon-white"></i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Navigation Defualt Icons Only Buttons</h4>
                                                    <a href="javascript:;" class="btn btn-circle default m-icon m-icon-only">
                                                        <i class="m-icon-swapleft"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle green m-icon m-icon-only">
                                                        <i class="m-icon-swapright m-icon-white"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle blue m-icon m-icon-only">
                                                        <i class="m-icon-swapdown m-icon-white"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle dark m-icon m-icon-only">
                                                        <i class="m-icon-swapup m-icon-white"></i>
                                                    </a>
                                                </div>
                                                <div class="clearfix">
                                                    <h4 class="block">Navigation Block Defualt Icons</h4>
                                                    <button class="btn btn-circle blue btn-block m-icon">Button
                                                        <i class="m-icon-swapright m-icon-white"></i>
                                                    </button>
                                                    <a href="javascript:;" class="btn btn-circle green btn-block m-icon"> Link
                                                        <i class="m-icon-swapright m-icon-white"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END BUTTONS WITH ICONS PORTLET-->
                                <!-- BEGIN BLOCK BUTTONS PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green-sharp"></i>
                                            <span class="caption-subject font-green-sharp bold uppercase">Font Awesome Styled Buttons</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-group"></i>
                                            <div> Users </div>
                                            <span class="badge badge-danger"> 2 </span>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-barcode"></i>
                                            <div> Products </div>
                                            <span class="badge badge-success"> 4 </span>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-bar-chart-o"></i>
                                            <div> Reports </div>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-sitemap"></i>
                                            <div> Categories </div>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-calendar"></i>
                                            <div> Calendar </div>
                                            <span class="badge badge-success"> 4 </span>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-envelope"></i>
                                            <div> Inbox </div>
                                            <span class="badge badge-info"> 12 </span>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-bullhorn"></i>
                                            <div> Notification </div>
                                            <span class="badge badge-danger"> 3 </span>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-map-marker"></i>
                                            <div> Locations </div>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-money">
                                                <i></i>
                                            </i>
                                            <div> Finance </div>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-plane"></i>
                                            <div> Projects </div>
                                            <span class="badge badge-info"> 21 </span>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-thumbs-up"></i>
                                            <div> Feedback </div>
                                            <span class="badge badge-info"> 2 </span>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-cloud"></i>
                                            <div> Servers </div>
                                            <span class="badge badge-danger"> 2 </span>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-globe"></i>
                                            <div> Regions </div>
                                        </a>
                                        <a href="javascript:;" class="icon-btn">
                                            <i class="fa fa-heart-o"></i>
                                            <div> Popularity </div>
                                            <span class="badge badge-info"> 221 </span>
                                        </a>
                                    </div>
                                </div>
                                <!-- BEGIN BLOCK BUTTONS PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green-sharp"></i>
                                            <span class="caption-subject font-green-sharp bold uppercase">List Social Icons(UL)</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body util-btn-margin-bottom-5">
                                        <ul class="social-icons social-icons-circle ">
                                            <li>
                                                <a href="javascript:;" data-original-title="amazon" class="amazon"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="behance" class="behance"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="blogger" class="blogger"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="deviantart" class="deviantart"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="dribbble" class="dribbble"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="dropbox" class="dropbox"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="facebook" class="facebook"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="forrst" class="forrst"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="github" class="github"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="Goole Plus" class="googleplus"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="jolicloud" class="jolicloud"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="last-fm" class="last-fm"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="linkedin" class="linkedin"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="picasa" class="picasa"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="pintrest" class="pintrest"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="rss" class="rss"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="skype" class="skype"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="spotify" class="spotify"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="stumbleupon" class="stumbleupon"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="tumblr" class="tumblr"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="twitter" class="twitter"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="vimeo" class="vimeo"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="wordpress" class="wordpress"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="xing" class="xing"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="yahoo" class="yahoo"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="youtube" class="youtube"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="vk" class="vk"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="instagram" class="instagram"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="reddit" class="reddit"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="aboutme" class="aboutme"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="flickr" class="flickr"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="foursquare" class="foursquare"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="gravatar" class="gravatar"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="klout" class="klout"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="myspace" class="myspace"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="quora" class="quora"> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- END BLOCK BUTTONS PORTLET-->
                                <!-- BEGIN BLOCK BUTTONS PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green-sharp"></i>
                                            <span class="caption-subject font-green-sharp bold uppercase">Inline Social Icons</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body util-btn-margin-bottom-5">
                                        <a href="javascript:;" data-original-title="amazon" class="social-icon social-icon-circle amazon"> </a>
                                        <a href="javascript:;" data-original-title="behance" class="social-icon social-icon-circle behance"> </a>
                                        <a href="javascript:;" data-original-title="blogger" class="social-icon social-icon-circle blogger"> </a>
                                        <a href="javascript:;" data-original-title="deviantart" class="social-icon social-icon-circle deviantart"> </a>
                                        <a href="javascript:;" data-original-title="dribbble" class="social-icon social-icon-circle dribbble"> </a>
                                        <a href="javascript:;" data-original-title="dropbox" class="social-icon social-icon-circle dropbox"> </a>
                                        <a href="javascript:;" data-original-title="facebook" class="social-icon social-icon-circle facebook"> </a>
                                        <a href="javascript:;" data-original-title="forrst" class="social-icon social-icon-circle forrst"> </a>
                                        <a href="javascript:;" data-original-title="github" class="social-icon social-icon-circle github"> </a>
                                        <a href="javascript:;" data-original-title="Goole Plus" class="social-icon social-icon-circle googleplus"> </a>
                                        <a href="javascript:;" data-original-title="jolicloud" class="social-icon social-icon-circle jolicloud"> </a>
                                        <a href="javascript:;" data-original-title="last-fm" class="social-icon social-icon-circle last-fm"> </a>
                                        <a href="javascript:;" data-original-title="linkedin" class="social-icon social-icon-circle linkedin"> </a>
                                        <a href="javascript:;" data-original-title="picasa" class="social-icon social-icon-circle picasa"> </a>
                                        <a href="javascript:;" data-original-title="pintrest" class="social-icon social-icon-circle pintrest"> </a>
                                        <a href="javascript:;" data-original-title="rss" class="social-icon social-icon-circle rss"> </a>
                                        <a href="javascript:;" data-original-title="skype" class="social-icon social-icon-circle skype"> </a>
                                        <a href="javascript:;" data-original-title="spotify" class="social-icon social-icon-circle spotify"> </a>
                                        <a href="javascript:;" data-original-title="stumbleupon" class="social-icon social-icon-circle stumbleupon"> </a>
                                        <a href="javascript:;" data-original-title="tumblr" class="social-icon social-icon-circle tumblr"> </a>
                                        <a href="javascript:;" data-original-title="twitter" class="social-icon social-icon-circle twitter"> </a>
                                        <a href="javascript:;" data-original-title="vimeo" class="social-icon social-icon-circle vimeo"> </a>
                                        <a href="javascript:;" data-original-title="wordpress" class="social-icon social-icon-circle wordpress"> </a>
                                        <a href="javascript:;" data-original-title="xing" class="social-icon social-icon-circle xing"> </a>
                                        <a href="javascript:;" data-original-title="yahoo" class="social-icon social-icon-circle yahoo"> </a>
                                        <a href="javascript:;" data-original-title="youtube" class="social-icon social-icon-circle youtube"> </a>
                                        <a href="javascript:;" data-original-title="vk" class="social-icon social-icon-circle vk"> </a>
                                        <a href="javascript:;" data-original-title="instagram" class="social-icon social-icon-circle instagram"> </a>
                                        <a href="javascript:;" data-original-title="reddit" class="social-icon social-icon-circle reddit"> </a>
                                        <a href="javascript:;" data-original-title="aboutme" class="social-icon social-icon-circle aboutme"> </a>
                                        <a href="javascript:;" data-original-title="flickr" class="social-icon social-icon-circle flickr"> </a>
                                        <a href="javascript:;" data-original-title="foursquare" class="social-icon social-icon-circle foursquare"> </a>
                                        <a href="javascript:;" data-original-title="gravatar" class="social-icon social-icon-circle gravatar"> </a>
                                        <a href="javascript:;" data-original-title="klout" class="social-icon social-icon-circle klout"> </a>
                                        <a href="javascript:;" data-original-title="myspace" class="social-icon social-icon-circle myspace"> </a>
                                        <a href="javascript:;" data-original-title="quora" class="social-icon social-icon-circle quora"> </a>
                                    </div>
                                </div>
                                <!-- END BLOCK BUTTONS PORTLET-->
                                <!-- BEGIN BLOCK BUTTONS PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green-sharp"></i>
                                            <span class="caption-subject font-green-sharp bold uppercase">Social Icons(Colored)</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <ul class="social-icons social-icons-color social-icons-circle">
                                            <li>
                                                <a href="javascript:;" data-original-title="amazon" class="amazon"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="behance" class="behance"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="blogger" class="blogger"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="deviantart" class="deviantart"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="dribbble" class="dribbble"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="dropbox" class="dropbox"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="facebook" class="facebook"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="forrst" class="forrst"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="github" class="github"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="Goole Plus" class="googleplus"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="jolicloud" class="jolicloud"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="last-fm" class="last-fm"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="linkedin" class="linkedin"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="picasa" class="picasa"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="pintrest" class="pintrest"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="rss" class="rss"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="skype" class="skype"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="spotify" class="spotify"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="stumbleupon" class="stumbleupon"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="tumblr" class="tumblr"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="twitter" class="twitter"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="vimeo" class="vimeo"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="wordpress" class="wordpress"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="xing" class="xing"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="yahoo" class="yahoo"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="youtube" class="youtube"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="vk" class="vk"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="instagram" class="instagram"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="reddit" class="reddit"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="aboutme" class="aboutme"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="flickr" class="flickr"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="foursquare" class="foursquare"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="gravatar" class="gravatar"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="klout" class="klout"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="myspace" class="myspace"> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-original-title="quora" class="quora"> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- END BLOCK BUTTONS PORTLET-->
                                <!-- BEGIN BLOCK BUTTONS PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green-sharp"></i>
                                            <span class="caption-subject font-green-sharp bold uppercase">Inline Social Icons(Colored)</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body util-btn-margin-bottom-5">
                                        <a href="javascript:;" data-original-title="amazon" class="social-icon social-icon-color social-icon-circle  amazon"> </a>
                                        <a href="javascript:;" data-original-title="behance" class="social-icon social-icon-color social-icon-circle  behance"> </a>
                                        <a href="javascript:;" data-original-title="blogger" class="social-icon social-icon-color social-icon-circle blogger"> </a>
                                        <a href="javascript:;" data-original-title="deviantart" class="social-icon social-icon-color social-icon-circle deviantart"> </a>
                                        <a href="javascript:;" data-original-title="dribbble" class="social-icon social-icon-color social-icon-circle dribbble"> </a>
                                        <a href="javascript:;" data-original-title="dropbox" class="social-icon social-icon-color social-icon-circle dropbox"> </a>
                                        <a href="javascript:;" data-original-title="facebook" class="social-icon social-icon-color social-icon-circle facebook"> </a>
                                        <a href="javascript:;" data-original-title="forrst" class="social-icon social-icon-color social-icon-circle forrst"> </a>
                                        <a href="javascript:;" data-original-title="github" class="social-icon social-icon-color social-icon-circle github"> </a>
                                        <a href="javascript:;" data-original-title="Goole Plus" class="social-icon social-icon-color social-icon-circle googleplus"> </a>
                                        <a href="javascript:;" data-original-title="jolicloud" class="social-icon social-icon-color social-icon-circle jolicloud"> </a>
                                        <a href="javascript:;" data-original-title="last-fm" class="social-icon social-icon-color social-icon-circle last-fm"> </a>
                                        <a href="javascript:;" data-original-title="linkedin" class="social-icon social-icon-color social-icon-circle linkedin"> </a>
                                        <a href="javascript:;" data-original-title="picasa" class="social-icon social-icon-color social-icon-circle picasa"> </a>
                                        <a href="javascript:;" data-original-title="pintrest" class="social-icon social-icon-color social-icon-circle pintrest"> </a>
                                        <a href="javascript:;" data-original-title="rss" class="social-icon social-icon-color social-icon-circle rss"> </a>
                                        <a href="javascript:;" data-original-title="skype" class="social-icon social-icon-color social-icon-circle skype"> </a>
                                        <a href="javascript:;" data-original-title="spotify" class="social-icon social-icon-color social-icon-circle spotify"> </a>
                                        <a href="javascript:;" data-original-title="stumbleupon" class="social-icon social-icon-color social-icon-circle stumbleupon"> </a>
                                        <a href="javascript:;" data-original-title="tumblr" class="social-icon social-icon-color social-icon-circle tumblr"> </a>
                                        <a href="javascript:;" data-original-title="twitter" class="social-icon social-icon-color social-icon-circle twitter"> </a>
                                        <a href="javascript:;" data-original-title="vimeo" class="social-icon social-icon-color social-icon-circle vimeo"> </a>
                                        <a href="javascript:;" data-original-title="wordpress" class="social-icon social-icon-color social-icon-circle  wordpress"> </a>
                                        <a href="javascript:;" data-original-title="xing" class="social-icon social-icon-color social-icon-circle xing"> </a>
                                        <a href="javascript:;" data-original-title="yahoo" class="social-icon social-icon-color social-icon-circle yahoo"> </a>
                                        <a href="javascript:;" data-original-title="youtube" class="social-icon social-icon-color social-icon-circle youtube"> </a>
                                        <a href="javascript:;" data-original-title="vk" class="social-icon social-icon-color social-icon-circle vk"> </a>
                                        <a href="javascript:;" data-original-title="instagram" class="social-icon social-icon-color social-icon-circle instagram"> </a>
                                        <a href="javascript:;" data-original-title="reddit" class="social-icon social-icon-color social-icon-circle reddit"> </a>
                                        <a href="javascript:;" data-original-title="aboutme" class="social-icon social-icon-color social-icon-circle aboutme"> </a>
                                        <a href="javascript:;" data-original-title="flickr" class="social-icon social-icon-color social-icon-circle flickr"> </a>
                                        <a href="javascript:;" data-original-title="foursquare" class="social-icon social-icon-color social-icon-circle foursquare"> </a>
                                        <a href="javascript:;" data-original-title="gravatar" class="social-icon social-icon-color social-icon-circle gravatar"> </a>
                                        <a href="javascript:;" data-original-title="klout" class="social-icon social-icon-color social-icon-circle klout"> </a>
                                        <a href="javascript:;" data-original-title="myspace" class="social-icon social-icon-color social-icon-circle myspace"> </a>
                                        <a href="javascript:;" data-original-title="quora" class="social-icon social-icon-color social-icon-circle quora"> </a>
                                    </div>
                                </div>
                                <!-- END BLOCK BUTTONS PORTLET-->
                            </div>
                            <div class="col-md-6">
                                <!-- BEGIN BLOCK BUTTONS PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-red-mint"></i>
                                            <span class="caption-subject font-red-mint bold uppercase">Button Groups</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="clearfix">
                                            <h4 class="block">Basic Example</h4>
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn btn-default">Left</button>
                                                <button type="button" class="btn btn-default">Middle</button>
                                                <button type="button" class="btn btn-default">Right</button>
                                            </div>
                                            <div class="btn-group btn-group-circle btn-group-solid">
                                                <button type="button" class="btn red">Left</button>
                                                <button type="button" class="btn yellow">Middle</button>
                                                <button type="button" class="btn green">Right</button>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Button Toolbar</h4>
                                            <div class="btn-toolbar margin-bottom-10">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-default">1</button>
                                                    <button type="button" class="btn btn-default">2</button>
                                                    <button type="button" class="btn btn-default">3</button>
                                                    <button type="button" class="btn btn-default">4</button>
                                                </div>
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-default">5</button>
                                                    <button type="button" class="btn btn-default">6</button>
                                                    <button type="button" class="btn btn-default">7</button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-circle btn-default">8</button>
                                                </div>
                                            </div>
                                            <div class="btn-toolbar">
                                                <div class="btn-group btn-group-circle btn-group-solid">
                                                    <button type="button" class="btn red">1</button>
                                                    <button type="button" class="btn green">2</button>
                                                    <button type="button" class="btn blue">3</button>
                                                    <button type="button" class="btn yellow">4</button>
                                                </div>
                                                <div class="btn-group btn-group-circle btn-group-solid">
                                                    <button type="button" class="btn purple">5</button>
                                                    <button type="button" class="btn dark">6</button>
                                                    <button type="button" class="btn default">7</button>
                                                </div>
                                                <div class="btn-group btn-group-solid">
                                                    <button type="button" class="btn btn-circle red">8</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Button Group Sizing</h4>
                                            <div class="btn-toolbar">
                                                <div class="btn-group btn-group-circle btn-group-lg btn-group-solid margin-bottom-10">
                                                    <button type="button" class="btn red">Left</button>
                                                    <button type="button" class="btn green">Middle</button>
                                                    <button type="button" class="btn blue">Right</button>
                                                </div>
                                            </div>
                                            <div class="btn-toolbar margin-bottom-10">
                                                <div class="btn-group btn-group-circle btn-group-solid">
                                                    <button type="button" class="btn red">Left</button>
                                                    <button type="button" class="btn green">Middle</button>
                                                    <button type="button" class="btn blue">Right</button>
                                                </div>
                                            </div>
                                            <div class="btn-toolbar margin-bottom-10">
                                                <div class="btn-group btn-group-circle btn-group-sm btn-group-solid">
                                                    <button type="button" class="btn red">Left</button>
                                                    <button type="button" class="btn green">Middle</button>
                                                    <button type="button" class="btn blue">Right</button>
                                                </div>
                                            </div>
                                            <div class="btn-toolbar margin-bottom-10">
                                                <div class="btn-group btn-group-circle btn-group-xs btn-group-solid">
                                                    <button type="button" class="btn red">Left</button>
                                                    <button type="button" class="btn green">Middle</button>
                                                    <button type="button" class="btn blue">Right</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Nesting Button Group</h4>
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn btn-default">
                                                    <i class="fa fa-user"></i> Profile</button>
                                                <button type="button" class="btn btn-default">
                                                    <i class="fa fa-cogs"></i> Settings</button>
                                                <button type="button" class="btn btn-default">
                                                    <i class="fa fa-bullhorn"></i> Feeds</button>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-circle-right dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-horizontal"></i> More
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="clearfix margin-bottom-10"> </div>
                                            <div class="btn-group btn-group-circle btn-group-solid">
                                                <button type="button" class="btn red">
                                                    <i class="fa fa-user"></i> Profile</button>
                                                <button type="button" class="btn green">
                                                    <i class="fa fa-cogs"></i> Settings</button>
                                                <button type="button" class="btn purple">
                                                    <i class="fa fa-bullhorn"></i> Feeds</button>
                                                <div class="btn-group btn-group-solid">
                                                    <button type="button" class="btn blue  btn-circle-right dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-horizontal"></i> More
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Vertical variation</h4>
                                            <div class="btn-group-vertical btn-group-vertical-circle margin-right-10">
                                                <button type="button" class="btn btn-default">Button</button>
                                                <div class="btn-group">
                                                    <button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> Dropdown
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop1">
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button type="button" class="btn btn-default">Button</button>
                                                <div class="btn-group">
                                                    <button id="btnGroupVerticalDrop4" type="button" class="btn btn-circle-bottom btn-default dropdown-toggle" data-toggle="dropdown"> Dropdown
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop4">
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="btn-group-vertical btn-group-vertical-circle btn-group-solid">
                                                <button type="button" class="btn btn-circle green">Button</button>
                                                <div class="btn-group">
                                                    <button id="btnGroupVerticalDrop5" type="button" class="btn yellow dropdown-toggle" data-toggle="dropdown"> Dropdown
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop5">
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button type="button" class="btn dark">Button</button>
                                                <div class="btn-group">
                                                    <button id="btnGroupVerticalDrop8" type="button" class="btn btn-circle-bottom yellow dropdown-toggle" data-toggle="dropdown"> Dropdown
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop8">
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Dropdown link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Justified Link Variation</h4>
                                            <div class="btn-group btn-group-circle btn-group-justified">
                                                <a href="javascript:;" class="btn btn-default"> Left </a>
                                                <a href="javascript:;" class="btn btn-default"> Middle </a>
                                                <a href="javascript:;" class="btn btn-default"> Right </a>
                                            </div>
                                            <div class="clearfix margin-bottom-10"> </div>
                                            <div class="btn-group btn-group-circle btn-group btn-group-justified">
                                                <a href="javascript:;" class="btn red"> Left </a>
                                                <a href="javascript:;" class="btn blue"> Middle </a>
                                                <a href="javascript:;" class="btn green"> Right </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END BLOCK BUTTONS PORTLET-->
                                <!-- BEGIN DROPDOWNS PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green-sharp"></i>
                                            <span class="caption-subject font-green-sharp bold uppercase">Dropdowns</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="dropdown_1">
                                                <h4 class="block">Dropdown buttons</h4>
                                                <div class="btn-group">
                                                    <a class="btn btn-circle btn-default dropdown-toggle" data-toggle="dropdown" href="javascript:;"> Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="javascript:;"> Settings
                                                                <span class="badge badge-success"> 3 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Preferences </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Window Options </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Help
                                                                <span class="badge badge-danger"> 7 </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-circle red dropdown-toggle" data-toggle="dropdown">Primary
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="javascript:;"> Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action
                                                                <span class="badge badge-warning"> 2 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link
                                                                <span class="badge badge-info"> 7 </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-circle purple dropdown-toggle" data-toggle="dropdown">Success
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="javascript:;"> Action
                                                                <span class="badge badge-inverse"> 7 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link
                                                                <span class="badge"> 4 </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h4 class="block">Dropdown button with icons</h4>
                                                <div class="btn-toolbar">
                                                    <div class="btn-group">
                                                        <a class="btn btn-circle green" href="javascript:;" data-toggle="dropdown">
                                                            <i class="fa fa-user"></i> User
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-pencil"></i> Edit </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-trash-o"></i> Delete </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-ban"></i> Ban </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="i"></i> Make admin </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a class="btn btn-circle purple" href="javascript:;" data-toggle="dropdown">
                                                            <i class="fa fa-user"></i> Settings
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-plus"></i> Add </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-trash-o"></i> Edit </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-times"></i> Delete </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="i"></i> Full Settings </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="well margin-top-10">
                                                    <h4>Dropup menu options.</h4>
                                                    <div class="btn-group">
                                                        <button class="btn btn-circle blue dropdown-toggle" data-toggle="dropdown">Info
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu bottom-up">
                                                            <li>
                                                                <a href="javascript:;"> Action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Another action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Something else here </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;"> Separated link </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button class="btn btn-circle black dropdown-toggle" data-toggle="dropdown">Inverse
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu bottom-up">
                                                            <li>
                                                                <a href="javascript:;"> Action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Another action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Something else here </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;"> Separated link </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <p>
                                                        <span class="label label-success"> NOTE: </span> &nbsp; By adding <code>bottom-up</code> class you make dropup menu. </p>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="dropdown_2">
                                                <h4 class="block">Hoverable Dropdown Buttons</h4>
                                                <div class="btn-group">
                                                    <a class="btn btn-circle dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true" href="javascript:;"> Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="javascript:;"> Settings
                                                                <span class="badge badge-success"> 3 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Preferences </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Window Options </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Help
                                                                <span class="badge badge-danger"> 7 </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-circle red dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">Primary
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="javascript:;"> Action
                                                                <span class="badge badge-warning"> 7 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action
                                                                <span class="badge badge-danger"> 2 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link
                                                                <span class="badge badge-info"> 4 </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-circle purple dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">Success
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="javascript:;"> Action
                                                                <span class="badge badge-inverse"> 7 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link
                                                                <span class="badge"> 4 </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="btn-toolbar hide">
                                                    <div class="btn-group">
                                                        <button class="btn btn-circle green dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">Success
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="javascript:;"> Action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Another action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Something else here </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;"> Separated link </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group">
                                                        <button class="btn btn-circle blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">Info
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="javascript:;"> Action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Another action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Something else here </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;"> Separated link </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group">
                                                        <button class="btn btn-circle black dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">Inverse
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu opens-left">
                                                            <li>
                                                                <a href="javascript:;"> Action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Another action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Something else here </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;"> Separated link </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <h4 class="block">Hoverable Dropdown Buttons with Icons</h4>
                                                <div class="btn-toolbar">
                                                    <div class="btn-group">
                                                        <a class="btn btn-circle green" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                                                            <i class="fa fa-user"></i> User
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-pencil"></i> Edit </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-trash-o"></i> Delete </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-ban"></i> Ban </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="i"></i> Make admin </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a class="btn btn-circle purple" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                                                            <i class="fa fa-user"></i> Settings
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-plus"></i> Add </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-trash-o"></i> Edit </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-times"></i> Delete </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="i"></i> Full Settings </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="well">
                                                    <h4 class="block">Hoverable Dropdown Buttons Dropdown with Checkboxes.</h4>
                                                    <div class="btn-group">
                                                        <a class="btn btn-circle green" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Options #1
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <div class="dropdown-menu hold-on-click dropdown-checkboxes">
                                                            <label>
                                                                <input type="checkbox">Option 1</label>
                                                            <label>
                                                                <input type="checkbox">Option 2</label>
                                                            <label>
                                                                <input type="checkbox">Option 3</label>
                                                            <label>
                                                                <input type="checkbox">Option 4</label>
                                                            <label>
                                                                <input type="checkbox">Option 5</label>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a class="btn btn-circle red" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Options #2
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <div class="dropdown-menu hold-on-click dropdown-checkboxes">
                                                            <label>
                                                                <input type="checkbox">Option 1</label>
                                                            <label>
                                                                <input type="checkbox" checked>Option 2</label>
                                                            <label>
                                                                <input type="checkbox">Option 3</label>
                                                            <label>
                                                                <input type="checkbox" checked>Option 4</label>
                                                            <label>
                                                                <input type="checkbox">Option 5</label>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        <span class="label label-success"> NOTE: </span> &nbsp; By adding <code>hold-on-click</code> class you can avoid closing the dropdown on click </p>
                                                </div>
                                                <div class="well">
                                                    <h4 class="block">Hoverable Dropup Buttons.</h4>
                                                    <div class="btn-group">
                                                        <button class="btn btn-circle blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">Info
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu bottom-up">
                                                            <li>
                                                                <a href="javascript:;"> Action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Another action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Something else here </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;"> Separated link </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group">
                                                        <button class="btn btn-circle black dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">Inverse
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu bottom-up">
                                                            <li>
                                                                <a href="javascript:;"> Action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Another action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Something else here </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;"> Separated link </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <p>
                                                        <span class="label label-success"> NOTE: </span> &nbsp; By adding <code>bottom-up</code> class you make dropup menu. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END DROPDOWNS PORTLET-->
                                <!-- BEGIN DROPDOWNS PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green-sharp"></i>
                                            <span class="caption-subject font-green-sharp bold uppercase">Button Dropdowns</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body util-btn-group-margin-bottom-5">
                                        <div class="clearfix">
                                            <h4 class="block">Default Bootstrap Style</h4>
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn btn-default">Default</button>
                                                <button type="button" class="btn btn-circle-right btn-default dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn btn-primary">Primary</button>
                                                <button type="button" class="btn btn-circle-right btn-primary dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn btn-success">Success</button>
                                                <button type="button" class="btn btn-circle-right btn-success dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn btn-info">Info</button>
                                                <button type="button" class="btn btn-circle-right btn-info dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn btn-warning">Warning</button>
                                                <button type="button" class="btn btn-circle-right btn-warning dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn btn-danger">Danger</button>
                                                <button type="button" class="btn btn-circle-right btn-danger dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Metronic Style</h4>
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn default">Default</button>
                                                <button type="button" class="btn btn-circle-right default dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn blue">Blue</button>
                                                <button type="button" class="btn btn-circle-right blue dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn green">Green</button>
                                                <button type="button" class="btn btn-circle-right green dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn red">Red</button>
                                                <button type="button" class="btn btn-circle-right red dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn yellow">Yellow</button>
                                                <button type="button" class="btn btn-circle-right yellow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn dark">Dark</button>
                                                <button type="button" class="btn btn-circle-right dark dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu btn-group-circle" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn purple">Purple</button>
                                                <button type="button" class="btn btn-circle-right purple dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Dropdowns with Multilevel Submenu</h4>
                                            <!-- Large button group -->
                                            <div class="btn-group">
                                                <button class="btn btn-circle blue dropdown-toggle" type="button" data-toggle="dropdown"> Dropdown
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li class="dropdown-submenu">
                                                        <a href="javascript:;"> More options </a>
                                                        <ul class="dropdown-menu" style="">
                                                            <li>
                                                                <a href="javascript:;"> Second level link </a>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a href="javascript:;"> More options </a>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="index.html"> Third level link </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="index.html"> Third level link </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="index.html"> Third level link </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="index.html"> Third level link </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="index.html"> Third level link </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="index.html"> Second level link </a>
                                                            </li>
                                                            <li>
                                                                <a href="index.html"> Second level link </a>
                                                            </li>
                                                            <li>
                                                                <a href="index.html"> Second level link </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="btn-group dropup">
                                                <button class="btn btn-circle green dropdown-toggle" type="button" data-toggle="dropdown"> Dropup
                                                    <i class="fa fa-angle-up"></i>
                                                </button>
                                                <ul class="dropdown-menu pull-right" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li class="dropdown-submenu">
                                                        <a href="javascript:;"> More options </a>
                                                        <ul class="dropdown-menu" style="">
                                                            <li>
                                                                <a href="javascript:;"> Second level link </a>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a href="javascript:;"> More options </a>
                                                                <ul class="dropdown-menu pull-right">
                                                                    <li>
                                                                        <a href="index.html"> Third level link </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="index.html"> Third level link </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="index.html"> Third level link </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="index.html"> Third level link </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="index.html"> Third level link </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="index.html"> Second level link </a>
                                                            </li>
                                                            <li>
                                                                <a href="index.html"> Second level link </a>
                                                            </li>
                                                            <li>
                                                                <a href="index.html"> Second level link </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Sizing</h4>
                                            <!-- Large button group -->
                                            <div class="btn-group">
                                                <button class="btn btn-circle btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown"> Large button
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Small button group -->
                                            <div class="btn-group">
                                                <button class="btn btn-circle btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown"> Small button
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Extra small button group -->
                                            <div class="btn-group">
                                                <button class="btn btn-circle btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown"> Extra small button
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="clearfix margin-bottom-10"> </div>
                                            <!-- Large button group -->
                                            <div class="btn-group">
                                                <button class="btn btn-circle red btn-lg dropdown-toggle" type="button" data-toggle="dropdown"> Large button
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Small button group -->
                                            <div class="btn-group">
                                                <button class="btn btn-circle blue btn-sm dropdown-toggle" type="button" data-toggle="dropdown"> Small button
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Extra small button group -->
                                            <div class="btn-group">
                                                <button class="btn btn-circle green btn-sm dropdown-toggle" type="button" data-toggle="dropdown"> Extra small button
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"> Action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Another action </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Something else here </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;"> Separated link </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Dropup</h4>
                                            <div class="btn-toolbar margin-bottom-10">
                                                <div class="btn-group btn-group-circle dropup">
                                                    <button type="button" class="btn btn-default">Dropup</button>
                                                    <button type="button" class="btn btn-circle-right btn-default dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-angle-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="javascript:;"> Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                                <div class="btn-group btn-group-circle dropup">
                                                    <button type="button" class="btn btn-primary">Right dropup</button>
                                                    <button type="button" class="btn btn-circle-right btn-primary dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-angle-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right" role="menu">
                                                        <li>
                                                            <a href="javascript:;"> Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                            </div>
                                            <div class="btn-toolbar">
                                                <div class="btn-group btn-group-circle dropup">
                                                    <button type="button" class="btn blue">Dropup</button>
                                                    <button type="button" class="btn btn-circle-right blue dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-angle-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="javascript:;"> Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                                <div class="btn-group btn-group-circle dropup">
                                                    <button type="button" class="btn green">Right dropup</button>
                                                    <button type="button" class="btn btn-circle-right green dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-angle-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right" role="menu">
                                                        <li>
                                                            <a href="javascript:;"> Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Hoveralbe Dropdowns</h4>
                                            <div class="btn-toolbar margin-bottom-10">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-default">Dropdown</button>
                                                    <button type="button" class="btn btn-circle-right btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="javascript:;"> Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                                <div class="btn-group btn-group-circle dropup">
                                                    <button type="button" class="btn btn-primary">Dropup</button>
                                                    <button type="button" class="btn btn-circle-right btn-primary dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                                                        <i class="fa fa-angle-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="javascript:;"> Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-circle btn-success dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Dropup
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="javascript:;"> Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                            </div>
                                            <div class="btn-toolbar">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn blue">Dropdown</button>
                                                    <button type="button" class="btn btn-circle-right blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="javascript:;"> Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                                <div class="btn-group btn-group-circle dropup">
                                                    <button type="button" class="btn green">Dropup</button>
                                                    <button type="button" class="btn btn-circle-right green dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                                                        <i class="fa fa-angle-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="javascript:;"> Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-circle yellow dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Dropdown
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="javascript:;"> Action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Something else here </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Dropdown with Checkboxes & Search Form</h4>
                                            <div class="btn-group">
                                                <button class="btn btn-circle green dropdown-toggle" type="button" data-toggle="dropdown"> Search Dropdown
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-content input-large hold-on-click" role="menu">
                                                    <form action="#">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="search...">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-circle-right blue" type="submit">Go!</button>
                                                            </span>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn blue">Dropdown</button>
                                                <button type="button" class="btn btn-circle-right blue dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="dropdown-menu hold-on-click dropdown-checkboxes" role="menu">
                                                    <label>
                                                        <input type="checkbox">Option 1</label>
                                                    <label>
                                                        <input type="checkbox" checked>Option 2</label>
                                                    <label>
                                                        <input type="checkbox">Option 3</label>
                                                    <label>
                                                        <input type="checkbox" checked>Option 4</label>
                                                    <label>
                                                        <input type="checkbox">Option 5</label>
                                                </div>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group dropup btn-group-circle">
                                                <button type="button" class="btn green">Dropup</button>
                                                <button type="button" class="btn btn-circle-right green dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-up"></i>
                                                </button>
                                                <div class="dropdown-menu hold-on-click dropdown-checkboxes" role="menu">
                                                    <label>
                                                        <input type="checkbox">Option 1</label>
                                                    <label>
                                                        <input type="checkbox" checked>Option 2</label>
                                                    <label>
                                                        <input type="checkbox">Option 3</label>
                                                    <label>
                                                        <input type="checkbox" checked>Option 4</label>
                                                    <label>
                                                        <input type="checkbox">Option 5</label>
                                                </div>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="clearfix margin-top-10">
                                                <span class="label label-success"> NOTE: </span> &nbsp; By adding <code>hold-on-click</code> class you can avoid closing the dropdown on click </div>
                                        </div>
                                        <div class="clearfix">
                                            <h4 class="block">Dropdown with Radio Buttons</h4>
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn blue">Dropdown</button>
                                                <button type="button" class="btn btn-circle-right blue dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="dropdown-menu hold-on-click dropdown-radiobuttons" role="menu">
                                                    <label>
                                                        <input type="radio" name="radio_button_1">Option 1</label>
                                                    <label>
                                                        <input type="radio" name="radio_button_1">Option 2</label>
                                                    <label>
                                                        <input type="radio" name="radio_button_1">Option 3</label>
                                                    <label>
                                                        <input type="radio" name="radio_button_1">Option 4</label>
                                                    <label>
                                                        <input type="radio" name="radio_button_1">Option 5</label>
                                                </div>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group btn-group-circle dropup">
                                                <button type="button" class="btn green">Dropup</button>
                                                <button type="button" class="btn btn-circle-right green dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-angle-up"></i>
                                                </button>
                                                <div class="dropdown-menu hold-on-click dropdown-radiobuttons" role="menu">
                                                    <label>
                                                        <input type="radio" name="radio_button_2">Option 1</label>
                                                    <label>
                                                        <input type="radio" name="radio_button_2">Option 2</label>
                                                    <label>
                                                        <input type="radio" name="radio_button_2">Option 3</label>
                                                    <label>
                                                        <input type="radio" name="radio_button_2">Option 4</label>
                                                    <label>
                                                        <input type="radio" name="radio_button_2">Option 5</label>
                                                </div>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="clearfix margin-top-10">
                                                <span class="label label-success"> NOTE: </span> &nbsp; By adding <code>hold-on-click</code> class you can avoid closing the dropdown on click </div>
                                        </div>
                                    </div>
                                    <!-- END DROPDOWNS PORTLET-->
                                </div>
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green-sharp"></i>
                                            <span class="caption-subject font-green-sharp bold uppercase">Button States</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body util-btn-margin-bottom-5">
                                        <h4>Loading State</h4>
                                        <div class="clearfix">
                                            <button type="button" data-loading-text="Loading..." class="demo-loading-btn btn-circle btn btn-circle btn-primary"> Loading state </button>
                                            <button type="button" data-loading-text="Loading..." class="demo-loading-btn btn-circle btn btn-circle btn-default"> Loading state </button>
                                            <button type="button" data-loading-text="Loading..." class="demo-loading-btn btn-circle btn btn-circle red"> Loading state </button>
                                            <button type="button" data-loading-text="Loading..." class="demo-loading-btn btn-circle btn btn-circle blue"> Loading state </button>
                                        </div>
                                        <h4>Single Toggle</h4>
                                        <div class="clearfix">
                                            <button type="button" class="btn btn-circle btn-primary" data-toggle="button"> Single toggle </button>
                                            <button type="button" class="btn btn-circle btn-default" data-toggle="button"> Single toggle </button>
                                            <button type="button" class="btn btn-circle red" data-toggle="button"> Single toggle </button>
                                            <button type="button" class="btn btn-circle blue" data-toggle="button"> Single toggle </button>
                                        </div>
                                        <h4>Checkbox</h4>
                                        <div class="clearfix">
                                            <div class="btn-group btn-group-circle" data-toggle="buttons">
                                                <label class="btn default active">
                                                    <input type="checkbox" class="toggle"> Option 1 </label>
                                                <label class="btn default">
                                                    <input type="checkbox" class="toggle"> Option 2 </label>
                                                <label class="btn default">
                                                    <input type="checkbox" class="toggle"> Option 3 </label>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <div class="btn-group btn-group-circle" data-toggle="buttons">
                                                <label class="btn btn-default">
                                                    <input type="checkbox" class="toggle"> Option 1 </label>
                                                <label class="btn btn-default active">
                                                    <input type="checkbox" class="toggle"> Option 2 </label>
                                                <label class="btn btn-default">
                                                    <input type="checkbox" class="toggle"> Option 3 </label>
                                            </div>
                                        </div>
                                        <h4>Radio</h4>
                                        <div class="clearfix">
                                            <div class="btn-group btn-group-circle" data-toggle="buttons">
                                                <label class="btn blue active">
                                                    <input type="radio" class="toggle"> Option 1 </label>
                                                <label class="btn blue">
                                                    <input type="radio" class="toggle"> Option 2 </label>
                                                <label class="btn blue">
                                                    <input type="radio" class="toggle"> Option 3 </label>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <div class="btn-group btn-group-circle" data-toggle="buttons">
                                                <label class="btn btn-default active">
                                                    <input type="radio" class="toggle"> Option 1 </label>
                                                <label class="btn btn-default">
                                                    <input type="radio" class="toggle"> Option 2 </label>
                                                <label class="btn btn-default">
                                                    <input type="radio" class="toggle"> Option 3 </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
