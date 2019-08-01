@extends('layouts.app')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb mt-5 mb-5">
        <li class="breadcrumb-item">
            <a href="/dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="/customers">Customers</a>
        </li>
        <li class="breadcrumb-item active">Edit Customer</li>
    </ol>
    

    <div class="row">
        <div class="col-md-8 col-md-offset-2 mb-5 m-auto text-muted bg-white">
            <h2 class="mt-5 mb-5">Edit Customer</h2>
            
            {{ Form::open(['action' => ['CustomersController@update', $customer->id], 'method'=> 'POST']) }}
                <h5><strong>Customer Details</strong></h5>
                <div class="form-group row">
                    <label for="name" class="col-sm-4 col-form-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" value="{{$customer->name}}" class="form-control" id="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contactPerson" class="col-sm-4 col-form-label">Contact Person</label>
                    <div class="col-sm-8">
                        <input type="text" name="contactPerson" value="{{$customer->contactPerson}}" class="form-control" id="contactPerson">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contactPersonEmail" class="col-sm-4 col-form-label">Contact Person Email</label>
                    <div class="col-sm-8">
                        <input type="text" name="contactPersonEmail" value="{{$customer->contactPersonEmail}}" class="form-control" id="contactPersonEmail">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contactPersonPhone" class="col-sm-4 col-form-label">Contact Person Tel</label>
                    <div class="col-sm-8">
                        <input type="text" name="contactPersonPhone" value="{{$customer->contactPersonPhone}}" class="form-control" id="contactPersonPhone">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contactPersonCell" class="col-sm-4 col-form-label">Contact Person Cell</label>
                    <div class="col-sm-8">
                        <input type="text" name="contactPersonCell" value="{{$customer->contactPersonCell}}" class="form-control" id="contactPersonCell">
                    </div>
                </div>
            <hr>

            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit('Next', ['class'=>'btn btn-danger pull-right mb-3 pl-5 pr-5']) }}
            {{ Form::close() }}
        </div>
    
    
@endsection
