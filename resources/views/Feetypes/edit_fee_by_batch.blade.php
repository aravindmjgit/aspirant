@extends('layouts.layout')

@section('title', 'Edit batch Details')

@section('content')

@if (session()->has('flash_message'))
<p>{{ session()->get('flash_message') }}</p>
@endif

@section('body')

<div class="row">
    @include('flash')

    <div class="row">
    <div class="col-md-6 col-md-offset-1">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Student-Fee-Details</h3>
            </div>
                <div class="box-body">
                    
                    {!! Form::model($students, ['method'=>'PATCH','route' => ['Feebybatch.update', $studentEncryptId],'enctype' => 'multipart/form-data']) !!}

                  

                    
                     <div class="form-group">
                        {!! Form::label('first_name', 'First_Name') !!}
                        {!! Form::text('first_name',null, ['disabled' => '','class'=>'form-control', 'placeholder'=>'First-Installment']) !!}
                        {!! errors_for('first_name', $errors) !!}
                         </div>
                     <div class="form-group">
                        {!! Form::label('last_name', 'LastName') !!}
                        {!! Form::text('last_name',null, ['disabled' => '','class'=>'form-control', 'placeholder'=>'First-Installment']) !!}
                        {!! errors_for('last_name', $errors) !!}
                         </div>
                       <div class="form-group">
                        {!! Form::label('first', 'First_Installment') !!}
                        {!! Form::text('first',null, ['class'=>'form-control', 'placeholder'=>'First-Installment']) !!}
                        {!! errors_for('first', $errors) !!}
                         </div>
                         <div class="form-group">
                        {!! Form::label('second', 'Second_Installment') !!}
                        {!! Form::text('second',null, ['class'=>'form-control', 'placeholder'=>'Second-Installment']) !!}
                        {!! errors_for('second', $errors) !!}
                    </div>
                     <div class="form-group">
                        {!! Form::label('third', 'Third_Installment') !!}
                        {!! Form::text('third',null, ['class'=>'form-control', 'placeholder'=>'Third-Installment']) !!}
                        {!! errors_for('third', $errors) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('discount', 'Discount') !!}
                        {!! Form::text('discount',null, ['class'=>'form-control', 'placeholder'=>'Discount']) !!}
                        {!! errors_for('discount', $errors) !!}
                    </div>
                   
                    </div>
        </div>
                 

                    <br>

                    <div class="form-group">
                        {!! Form::submit( 'Edit Student', ['class'=>'btn btn-lg btn-primary btn-block']) !!} 
                    </div>

                    {!! Form::close() !!}
                </div>

        </div>
    </div>
    
    
@stop

@endsection