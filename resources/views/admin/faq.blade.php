@extends('admin.layouts.admin')

@section('title')
    Admin | FAQ
@endsection

@section('sectionTitle')
    <h1>
        Frequently Asked Questions
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">FAQ</a></li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Question</h3>
                </div>

                <form role="form" action="{{ url('/admin/faq') }}" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="heading">Question</label>
                            <input name="question" id="question" type="text" class="form-control" placeholder="Enter question (1-2 lines)">
                        </div>

                        <div class="form-group">
                            <label for="explanation">Explanation</label>
                            <textarea name="explanation" id="explanation" type="text" rows="3" class="form-control" placeholder="Brief description (2-3 lines)"></textarea>
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">All Questions</h3>
                </div>


                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Question</th>
                            <th>Explanation</th>
                            <th>Added On</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($faqs as $faq)
                            <tr>
                                <td>{{ $faq->question }}</td>
                                <td>{{ $faq->explanation }}</td>
                                <td>{{ $faq->created_at }}</td>

                                <td>
                                    <a href="{{ url('admin/faq/delete/'.$faq->id) }}" class="btn btn-sm btn-danger" style="width: 100%">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    @include('admin.includes.toastrConfirm')
@endsection