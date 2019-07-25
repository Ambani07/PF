@extends('layouts.app')

@section('content')
    <h1>Customer Details</h1>

    {{ Form::open(['action' => 'CustomersController@store', 'method'=> 'POST']) }}
        <div class="form-group">
            {{ Form::label('name', 'Firstname') }}
            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder'=>'Name']) }}
        </div>
        <div class="form-group">
            {{ Form::label('surname', 'Lastname') }}
            {{ Form::text('surname', '', ['class' => 'form-control', 'placeholder'=>'Surname']) }}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::text('email', '', ['class' => 'form-control', 'placeholder'=>'Email']) }}
        </div>
        <div class="form-group">
            {{ Form::label('company', 'Company') }}
            {{ Form::text('company', '', ['class' => 'form-control', 'placeholder'=>'Company']) }}
        </div>
        {{ Form::submit('Submit', ['class'=>'btn btn-danger']) }}
    {{ Form::close() }}
@endsection