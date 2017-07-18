@extends('layouts.admin-1.master')

@section('title', 'Todo #1')

@section('breadcrumb')
    <h3>ToDo App</h3>

    <ul class="todo-breadcrumb">
        <li>
            <a href="javascrip:;">Home</a>
        </li>
        <li>
            <a href="javascrip:;">Extra</a>
        </li>
        <li>
            <a class="todo-active" href="javascrip:;">Todo</a>
        </li>
    </ul>
@endsection

@section('content')
    <div class="todo-container">
        <div class="row">
            <div class="col-md-5">
                <ul class="todo-projects-container">
                    <li class="todo-padding-b-0">
                        <div class="todo-head">
                            <button class="btn btn-square btn-sm green todo-bold">Add Project</button>
                            <h3>Projects</h3>
                            <p>4 Waiting Attention</p>
                        </div>
                    </li>
                    <li class="todo-projects-item">
                        <h3>Metronic Admin Reborn</h3>
                        <p>Lorem dolor sit amet ipsum dolor sit consectetuer dolore. Lorem dolor sit amet ipsum dolor sit consectetuer dolore.</p>
                        <div class="todo-project-item-foot">
                            <p class="todo-red todo-inline">17 Tasks Remaining</p>
                            <p class="todo-inline todo-float-r">16 Members
                                <a class="todo-add-button" href="#todo-members-modal" data-toggle="modal">+</a>
                            </p>
                        </div>
                    </li>
                    <div class="todo-projects-divider"></div>
                    <li class="todo-projects-item todo-active">
                        <h3 class="todo-blue">Williams Logistics CRM</h3>
                        <p>Lorem dolor sit amet ipsum dolor sit consectetuer dolore. Lorem dolor sit amet ipsum dolor sit consectetuer dolore.</p>
                        <div class="todo-project-item-foot">
                            <p class="todo-red todo-inline">43 Tasks Remaining</p>
                            <p class="todo-inline todo-float-r">32 Members
                                <a class="todo-add-button" href="#todo-members-modal" data-toggle="modal">+</a>
                            </p>
                        </div>
                    </li>
                    <div class="todo-projects-divider"></div>
                    <li class="todo-projects-item">
                        <h3>Green Man & Van Tracking App</h3>
                        <p>Lorem dolor sit amet ipsum dolor sit consectetuer dolore. Lorem dolor sit amet ipsum dolor sit consectetuer dolore.</p>
                        <div class="todo-project-item-foot">
                            <p class="todo-red todo-inline">5 Tasks Remaining</p>
                            <p class="todo-inline todo-float-r">9 Members
                                <a class="todo-add-button" href="#todo-members-modal" data-toggle="modal">+</a>
                            </p>
                        </div>
                    </li>
                    <div class="todo-projects-divider"></div>
                    <li class="todo-projects-item">
                        <h3>Wall Mart Customer Care</h3>
                        <p>Lorem dolor sit amet ipsum dolor sit consectetuer dolore. Lorem dolor sit amet ipsum dolor sit consectetuer dolore.</p>
                        <div class="todo-project-item-foot">
                            <p class="todo-red todo-inline">27 Tasks Remaining</p>
                            <p class="todo-inline todo-float-r">54 Members
                                <a class="todo-add-button" href="#todo-members-modal" data-toggle="modal">+</a>
                            </p>
                        </div>
                    </li>
                    <div class="todo-projects-divider"></div>
                    <li class="todo-projects-item">
                        <h3>General Electric Website</h3>
                        <p>Lorem dolor sit amet ipsum dolor sit consectetuer dolore. Lorem dolor sit amet ipsum dolor sit consectetuer dolore.</p>
                        <div class="todo-project-item-foot">
                            <p class="todo-red todo-inline">11 Tasks Remaining</p>
                            <p class="todo-inline todo-float-r">9 Members
                                <a class="todo-add-button" href="#todo-members-modal" data-toggle="modal">+</a>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-7">
                <div class="todo-tasks-container">
                    <div class="todo-head">
                        <button class="btn btn-square btn-sm red todo-bold" data-toggle="modal" href="#todo-task-modal">New Task</button>
                        <h3>
                            <span class="todo-grey">Task:</span> Williams Logistics CRM</h3>
                        <p class="todo-inline">22 Members
                            <a class="todo-add-button" href="#todo-members-modal" data-toggle="modal">+</a>
                        </p>
                    </div>
                    <ul class="todo-tasks-content">
                        <li class="todo-tasks-item">
                            <h4 class="todo-inline">
                                <a data-toggle="modal" href="#todo-task-modal">Design for full featured ToDo Page with something</a>
                            </h4>
                            <p class="todo-inline todo-float-r">Bob,
                                <span class="todo-red">TODAY</span>
                            </p>
                        </li>
                        <li class="todo-tasks-item">
                            <h4 class="todo-inline">
                                <a data-toggle="modal" href="#todo-task-modal">Owl carousel pagination animation issue(clients logo, testimonials)</a>
                            </h4>
                            <p class="todo-inline todo-float-r">Shane,
                                <span class="todo-red">TODAY</span>
                            </p>
                        </li>
                        <li class="todo-tasks-item">
                            <h4 class="todo-inline">
                                <a data-toggle="modal" href="#todo-task-modal">Non fixed Home 2 header layout</a>
                            </h4>
                            <p class="todo-inline todo-float-r">Sean,
                                <span class="todo-green">01 OCT</span>
                            </p>
                        </li>
                        <li class="todo-tasks-item">
                            <h4 class="todo-inline">
                                <a data-toggle="modal" href="#todo-task-modal">Sample Images for Mega Menu Components Category</a>
                            </h4>
                            <p class="todo-inline todo-float-r">Shane,
                                <span class="todo-green">03 OCT</span>
                            </p>
                        </li>
                        <li class="todo-tasks-item">
                            <h4 class="todo-inline">
                                <a data-toggle="modal" href="#todo-task-modal">Browser & Device Compatibility</a>
                            </h4>
                            <p class="todo-inline todo-float-r">Bob,
                                <span class="todo-green">07 OCT</span>
                            </p>
                        </li>
                        <li class="todo-tasks-item">
                            <h4 class="todo-inline">
                                <a data-toggle="modal" href="#todo-task-modal">Sidebar Menu for Mobile</a>
                            </h4>
                            <p class="todo-inline todo-float-r">Alice,
                                <span class="todo-green">08 OCT</span>
                            </p>
                        </li>
                        <li class="todo-tasks-item">
                            <h4 class="todo-inline">
                                <a data-toggle="modal" href="#todo-task-modal">Sidebar Toggler optimization</a>
                            </h4>
                            <p class="todo-inline todo-float-r">Luke,
                                <span class="todo-green">08 OCT</span>
                            </p>
                        </li>
                        <li class="todo-tasks-item">
                            <h4 class="todo-inline">
                                <a data-toggle="modal" href="#todo-task-modal">Modals integration</a>
                            </h4>
                            <p class="todo-inline todo-float-r">John,
                                <span class="todo-green">10 OCT</span>
                            </p>
                        </li>
                        <li class="todo-tasks-item">
                            <h4 class="todo-inline">
                                <a data-toggle="modal" href="#todo-task-modal">Modals form functionality</a>
                            </h4>
                            <p class="todo-inline todo-float-r">Rudy,
                                <span class="todo-green">12 OCT</span>
                            </p>
                        </li>
                        <li class="todo-tasks-item">
                            <h4 class="todo-inline">
                                <a data-toggle="modal" href="#todo-task-modal">Responsive Optimization</a>
                            </h4>
                            <p class="todo-inline todo-float-r">Bob,
                                <span class="todo-green">15 OCT</span>
                            </p>
                        </li>
                        <li class="todo-tasks-item">
                            <h4 class="todo-inline">
                                <a data-toggle="modal" href="#todo-task-modal">Search and filter functionality testing</a>
                            </h4>
                            <p class="todo-inline todo-float-r">Hiro,
                                <span class="todo-green">24 OCT</span>
                            </p>
                        </li>
                        <li class="todo-tasks-item">
                            <h4 class="todo-inline">
                                <a data-toggle="modal" href="#todo-task-modal">User Acceptance Test Documentation</a>
                            </h4>
                            <p class="todo-inline todo-float-r">Kathy,
                                <span class="todo-green">28 OCT</span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="todo-task-modal" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content scroller" style="height: 100%;" data-always-visible="1" data-rail-visible="0">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <button class="btn btn-square btn-sm green todo-bold todo-inline">Complete Task</button>
                    <p class="todo-task-modal-title todo-inline">Due:
                        <input class="form-control input-inline input-medium date-picker todo-task-due todo-inline" size="16" type="text" value="10/01/2015" />
                    </p>
                    <p class="todo-task-modal-title todo-inline">Assign:
                        <a class="todo-inline todo-task-assign" href="#todo-members-modal" data-toggle="modal">Luke</a>
                    </p>
                </div>
                <div class="modal-body todo-task-modal-body">
                    <h3 class="todo-task-modal-bg">Sample Images for Mega Menu Components Category</h3>
                    <p class="todo-task-modal-bg"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                        suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                        <br>
                        <br> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                        suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                        <br>
                        <br> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                        suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                    <h4>Attach File
                        <a class="todo-add-button" href="javascrip:;">+</a>
                    </h4>
                    <p class="todo-task-file">
                        <i class="fa fa-file-o todo-grey"></i> menu_screen.jpg
                        <i class="fa fa-times todo-remove-file"></i>
                    </p>
                    <p class="todo-task-file">
                        <i class="fa fa-file-o todo-grey"></i> comments.jpg
                        <i class="fa fa-times todo-remove-file"></i>
                    </p>
                </div>
                <!-- BEGIN PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-bubble font-hide hide"></i>
                            <span class="caption-subject font-hide bold uppercase">Chats</span>
                        </div>
                        <div class="actions">
                            <div class="portlet-input input-inline">
                                <div class="input-icon right">
                                    <i class="icon-magnifier"></i>
                                    <input type="text" class="form-control input-circle" placeholder="search..."> </div>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body" id="chats">
                        <div class="scroller" style="height: 525px;" data-always-visible="1" data-rail-visible1="1">
                            <ul class="chats">
                                <li class="out">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Lisa Wong </a>
                                        <span class="datetime"> at 20:11 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Lisa Wong </a>
                                        <span class="datetime"> at 20:11 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="in">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar1.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Bob Nilson </a>
                                        <span class="datetime"> at 20:30 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="in">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar1.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Bob Nilson </a>
                                        <span class="datetime"> at 20:30 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Richard Doe </a>
                                        <span class="datetime"> at 20:33 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="in">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Richard Doe </a>
                                        <span class="datetime"> at 20:35 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar1.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Bob Nilson </a>
                                        <span class="datetime"> at 20:40 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="in">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Richard Doe </a>
                                        <span class="datetime"> at 20:40 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar1.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Bob Nilson </a>
                                        <span class="datetime"> at 20:54 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. sed diam nonummy nibh euismod tincidunt ut laoreet.
                                            </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="chat-form">
                            <div class="input-cont">
                                <input class="form-control" type="text" placeholder="Type a message here..." /> </div>
                            <div class="btn-cont">
                                <span class="arrow"> </span>
                                <a href="" class="btn blue icn-only">
                                    <i class="fa fa-check icon-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PORTLET-->
                <div class="modal-footer">
                    <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="btn green" data-dismiss="modal">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <div id="todo-members-modal" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Select a Member</h4>
                </div>
                <div class="modal-body">
                    <form action="#" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-md-4">Selected Members</label>
                            <div class="col-md-8">
                                <select id="select2_sample2" class="form-control select2 select-height" multiple>
                                    <optgroup label="Senior Developers">
                                        <option>Rudy</option>
                                        <option>Shane</option>
                                        <option>Sean</option>
                                    </optgroup>
                                    <optgroup label="Technical Team">
                                        <option>Kathy</option>
                                        <option>Luke</option>
                                        <option>John</option>
                                        <option>Darren</option>
                                    </optgroup>
                                    <optgroup label="Design Team">
                                        <option>Bob</option>
                                        <option>Carolina</option>
                                        <option>Randy</option>
                                        <option>Michael</option>
                                    </optgroup>
                                    <optgroup label="Testers">
                                        <option>Chris</option>
                                        <option>Louis</option>
                                        <option>Greg</option>
                                        <option>Ashe</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="btn green" data-dismiss="modal">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection
