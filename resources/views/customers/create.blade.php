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
                        <h5><strong>Customer Details</strong></h5>
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label">Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contactPerson" class="col-sm-4 col-form-label">Contact Person</label>
                            <div class="col-sm-8">
                                <input type="text" name="contactPerson" class="form-control" id="contactPerson">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contactPersonEmail" class="col-sm-4 col-form-label">Contact Person Email</label>
                            <div class="col-sm-8">
                                <input type="text" name="contactPersonEmail" class="form-control" id="contactPersonEmail">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contactPersonPhone" class="col-sm-4 col-form-label">Contact Person Tel</label>
                            <div class="col-sm-8">
                                <input type="text" name="contactPersonPhone" class="form-control" id="contactPersonPhone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contactPersonCell" class="col-sm-4 col-form-label">Contact Person Cell</label>
                            <div class="col-sm-8">
                                <input type="text" name="contactPersonCell" class="form-control" id="contactPersonCell">
                            </div>
                        </div>
                    <hr>
                    <h5><strong>Service Details</strong></h5>


                        <div class="form-group row">
                            <label for="typeOfService" class="col-sm-4 col-form-label">Type Of Service</label>
                            <div class="col-sm-8">
                                <select name="typeOfService" class="form-control">
                                    <option></option>
                                    <option value="Direct Fibre">Direct Fibre</option>
                                    <option value="Microwave">Microwave</option>
                                    <option value="Standard">Standard</option>
                                    <option value="NO EDD">NO EDD</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sla" class="col-sm-4 col-form-label">SLA</label>
                            <div class="col-sm-8">
                                <select name="sla" class="form-control">
                                    <option value="0">False</option>
                                    <option value="1">True</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="coverPeriod" class="col-sm-4 col-form-label">Cover Period</label>
                            <div class="col-sm-8">
                                <select name="coverPeriod" class="form-control">
                                    <option value="None">None</option>
                                    <option value="Standard">Standard</option>
                                    <option value="Extended">Extended</option>
                                    <option value="Bronze">Premium</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="serviceClass" class="col-sm-4 col-form-label">Service Class</label>
                            <div class="col-sm-8">
                                <select name="serviceClass" class="form-control">
                                    <option value="None">None</option>
                                    <option value="Gold">Gold</option>
                                    <option value="Silver">Silver</option>
                                    <option value="Bronze">Bronze</option>
                                </select>
                            </div>
                        </div>

                    {{ Form::submit('Next', ['class'=>'btn btn-danger pull-right mb-3 pl-5 pr-5']) }}
                    {{ Form::close() }}
                </div>
    </div>
    
    
@endsection
