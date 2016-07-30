@extends('admin.layouts.admin')

@section('title')
    Admin | Polls
@endsection

@section('sectionTitle')
    <h1>
        Users
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Users</a></li>
    </ol>
@endsection

@section('content')

    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">All Registered Users</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Lives In</th>
                    <th>Member Since</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->dob }}</td>
                    <td>{{ $user->area }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <a href="{{ url('admin/users/delete/'.$user->id) }}" class="btn btn-sm btn-danger" style="width: 100%">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">All Anonymous Users</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Submitted On</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach($an_users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->dob }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                            <a href="{{ url('admin/users/delete/'.$user->id) }}" class="btn btn-sm btn-danger" style="width: 100%">Delete</a>
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
            $('#example2').DataTable();
        });
    </script>

    @include('admin.includes.toastrConfirm')
@endsection