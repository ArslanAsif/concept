@extends('admin.layouts.admin')

@section('title')
    Admin | Edit Backgrounds
@endsection

@section('sectionTitle')
    <h1>
        Background
        <small>Edit Pages Backgrounds</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Background</a></li>
    </ol>
@endsection

@section('content')
    @if($errors->has('main_page'))
        <div class="alert alert-success">
            {{ $errors->first() }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Landing Page</h3>
                        </div>

                        <form role="form" action="{{ url('/admin/backgrounds/mainPage.jpg') }}" method="post" enctype="multipart/form-data">
                            <div class="box-body">
                                <div>
                                    @if (Storage::disk('public')->has('mainPage.jpg'))
                                        <img class="img-responsive" width="100%" src="{{ url('/admin/showimage', ['filename' => 'mainPage.jpg']) }}">
                                    @endif
                                </div>
                                <br/>

                                <div class="form-group">
                                    <label for="main_page_image_upload">Upload New Image <small>(Only .jpg)</small></label>
                                    <input type="file" name="image_upload" id="main_page_image_upload" class="form-control">
                                </div>
                            </div>
                            {{ csrf_field() }}
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">General Feedback Page</h3>
                        </div>

                        <form role="form" action="{{ url('/admin/backgrounds/generalFeedback.jpg') }}" method="post" enctype="multipart/form-data">
                            <div class="box-body">
                                <div>
                                    @if(Storage::disk('public')->has('generalFeedback.jpg'))
                                        <img class="img-responsive" width="100%" src="{{ url('/admin/showimage', ['filename' => 'generalFeedback.jpg']) }}">
                                    @endif
                                </div>
                                <br/>

                                <div class="form-group">
                                    <label for="general_feedback_image_upload">Upload New Image <small>(Only .jpg)</small></label>
                                    <input type="file" name="image_upload" id="general_feedback_image_upload" class="form-control">
                                </div>
                            </div>
                            {{ csrf_field() }}
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Location Feedback Page</h3>
                        </div>

                        <form role="form" action="{{ url('/admin/backgrounds/locationFeedback.jpg') }}" method="post" enctype="multipart/form-data">
                            <div class="box-body">
                                <div>
                                    @if (Storage::disk('public')->has('locationFeedback.jpg'))
                                        <img class="img-responsive" width="100%" src="{{ url('/admin/showimage', ['filename' => 'locationFeedback.jpg']) }}">
                                    @endif
                                </div>
                                <br/>

                                <div class="form-group">
                                    <label for="location_feedback_image_upload">Upload New Image <small>(Only .jpg)</small></label>
                                    <input type="file" name="image_upload" id="location_feedback_image_upload" class="form-control">
                                </div>
                            </div>
                            {{ csrf_field() }}
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Project Feedback Page</h3>
                        </div>

                        <form role="form" action="{{ url('/admin/backgrounds/projectFeedback.jpg') }}" method="post" enctype="multipart/form-data">
                            <div class="box-body">
                                <div>
                                    @if (Storage::disk('public')->has('projectFeedback.jpg'))
                                        <img class="img-responsive" width="100%" src="{{ url('/admin/showimage', ['filename' => 'projectFeedback.jpg']) }}">
                                    @endif
                                </div>
                                <br/>

                                <div class="form-group">
                                    <label for="project_feedback_image_upload">Upload New Image <small>(Only .jpg)</small></label>
                                    <input type="file" name="image_upload" id="project_feedback_image_upload" class="form-control">
                                </div>
                            </div>
                            {{ csrf_field() }}
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Login Page</h3>
                        </div>

                        <form role="form" action="{{ url('/admin/backgrounds/login.jpg') }}" method="post" enctype="multipart/form-data">
                            <div class="box-body">
                                <div>
                                    @if (Storage::disk('public')->has('login.jpg'))
                                        <img class="img-responsive" width="100%" src="{{ url('/admin/showimage', ['filename' => 'login.jpg']) }}">
                                    @endif
                                </div>
                                <br/>

                                <div class="form-group">
                                    <label for="login_image_upload">Upload New Image <small>(Only .jpg)</small></label>
                                    <input type="file" name="image_upload" id="login_image_upload" class="form-control">
                                </div>
                            </div>
                            {{ csrf_field() }}
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Register Page</h3>
                        </div>

                        <form role="form" action="{{ url('/admin/backgrounds/register.jpg') }}" method="post" enctype="multipart/form-data">
                            <div class="box-body">
                                <div>
                                    @if (Storage::disk('public')->has('register.jpg'))
                                        <img class="img-responsive" width="100%" src="{{ url('/admin/showimage', ['filename' => 'register.jpg']) }}">
                                    @endif
                                </div>
                                <br/>

                                <div class="form-group">
                                    <label for="register_image_upload">Upload New Image <small>(Only .jpg)</small></label>
                                    <input type="file" name="image_upload" id="register_image_upload" class="form-control">
                                </div>
                            </div>
                            {{ csrf_field() }}
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    @include('admin.includes.toastrConfirm')
@endsection