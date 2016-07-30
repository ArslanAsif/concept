@extends('admin.layouts.admin')

@section('title')
    Admin | Polls
@endsection


@section('sectionTitle')
    <h1>
        Polls
        <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Polls</a></li>
        <li class="active">Edit</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Edit Poll 1</h3>
                </div><!-- /.box-header -->

                <form role="form" action="{{ url('/admin/poll/edit') }}" method="post">
                    {{ csrf_field() }}
                    <input name="poll_id" value="1" hidden>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="description1">Description</label>
                            <textarea name="description" id="description2" type="text" rows="3" class="form-control" placeholder="Poll description (2-3 lines)">{{ $polls[0]->question }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="option1">Option 1</label>
                            <input name="option1" id="option1" type="text" class="form-control" placeholder="Enter option (Max 15 characters)" value="{{ $polls[0]->option1 }}">
                        </div>

                        <div class="form-group">
                            <label for="option2">Option 2</label>
                            <input name="option2" id="option2" type="text" class="form-control" placeholder="Enter option (Max 15 characters)" value="{{ $polls[0]->option2 }}">
                        </div>

                        <div class="form-group">
                            <label for="option3">Option 3</label>
                            <input name="option3" id="option3" type="text" class="form-control" placeholder="Enter option (Max 15 characters)" value="{{ $polls[0]->option3 }}">
                        </div>

                        <div class="form-group">
                            <label for="option4">Option 4</label>
                            <input name="option4" id="option4" type="text" class="form-control" placeholder="Enter option (Max 15 characters)" value="{{ $polls[0]->option4 }}">
                        </div>

                    </div>

                    <div class="box-footer">
                        <span class="checkbox"><label><input type="checkbox" name="sbmt1_chk" value="true" {{ $polls[0]->hide == 1 ? 'checked' : '' }}>Hide this poll</label></span>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div><!-- /.box -->
        </div>

        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Edit Poll 2</h3>
                </div><!-- /.box-header -->

                <form role="form" action="{{ url('/admin/poll/edit') }}" method="post">
                    {{ csrf_field() }}
                    <input name="poll_id" value="2" hidden>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="description2">Description</label>
                            <textarea name="description" id="description2" type="text" rows="3" class="form-control" placeholder="Poll description (2-3 lines)">{{ $polls[1]->question }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="option1">Option 1</label>
                            <input name="option1" id="option1" type="text" class="form-control" placeholder="Enter option (Max 15 characters)" value="{{ $polls[1]->option1 }}">
                        </div>

                        <div class="form-group">
                            <label for="option2">Option 2</label>
                            <input name="option2" id="option2" type="text" class="form-control" placeholder="Enter option (Max 15 characters)" value="{{ $polls[1]->option2 }}">
                        </div>

                        <div class="form-group">
                            <label for="option3">Option 3</label>
                            <input name="option3" id="option3" type="text" class="form-control" placeholder="Enter option (Max 15 characters)" value="{{ $polls[1]->option3 }}">
                        </div>

                        <div class="form-group">
                            <label for="option4">Option 4</label>
                            <input name="option4" id="option4" type="text" class="form-control" placeholder="Enter option (Max 15 characters)" value="{{ $polls[1]->option4 }}">
                        </div>

                    </div>

                    <div class="box-footer">
                        <span class="checkbox"><label><input type="checkbox" name="sbmt2_chk" value="true" {{ $polls[1]->hide == 1 ? 'checked' : '' }}>Hide this poll</label></span>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div><!-- /.box -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Edit Poll 3</h3>
                </div><!-- /.box-header -->

                <form role="form" action="{{ url('/admin/poll/edit') }}" method="post">
                    {{ csrf_field() }}
                    <input name="poll_id" value="3" hidden>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="description3">Description</label>
                            <textarea name="description" id="description3" type="text" rows="3" class="form-control" placeholder="Poll description (2-3 lines)">{{ $polls[2]->question }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="option1">Option 1</label>
                            <input name="option1" id="option1" type="text" class="form-control" placeholder="Enter option (Max 15 characters)" value="{{ $polls[2]->option1 }}">
                        </div>

                        <div class="form-group">
                            <label for="option2">Option 2</label>
                            <input name="option2" id="option2" type="text" class="form-control" placeholder="Enter option (Max 15 characters)" value="{{ $polls[2]->option2 }}">
                        </div>

                        <div class="form-group">
                            <label for="option3">Option 3</label>
                            <input name="option3" id="option3" type="text" class="form-control" placeholder="Enter option (Max 15 characters)" value="{{ $polls[2]->option3 }}">
                        </div>

                        <div class="form-group">
                            <label for="option4">Option 4</label>
                            <input name="option4" id="option4" type="text" class="form-control" placeholder="Enter option (Max 15 characters)" value="{{ $polls[2]->option4 }}">
                        </div>

                    </div>

                    <div class="box-footer">
                        <span class="checkbox"><label><input type="checkbox" name="sbmt3_chk" value="true" {{ $polls[2]->hide == 1 ? 'checked' : '' }}>Hide this poll</label></span>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div><!-- /.box -->
        </div>
    </div>

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
