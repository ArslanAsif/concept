@extends('admin.layouts.admin')

@section('title')
    Admin | Blog
@endsection

@section('sectionTitle')
    <h1>
        Blog
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Blog</a></li>
    </ol>
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Post of the week</h3>
        </div><!-- /.box-header -->

        <form method="post" action="{{ url('admin/blog/add/pow/') }}">
            <div class="box-body">
                {{ csrf_field() }}
                <label for="pow">Select Post of the week </label>
                <select name="pow" class="form-control">
                    <option disabled selected value=null>-- Choose One --</option>
                    @foreach($posts as $post)
                        <option value="{{ $post->id }}">{{ $post->user->name." | ".$post->post_heading }} </option>
                    @endforeach
                </select>
                <p>Current POW : {{ isset($current_pow->post_heading)? $current_pow->post_heading : 'None' }}</p>
            </div>
            <div class="box-footer">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">All Blog Posts</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Summary</th>
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
                        <td>{{ $post->post_heading }}</td>
                        <td>{{ strlen($post->post_summary) > 50 ? substr($post->post_summary, 0, 50).'...' : $post->post_summary }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td class="allowBtn">
                            <button data-url="{{ url('/admin/blog/edit/allow/'.$post->id) }}" data-allow="{{ $post->allow }}" onclick="allowPost(event)" class="btn btn-sm btn-default" style="width: 100%">{{ $post->allow == 0 ? 'Show On Blog' : 'Hide From Blog' }}</button>
                        </td>
                        <td>
                            <a href="{{ url('blog/post/'.$post->id) }}" class="btn btn-sm btn-primary" style="width: 100%">View Post</a>
                        </td>
                        <td>
                            <a href="{{ url('admin/blog/edit/'.$post->id) }}" class="btn btn-sm btn-warning" style="width: 100%">Edit</a>
                        </td>
                        <td>
                            <a href="{{ url('admin/blog/delete/'.$post->id) }}" class="btn btn-sm btn-danger" style="width: 100%">Delete</a>
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
