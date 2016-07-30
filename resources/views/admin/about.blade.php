@extends('admin.layouts.admin')

@section('title')
    Admin | About
@endsection

@section('sectionTitle')
    <h1>
        About Us
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">About Us</a></li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit About Us</h3>
                </div>

                <form role="form" action="{{ url('/admin/about') }}" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="heading">Heading</label>
                            <input name="heading" id="heading" type="text" class="form-control" placeholder="Enter heading (Max 25 characters, 1 line)" value="{{ $about->heading }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control textarea" style="width: 100%; height: 30em; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $about->description }}</textarea>
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