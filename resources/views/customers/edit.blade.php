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
        <li class="breadcrumb-item active">Add Customer</li>
    </ol>
    

            <div class="row">
                <div class="col-md-8 col-md-offset-2 mb-5 m-auto text-muted bg-white">
                    <h2 class="mt-5 mb-5">Edit Customer</h2>
                    
                    {{ Form::open(['action' => ['CustomersController@update', $customer->id], 'method'=> 'POST']) }}
                    <h5><strong>Customer Details</strong></h5>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('firstname', 'Firstname') }}
                                {{ Form::text('firstname', $customer->firstname, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('lastname', 'Lastname') }}
                                {{ Form::text('lastname', $customer->lastname, ['class' => 'form-control']) }}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::text('email', $customer->email, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('company', 'Company') }}
                        {{ Form::text('company', $customer->company, ['class' => 'form-control mb-5']) }}
                    </div>
                    <hr>
                    <h5 class="mb-3 mt-3"><strong>Address</strong></h5>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('street', 'Street') }}
                                {{ Form::text('street', $customer->street, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('suburb', 'Town / Suburb') }}
                                {{ Form::text('suburb', $customer->suburb, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('city', 'City') }}
                                {{ Form::text('city', $customer->city, ['class' => 'form-control']) }}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('region', 'Region') }}
                        {{ Form::select('region', array( 'Centurion' => 'Centurion',
                                                            'Bellville' => 'Bellville', 
                                                            'Durban' => 'Durban',
                                                            'Teraco(lsando)' => 'Teraco(lsando)'),
                                                            ['class' => 'form-control']) }}
                    </div>
                    
                    <hr>
                    <h5 class="mb-3 mt-3"><strong>Contact Person's Details</strong></h5>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('contactPerson', 'Contact Person') }}
                                {{ Form::text('contactPerson', $customer->contactPerson, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('contactPersonEmail', 'Contact Person Email') }}
                                {{ Form::text('contactPersonEmail', $customer->contactPersonEmail, ['class' => 'form-control']) }}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('contactPersonPhone', 'Contact Person Phone No') }}
                                {{ Form::text('contactPersonPhone', $customer->contactPersonPhone, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('contactPersonCell', 'Contact Person Cell No') }}
                                {{ Form::text('contactPersonCell', $customer->contactPersonCell, ['class' => 'form-control']) }}
                            </div>
                        </div>
                    </div>
                    {{ Form::hidden('_method', 'PUT') }}
                    {{ Form::submit('Next', ['class'=>'btn btn-danger pull-right mb-3 pl-5 pr-5']) }}
                    {{ Form::close() }}
                </div>
    </div>
    
    
@endsection
