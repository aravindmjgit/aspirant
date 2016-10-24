@extends('layouts.layout')

@section('title', 'Add Examdetails')

@section('body')

{!! Form::open(['route' => 'ExamDetails.store', 'method'=>'post','enctype' => 'multipart/form-data']) !!}
@include('flash')
<div class="box box-primary">
    <div class="box-body">

        <!-- first_name Field -->
        <div class="form-group">
            {!! Form::label('exam_type', 'Examtype') !!}
            {!! Form::select('type_id',$Examtype,null,['class' => 'form-control', 'placeholder'=>''])!!}
            {!! errors_for('exam_type', $errors) !!}
            <!--{!! errors_for('first_name', $errors) !!}-->
        </div>
        <div class="form-group">
            {!! Form::label('exam_date', 'Exam_date') !!}
            {!! Form::text('exam_date', null, ['class' => 'form-control', 'placeholder'=>'','id' => 'datepicker1'])!!}
            {!! errors_for('exam_date', $errors) !!}
        </div>
        <div class="form-group">
            {!! Form::label('subject', 'Subject') !!}
            {!! Form::text('subject', null, ['class' => 'form-control', 'placeholder'=>'Enter subject'])!!}
            {!! errors_for('subject', $errors) !!}
        </div>
        
           <div class="form-group">
            {!! Form::label('total_mark', 'TotalMark') !!}
            {!! Form::text('total_mark', null, ['class' => 'form-control', 'placeholder'=>'Totalmark'])!!}
            {!! errors_for('total_mark', $errors) !!}
         </div>
        <br>
        <div class="form-group">
            {!! Form::submit( 'Submit', ['class'=>'btn btn-primary']) !!} 
        </div>

        {!! Form::close() !!}
        <!--                @if($errors->any())
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif-->
    </div>

</div>
@stop

@endsection