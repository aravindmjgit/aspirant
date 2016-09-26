@extends('layouts.layout')

@section('title', 'List Examdetails')

<!--@section('content')

@if (session()->has('flash_message'))
<p>{{ session()->get('flash_message') }}</p>
@endif-->

@section('body')
@include('flash')

<div class="box box-primary">
    <div class="box-body">


        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Exam_Type</th>
                    <th>Date</th>
                    <th>TotalMark</th>
                  
                    <!--<th>Photo</th>-->
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allExamdetails as $Examdetails)
                <tr>
                    <td>{{ $Examdetails->name}}</td>
                     <td>{{ $Examdetails->exam_date }}</td>
                     <td>{{ $Examdetails->total_mark }}</td>
            
                    <td class=center>
                        <a class="btn btn-default btn-success" href="{{url('ExamDetails/'.$Examdetails->enc_id).'/edit'}}">Edit</a>
                    </td>
                    <td class=center>
                        {!! Form::open(['route' => ['ExamDetails.destroy', $Examdetails->enc_id], 'method' => 'POST','onsubmit' => 'return ConfirmDelete()'])  !!}
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="id" value="{{$Examdetails->id}}">
                        <button type="submit" class="btn btn-danger">Delete</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</div>
@stop
@section('dataTable')
<script type="text/javascript">
    $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
    });
</script>
@stop
@endsection