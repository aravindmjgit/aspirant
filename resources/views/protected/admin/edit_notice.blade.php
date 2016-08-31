@extends('layouts.layout')

@section('title', 'Add Student')

@section('content')

@if (session()->has('flash_message'))
<p>{{ session()->get('flash_message') }}</p>
@endif

@section('body')

{!! Form::model($notice, ['method'=>'PATCH','route' => ['Notice.update', $notice->id],'enctype' => 'multipart/form-data']) !!}
<!--{!! Form::open() !!}-->
<div class="box box-primary">
    <div class="box-body">

        <div class="form-group">
            {!! Form::Label('batch', 'Batch') !!}
            {!! Form::select('batch_id', $batch, null, ['class' => 'form-control']) !!}
        </div>  
        
        <!-- message Field -->
        <div class="form-group">
            {!! Form::label('message', 'Message') !!}
            {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder'=>'Enter Message']) !!}
            {!! errors_for('message', $errors) !!}
        </div>

        <br>
        
        <div class="form-group">
            {!! Form::submit( 'Submit', ['class'=>'btn btn-primary']) !!} 
        </div>

        {!! Form::close() !!}
    </div>

</div>
@stop

@endsection
 
