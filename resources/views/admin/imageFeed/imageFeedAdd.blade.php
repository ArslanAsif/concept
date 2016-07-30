@extends('admin.layouts.admin')

@section('title')
    Admin | Image Feed
@endsection

@section('sectionTitle')
    <h1>
        Image Feed
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Image Feed</a></li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Image</h3>
                </div>

                <form role="form" action="{{ isset($post) ? url('/admin/imageFeed/edit/'.$post->id) : url('/admin/imageFeed/add') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="heading">Heading</label>
                                    <input name="heading" id="heading" type="text" class="form-control" placeholder="Enter heading (1 lines)" value="{{ isset($post) ? $post->post_heading : '' }}">
                                </div>

                                <label for="image">Upload Image</label>
                                <input type="file" name="pic" accept="image/*" class="form-control">
                            </div>

                            <div class="col-sm-6">
                                <div class="img-responsive">

                                    @if(isset($post))
                                        @if(isset($post->image))
                                            <img src="{{ url('uploads/'.$post->image) }}" width="100%">
                                        @else
                                            <img src="{{ url('assets/img/placeholder.png') }}" width="100%">
                                        @endif
                                    @else
                                        <img src="{{ url('assets/img/placeholder.png') }}" width="100%">
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')

    @include('admin.includes.toastrConfirm')
@endsection