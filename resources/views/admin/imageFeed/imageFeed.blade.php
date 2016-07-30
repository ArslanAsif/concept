@extends('admin.layouts.admin')

@section('title')
    Admin | Blog
@endsection

@section('sectionTitle')
    <h1>
        Image Feed
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Image Feed</a></li>
    </ol>
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Image of the week</h3>
        </div><!-- /.box-header -->

        <form method="post" action="{{ url('admin/imageFeed/add/iow/') }}">
            <div class="box-body">
                {{ csrf_field() }}
                <label for="iow">Select Image of the week </label>
                <select name="iow" class="form-control">
                    <option disabled selected value=null>-- Choose One --</option>
                    @foreach($posts as $post)
                        <option value="{{ $post->id }}">{{ $post->user->name." | ".$post->heading }} </option>
                    @endforeach
                </select>
                <p>Current IOW : {{ isset($current_iow->heading)? $current_iow->heading : 'None' }}</p>
            </div>
            <div class="box-footer">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">All Images</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Submitted On</th>
                    <th>Show / Hide</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>

                <tbody id="table_body">
                @foreach($posts as $post)
                    <tr>
                        @if($post->image != null)
                            <td><img src="{{ url('uploads/'.$post->image)}}" width="50px"></td>
                        @else
                            <td><img src = "{{ url('assets/img/placeholder.png') }}" alt = "Generic placeholder thumbnail" width="50px"></td>
                        @endif

                        <td>{{ $post->heading }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td class="allowBtn">
                            <button data-url="{{ url('/admin/imageFeed/edit/allow/'.$post->id) }}" data-allow="{{ $post->allow }}" onclick="allowPost(event)" class="btn btn-sm btn-default" style="width: 100%">{{ $post->allow == 0 ? 'Show On Blog' : 'Hide From Blog' }}</button>
                        </td>
                        <td>
                            <a href="{{ url('imageFeed/image/'.$post->id) }}" class="btn btn-sm btn-primary" style="width: 100%">View Post</a>
                        </td>
                        <td>
                            <a href="{{ url('admin/imageFeed/edit/'.$post->id) }}" class="btn btn-sm btn-warning" style="width: 100%">Edit</a>
                        </td>
                        <td>
                            <a href="{{ url('admin/imageFeed/delete/'.$post->id) }}" class="btn btn-sm btn-danger" style="width: 100%">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
@endsection


@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('assets/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('js')
    <!-- DataTables -->
    <script src="{{ url('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

    <!-- page script -->
    <script>
        $(function () {
            $('#example1').DataTable();
        });

        function allowPost(event) {
            event.preventDefault();

            var thisevent = event.target;
            var getAllow = thisevent.dataset['allow'];
            var allow = '';
            var buttonText = '';

            if(getAllow == 1) {
                allow = 0;
                buttonText = 'Show On Blog';
            } else {
                allow = 1;
                buttonText = 'Hide From Blog';
            }

            var url = thisevent.dataset['url'];
            var csrf_token = "{{ csrf_token() }}";

            $.ajax({
                method: 'POST',
                url: url,
                data: {
                    allow: allow,
                    _token: csrf_token
                },
                success: function (msg) {
                    toastr["success"](msg['message']);
                    $('#table_body').load(window.location.href+' #table_body > *');
                },
                error :function() {
                    toastr["error"](msg['message']);
                }
            });

        }
    </script>
@endsection
