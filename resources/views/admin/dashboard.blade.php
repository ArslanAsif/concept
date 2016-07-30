@extends('admin.layouts.admin')

@section('title')
    AdminLTE 2 | Dashboard
@endsection

@section('sectionTitle')
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
@endsection

@section('content')

        <!-- Morris charts -->
        <link rel="stylesheet" href="{{ url('assets/plugins/morris/morris.css') }}">

        <!-- Morris.js charts -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{ $feedback_count }} <span style="font-size: 14px">({{ $feedback_count_today }} Today)</span></h3>
                            <p>Registered Feedbacks</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-commenting-o "></i>
                        </div>
                        <a href="javascript:alert('Select Feedbacks from left pane');" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{ $an_feedback_count }} <span style="font-size: 14px">({{ $an_feedback_count_today }} Today)</span></h3>
                            <p>Anonymous Feedbacks</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-comment-o"></i>
                        </div>
                        <a href="javascript:alert('Select Feedbacks from left pane');" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{{ $user_count }} <span style="font-size: 14px">({{ $user_count_today }} Today)</span></h3>
                            <p>Registered Users</p>
                        </div>
                        <div class="icon">
                            <i class="on ion-person-add"></i>
                        </div>
                        <a href="{{ url('admin/users') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>{{ $message_count }} <span style="font-size: 14px">({{ $message_count_today }} Today)</span></h3>
                            <p>Messages</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <a href="{{ url('admin/messages') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->

            </div><!-- /.row -->


            <div class="row">
                <div class="box">
                    <div class="box-body">

                        <h3>Current leader poll standings</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="chart" id="bar-chart-na" style="height: 200px; position: relative;"></div>
                            </div>
                            <div class="col-md-4">
                                <div class="chart" id="bar-chart-pa" style="height: 200px; position: relative;"></div>
                            </div>
                            <div class="col-md-4">
                                <div class="chart" id="bar-chart-uc" style="height: 200px; position: relative;"></div>
                            </div>
                        </div>


                        <hr>
                        @if($polls->count() > 0)
                            <h3>Current poll standings</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <h4>Poll Question 1</h4>
                                    {{ $polls[0]->question }}
                                    <div class="chart" id="donut-chart1" style="height: 150px; position: relative;"></div>
                                </div>
                                <div class="col-md-4">
                                    <h4>Poll Question 2</h4>
                                    {{ $polls[1]->question }}
                                    <div class="chart" id="donut-chart2" style="height: 150px; position: relative;"></div>
                                </div>
                                <div class="col-md-4">
                                    <h4>Poll Question 3</h4>
                                    {{ $polls[2]->question }}
                                    <div class="chart" id="donut-chart3" style="height: 150px; position: relative;"></div>
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="box-footer">

                    </div>
                </div>
            </div>
            <!-- Main row -->


        </section><!-- /.content -->
@endsection

@section('js')
    @include('admin.includes.toastrConfirm')
    <script src="{{ url('assets/js/charts.js') }}"></script>
@endsection