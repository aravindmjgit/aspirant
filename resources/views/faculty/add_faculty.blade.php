@extends('layouts.layout')

@section('title', 'Add Faculty')

@section('content')

@section('body')

@include('flash')

{!! Form::open(['action' => 'FacultyController@store','enctype' => 'multipart/form-data']) !!}
<!--{!! Form::open() !!}-->
<div class="box box-primary">
    <div class="box-body">

        <!-- first_name Field -->
        <div class="form-group">
            {!! Form::label('first_name', 'First Name') !!}
            {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder'=>'Enter First Name']) !!}
            {!! errors_for('first_name', $errors) !!}
        </div>

        <!-- last_name Field -->
        <div class="form-group">
            {!! Form::label('last_name', 'Last Name') !!}
            {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder'=>'Enter Last Name']) !!}
            {!! errors_for('last_name', $errors) !!}
        </div>

        <div class="form-group">
            {!! Form::label('qualification', 'Qualification') !!}
            {!! Form::text('qualification', null, ['class'=>'form-control', 'placeholder'=>'Enter Qualification']) !!}
            {!! errors_for('qualification', $errors) !!}
        </div>
        <div class="form-group">
            {!! Form::label('subject', 'Subject') !!}
            {!! Form::text('subject', null, ['class'=>'form-control', 'placeholder'=>'Enter Subject']) !!}
            {!! errors_for('subject', $errors) !!}
        </div>

        <div class="form-group">
            {!! Form::label('phone', 'Phone') !!}
            {!! Form::text('phone', null, ['class'=>'form-control', 'placeholder'=>'Enter Phone']) !!}
            {!! errors_for('phone', $errors) !!}
        </div>

        <div class="form-group">
            {!! Form::label('address', 'Address') !!}
            {!! Form::textarea('address', null,  ['class'=>'form-control', 'placeholder'=>'Address']) !!}
            {!! errors_for('address', $errors) !!}
        </div>

        <!-- email Field -->
        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', null, ['class' => 'form-control','placeholder'=>'Email']) !!}
            {!! errors_for('email', $errors) !!}
        </div>

        <!-- Password field -->
        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class' => 'form-control', 'placeholder'=>'Password']) !!}
            {!! errors_for('password', $errors) !!}
        </div>

        <!-- Password Confirmation field -->
        <div class="form-group">
            {!! Form::label('password_confirmation', 'Repeat Password') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder'=>'Repeat Password'] )!!}
            {!! errors_for('password_confirmation', $errors) !!}
        </div> 

        <div class="form-group">
            {!! Form::label('photo', 'Photo') !!}
            {!! Form::file('photo', null, ['class'=>'form-control']) !!}
            {!! errors_for('photo', $errors) !!}
        </div>

        <br>
        <div class="form-group">
            {!! Form::submit( 'Submit', ['class'=>'btn btn-primary']) !!} 
        </div>

        {!! Form::close() !!}
        <!--                @if($errors->any())
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif-->
    </div>

</div>
@stop

@endsection