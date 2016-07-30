@extends('admin.layouts.admin')

@section('title')
    Admin | Polls
@endsection

@section('sectionTitle')
    <h1>
        Leader Poll
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Polls</a></li>
        <li class="active">Leader Poll</li>
    </ol>
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Leader Choice of User</h3>
            <form method="post" action="{{ url('admin/poll/leaderpoll/delete') }}">
                {{csrf_field()}}
                <button type="submit" class="btn btn-btn-sm btn-danger pull-right">Delete all</button>
            </form>

        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>User Name</th>
                    <th>Choice</th>
                    <th>Department</th>
                    <th>Code</th>
                    <th>Province</th>
                    <th>District</th>
                    <th>Submitted on</th>
                </tr>
                </thead>

                <tbody>

                @foreach($polls as $poll)
                    <tr>
                        <td>{{ $poll->user_id == 0 ? '(Not Registered)' : $poll->user->name }}</td>
                        <td>{{ $poll->name }}</td>
                        <td>{{ $poll->department }}</td>
                        <td>{{ $poll->code}}</td>
                        <td>{{ $poll->province }}</td>
                        <td>{{ $poll->district }}</td>
                        <td>{{ $poll->created_at }}</td>
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
