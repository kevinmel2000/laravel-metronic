@extends('layouts.admin-1.master')

@section('title', 'FAQ')

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>General</span>
        </li>
    </ul>
@endsection

@section('content')
    <h1 class="page-title"> FAQ
        <small>general faq page</small>
    </h1>

    <div class="faq-page faq-content-1">
        <div class="search-bar ">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
            </div>
        </div>
        <div class="faq-content-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="faq-section ">
                        <h2 class="faq-title uppercase font-blue">General</h2>
                        <div class="panel-group accordion faq-content" id="accordion1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-circle"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1"> How do I vote or respond to a poll?</a>
                                    </h4>
                                </div>
                                <div id="collapse_1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-circle"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_2"> Do you accept purchase orders?</a>
                                    </h4>
                                </div>
                                <div id="collapse_2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-circle"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_3"> How many responses per poll (which plan) do I need?</a>
                                    </h4>
                                </div>
                                <div id="collapse_3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-circle"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_4"> What if my audience does not have a phone or a web-enabled device with internet access?</a>
                                    </h4>
                                </div>
                                <div id="collapse_4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-circle"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_6"> How fast do responses show up?</a>
                                    </h4>
                                </div>
                                <div id="collapse_6" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-section ">
                        <h2 class="faq-title uppercase font-blue">Technical</h2>
                        <div class="panel-group accordion faq-content" id="accordion3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-circle"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_1"> How do I vote or respond to a poll?</a>
                                    </h4>
                                </div>
                                <div id="collapse_3_1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-circle"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_2"> Do you accept purchase orders?</a>
                                    </h4>
                                </div>
                                <div id="collapse_3_2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-circle"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_3"> How many responses per poll (which plan) do I need?</a>
                                    </h4>
                                </div>
                                <div id="collapse_3_3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-circle"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_4"> What if my audience does not have a phone or a web-enabled device with internet access?</a>
                                    </h4>
                                </div>
                                <div id="collapse_3_4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-circle"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_5"> How can I share my poll with remote participants?</a>
                                    </h4>
                                </div>
                                <div id="collapse_3_5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-circle"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_6"> How fast do responses show up?</a>
                                    </h4>
                                </div>
                                <div id="collapse_3_6" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faq-section ">
                        <h2 class="faq-title uppercase font-blue">Pricing</h2>
                        <div class="panel-group accordion faq-content" id="accordion2">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-circle"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_1"> How much does it cost?</a>
                                    </h4>
                                </div>
                                <div id="collapse_2_1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-circle"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_2"> Do you accept purchase orders?</a>
                                    </h4>
                                </div>
                                <div id="collapse_2_2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-circle"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_3"> What is the K-12 classroom size promise?</a>
                                    </h4>
                                </div>
                                <div id="collapse_2_3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-circle"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_4"> What if my audience does not have a phone or a web-enabled device with internet access?</a>
                                    </h4>
                                </div>
                                <div id="collapse_2_4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-circle"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_5"> How can I share my poll with remote participants?</a>
                                    </h4>
                                </div>
                                <div id="collapse_2_5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-circle"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_6"> How fast do responses show up?</a>
                                    </h4>
                                </div>
                                <div id="collapse_2_6" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-section ">
                        <h2 class="faq-title uppercase font-blue">Admin Management</h2>
                        <div class="panel-group accordion faq-content" id="accordion4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-circle"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapse_4_1"> How do I vote or respond to a poll?</a>
                                    </h4>
                                </div>
                                <div id="collapse_4_1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-circle"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapse_4_2"> Do you accept purchase orders?</a>
                                    </h4>
                                </div>
                                <div id="collapse_4_2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-circle"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapse_4_3"> How many responses per poll (which plan) do I need?</a>
                                    </h4>
                                </div>
                                <div id="collapse_4_3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-circle"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapse_4_4"> What if my audience does not have a phone or a web-enabled device with internet access?</a>
                                    </h4>
                                </div>
                                <div id="collapse_4_4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-circle"></i>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapse_4_5"> How can I share my poll with remote participants?</a>
                                    </h4>
                                </div>
                                <div id="collapse_4_5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. </p>
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

@push('page-level-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/css/faq.min.css') }}">
@endpush

@push('page-level-scripts')
    <script>
        $('body').addClass('page-container-bg-solid');
    </script>
@endpush
