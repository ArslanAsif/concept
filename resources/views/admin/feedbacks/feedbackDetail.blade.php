@extends('admin.layouts.admin')

@section('title')
    Admin | Feedback
@endsection

@section('sectionTitle')
    <h1>
        {{ $type }} Feedback
        <small>Details</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Feedbacks</a></li>
        <li><a href="#">{{ $type }} Feedbacks</a></li>
        <li class="active">Feedback Details</li>
    </ol>
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><label>Title:</label> {{ $feedback->title }}</h3>
        </div><!-- /.box-header -->

        <div class="box-body">
            <label>Submitted By: </label> {{ $feedback->user_id == 0 ? 'Anonymous' : $feedback->user->name }} <small>({{ $feedback->user_id == 0 ? 'Anonymous' : $feedback->user->email }})</small><br/>
            <label>Category: </label> {{ $feedback->category }}<br/>
            <label>Relevant Person: </label> {{ $feedback->rel_person }}<br/>
            <label>Details: </label> {{ $feedback->details }}<br/>
            <label>Event Date: </label> {{ $feedback->event_date }}<br/>
            <label>Rating: </label> {{ $feedback->rating }} Stars<br/>
            @if($feedback->feedback_type == 1)
                <?php
                $nf_heading = '';
                $nf_description = '';

                if($feedback->nf_heading != '')
                {
                $field_heading = explode('0_0', $feedback->nf_heading);
                $field_description = explode('0_0', $feedback->nf_description);

                for($i=0; $i<sizeof($field_heading); $i++)
                {?>
                <label><?= $field_heading[$i] ?></label>
                <?= $field_description[$i] ?><br/>
                <?php
                }
                }
            ?>
            @elseif($feedback->feedback_type == 2)
                <label>Location: </label> {{ $feedback->location }}
            @elseif($feedback->feedback_type == 3)
                <label>Project: </label> {{ $feedback->project }}
            @endif
        </div>

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
