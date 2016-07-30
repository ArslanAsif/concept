@extends('admin.layouts.admin')

@section('title')
    Admin | Contact
@endsection

@section('sectionTitle')
    <h1>
        Contact Info
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Contact Info</a></li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Contact Details</h3>
                </div>

                <form role="form" action="{{ url('/admin/contact') }}" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="heading">Heading</label>
                            <input name="heading" id="heading" type="text" class="form-control" placeholder="Enter heading (Max 25 characters, 1 line)" value="{{ $contact->heading }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" type="text" rows="3" class="form-control" placeholder="Brief description (2-3 lines)">{{ $contact->description }}</textarea>
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