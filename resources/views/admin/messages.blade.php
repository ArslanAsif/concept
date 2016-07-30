@extends('admin.layouts.admin')

@section('title')
    Admin | Messages
@endsection

@section('sectionTitle')
    <h1>
        Messages
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Messages</a></li>
    </ol>
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">All Messages Recieved</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Sent on</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach($messages as $msg)
                    <tr>
                        <td><a >{{ $msg->user_id == 0 ? '(Not Registered)' : $msg->user->email }}</a></td>
                        <td>{{ $msg->subject }}</td>
                        <td>{{ $msg->message }}</td>
                        <td>{{ $msg->created_at }}</td>
                        <td>
                            <a href="{{ url('/admin/messages/delete/'.$msg->id) }}" class="btn btn-sm btn-danger" style="width: 100%">Delete</a>
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

    @include('admin.includes.toastrConfirm')
@endsection
