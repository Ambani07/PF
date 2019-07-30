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
                    <h2 class="mt-5 mb-5">Add Customer</h2>
                    
                    {{ Form::open(['action' => 'CustomersController@store', 'method'=> 'POST']) }}
                    
                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', '', ['class' => 'form-control']) }}
                    </div>
                    
                    <h5><strong>Contact Details</strong></h5>
                    <div class="form-group">
                        {{ Form::label('contactPerson', 'Contact Person') }}
                        {{ Form::text('contactPerson', '', ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('contactPersonEmail', 'Contact Person Email') }}
                        {{ Form::text('contactPersonEmail', '', ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('contactPersonPhone', 'Contact Person Phone No') }}
                        {{ Form::text('contactPersonPhone', '', ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('contactPersonCell', 'Contact Person Cell No') }}
                        {{ Form::text('contactPersonCell', '', ['class' => 'form-control']) }}
                    </div>
                    <hr>
                    <h5><strong>Service Details</strong></h5>

                    <div class="form-group">
                        {{ Form::label('typeOfService', 'Type Of Service') }}
                        <select name="typeOfService" class="form-control">
                            <option></option>
                            <option value="Gold Burstable">Gold Burstable</option>
                            <option value="National/International 75/25">National/International 75/25</option>
                            <option value="International IP Transit">International IP Transit</option>
                            <option value="National/International Variable Capped">National/International Variable Capped</option>
                        </select>
                    </div>

                    <div class="form-group">
                        {{ Form::label('sla', 'SLA') }}
                        <select name="sla" class="form-control">
                            <option value="0">False</option>
                            <option value="1">True</option>
                        </select>
                    </div>

                    <div class="form-group">
                        {{ Form::label('coverPeriod', 'Cover Period') }}
                        <select name="coverPeriod" class="form-control">
                            <option value="None">None</option>
                            <option value="Standard">Standard</option>
                            <option value="Extended">Extended</option>
                            <option value="Bronze">Premium</option>
                        </select>
                    </div>

                    <div class="form-group">
                        {{ Form::label('serviceClass', 'Service Class') }}
                        <select name="serviceClass" class="form-control">
                            <option value="None">None</option>
                            <option value="Gold">Gold</option>
                            <option value="Silver">Silver</option>
                            <option value="Bronze">Bronze</option>
                        </select>
                    </div>
                        
                    {{ Form::submit('Next', ['class'=>'btn btn-danger pull-right mb-3 pl-5 pr-5']) }}
                    {{ Form::close() }}
                </div>
    </div>
    
    
@endsection
