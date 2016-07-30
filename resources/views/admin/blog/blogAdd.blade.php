@extends('admin.layouts.admin')

@section('title')
    Admin | Blog
@endsection

@section('sectionTitle')
    <h1>
        Blog
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Blog</a></li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Post</h3>
                </div>

                <form role="form" action="{{ isset($post) ? url('/admin/blog/edit/'.$post->id) : url('/admin/blog/add') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="heading">Heading</label>
                                <input name="heading" id="heading" type="text" class="form-control" placeholder="Enter heading (1 lines)" value="{{ isset($post) ? $post->post_heading : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="summary">Summary</label>
                            <textarea name="summary" id="summary" type="text" rows="2" class="form-control" placeholder="Enter brief summary (1-2 lines)">{{ isset($post) ? $post->post_summary : '' }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="details">Details</label>
                            <textarea name="details" id="details" class="form-control textarea" style="width: 100%; height: 30em; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ isset($post) ? $post->post_body : '' }}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <label for="image">Upload Cover Image</label>
                                <input type="file" name="pic" accept="image/*" class="form-control">
                            </div>

                            <div class="col-sm-6">
                                <div class="img-responsive">

                                    @if(isset($post))
                                        @if(isset($post->post_image))
                                            <img src="{{ url('uploads/'.$post->post_image) }}" width="100%">
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
    <script>
        $(".textarea").wysihtml5();
    </script>

    @include('admin.includes.toastrConfirm')
@endsection