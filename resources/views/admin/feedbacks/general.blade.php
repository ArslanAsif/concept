@extends('admin.layouts.admin')

@section('title')
    Admin | Feedback
@endsection

@section('sectionTitle')
    <h1>
        Feedbacks
        <small>General Feedback</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Feedbacks</a></li>
        <li class="active">General Feedback</li>
    </ol>
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">All "General" Feedbacks Recieved</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Rating</th>
                    <th>Submitted On</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach($feedbacks as $feedback)
                <tr>
                    <td>{{ $feedback->title }}</td>
                    <td>{{ $feedback->category }}</td>
                    <td>{{ $feedback->rating }}</td>
                    <td>{{ $feedback->created_at }}</td>
                    <td>
                        <a href="{{ url('admin/feedback/general/'.$feedback->id) }}" class="btn btn-sm btn-default" style="width: 100%">View Details</a>
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
    </script>
@endsection
