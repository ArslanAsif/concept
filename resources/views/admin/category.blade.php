@extends('admin.layouts.admin')

@section('title')
    Admin | Landing Page
@endsection

@section('sectionTitle')
    <h1>
        Categories
        <small>Add / Edit / Delete</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Categories</a></li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Category</h3>
                        </div>

                        <form role="form" action="{{ url('/admin/categories') }}" method="post">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="heading">Category</label>
                                    <input name="category_name" id="category_name" type="text" class="form-control" placeholder="Enter category name (Max 10 characters)">
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
                            <h3 class="box-title">Edit/Delete Categories</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Name</th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>

                                        <td>
                                            <a href="{{ url('admin/categories/category/delete/'.$category->id) }}" class="btn btn-sm btn-danger" style="width: 100%;">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Subcategory</h3>
                        </div>

                        <form role="form" action="{{ url('/admin/categories') }}" method="post">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="select_category">Category</label>
                                    <select name="select_category" id="select_category" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="subcategory_name">Sub Category</label>
                                    <input name="subcategory_name" id="subcategory_name" type="text" class="form-control" placeholder="Enter subcategory name (Max 10 characters)">
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
                            <h3 class="box-title">Edit/Delete Subategories</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Subategory Name</th>
                                    <th>Category</th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($subcategories as $subcategory)
                                    <tr>
                                        <td>{{ $subcategory->id }}</td>
                                        <td>{{ $subcategory->name }}</td>
                                        <td>{{ $subcategory->category->name }}</td>

                                        <td>
                                            <a href="{{ url('admin/categories/subcategory/delete/'.$subcategory->id) }}" class="btn btn-sm btn-danger" style="width: 100%;">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>
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

    @include('admin.includes.toastrConfirm')
@endsection