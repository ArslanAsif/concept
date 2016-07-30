@extends('admin.layouts.admin')

@section('title')
    Admin | Landing Page
@endsection

@section('sectionTitle')
    <h1>
        Landing Page
        <small>Description & Buttons</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Landing Page</a></li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Edit Description Box</h3>
                                </div>

                                <form role="form" action="{{ url('/admin/title') }}" method="post">
                                    {{ csrf_field() }}
                                    <input name="form" value="1" hidden>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="heading">Heading</label>
                                            <input name="heading" id="heading" type="text" class="form-control" placeholder="Enter heading (Max 25 characters, 1 line)" value="{{ $title->heading }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea name="description" id="description" type="text" rows="3" class="form-control" placeholder="Brief description (2-3 lines)">{{ $title->description  }}</textarea>
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
                                    <h3 class="box-title">Edit Polls Section Heading</h3>
                                </div>

                                <form role="form" action="{{ url('/admin/title') }}" method="post">
                                    {{csrf_field()}}
                                    <input name="form" value="3" hidden>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="heading">Heading</label>
                                            <input name="polls_heading" id="polls_heading" type="text" class="form-control" placeholder="" value="{{ $polls_heading->heading }}">
                                        </div>
                                    </div>

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Navigation Buttons</h3>
                        </div>

                        <form role="form" action="{{ url('/admin/title') }}" method="post">
                            {{csrf_field()}}
                            <input name="form" value="2" hidden>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="heading">Button 1</label> <small>(Max 20 characters)</small>
                                    <input name="button1" id="button1" type="text" class="form-control" placeholder="Enter text for button 1" value="{{ $buttons[0]->button }}">
                                    <span class="checkbox"><label><input type="checkbox" name="btn1_chk" value="true" {{ $buttons[0]->animate == 1 ? 'checked' : '' }}>Animate</label></span>
                                </div>

                                <div class="form-group">
                                    <label for="heading">Button 2</label> <small>(Max 20 characters)</small>
                                    <input name="button2" id="button2" type="text" class="form-control" placeholder="Enter text for button 2" value="{{ $buttons[1]->button }}">
                                    <span class="checkbox"><label><input type="checkbox" value="true" name="btn2_chk" {{ $buttons[1]->animate == 1 ? 'checked': '' }}>Animate</label></span>
                                </div>

                                <div class="form-group">
                                    <label for="heading">Button 3</label> <small>(Max 20 characters)</small>
                                    <input name="button3" id="button3" type="text" class="form-control" placeholder="Enter text for button 3" value="{{ $buttons[2]->button }}">
                                    <span class="checkbox"><label><input type="checkbox" value="true" name="btn3_chk" {{ $buttons[2]->animate == 1 ? 'checked': '' }}>Animate</label></span>
                                </div>
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    @include('admin.includes.toastrConfirm')
@endsection