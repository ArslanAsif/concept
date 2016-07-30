@extends('admin.layouts.admin')

@section('title')
    Admin | Polls
@endsection


@section('sectionTitle')
    <h1>
        Option Polls
        <small>Counter</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Polls</a></li>
        <li class="active">Option Polls</li>
    </ol>
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Counter for each poll selection</h3>
            <form method="post" action="{{ url('admin/poll/optionpolls/delete') }}">
                {{csrf_field()}}
                <button type="submit" class="btn btn-btn-sm btn-danger pull-right">Delete all</button>
            </form>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Poll Question</th>
                    <th>Option</th>
                    <th>Counter</th>
                </tr>
                </thead>

                <tbody>
                @foreach($polls as $poll)
                <tr>
                    <td>{{ $poll->data_poll_question }}</td>
                    <td>{{ $poll->data_poll_option }}</td>
                    <td>{{ $poll->counter }}</td>
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
