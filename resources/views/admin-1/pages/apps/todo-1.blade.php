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
@endsection
