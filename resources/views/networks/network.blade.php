@extends('layouts.app')

@section('content')
    
    <!-- Breadcrumbs-->
    <ol class="breadcrumb mt-5 mb-5">
        <li class="breadcrumb-item">
            <a class="text-muted" href="/dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a class="text-muted" href="/customers">Add Customer & Service</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="/customers">Add Site Information</a>
        </li>

    </ol>


    <div class="row">
        <div class="col-md-8 col-md-offset-2 mb-5 m-auto text-muted bg-white">
            <h2 class="text-center mt-5 mb-5">Site SAP Information</h2>
            
            {{ Form::open(['action' => 'ServicesController@update', 'method'=> 'POST']) }}
            <div class="form-group row">
                <label for="bandwidth" class="col-sm-4 col-form-label">Bandwidth</label>
                <div class="col-sm-8">
                    <input type="text" name="bandwidth" class="form-control" id="bandwidth">
                </div>
            </div>
            <div class="form-group row">
                <label for="me_node" class="col-sm-4 col-form-label">ME Node</label>
                <div class="col-sm-8">
                    <input type="text" name="me_node" class="form-control" id="me_node">
                </div>
            </div>
            <div class="form-group row">
                <label for="me_port" class="col-sm-4 col-form-label">ME Port</label>
                <div class="col-sm-8">
                    <input type="text" name="me_port" class="form-control" id="me_port">
                </div>
            </div>
            <div class="form-group row">
                <label for="me_access_type" class="col-sm-4 col-form-label">ME Access Type</label>
                <div class="col-sm-8">
                    <select name="me_access_type" class="form-control">
                        <option></option>
                        <option value="Direct Fibre">Direct Fibre</option>
                        <option value="Microwave">Microwave</option>
                        <option value="Standard">Standard</option>
                        <option value="NO EDD">NO EDD</option>
                    </select>
                </div>
            </div>
            <hr><br>
            <h5 class="text-center mb-4"><strong>Network Equipment</strong></h5>
            <div class="form-group row">
                <label for="ntu" class="col-sm-4 col-form-label">NTU</label>
                <div class="col-sm-8">
                    <select name="ntu" class="form-control">
                        <option></option>
                        <option value="New SAS-E">New SAS-E</option>
                        <option value="Existing SAS-E">Existing SAS-E</option>
                        <option value="Existing ATN905">Existing ATN905</option>
                        <option value="NO EDD">NO EDD</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="circuit_no" class="col-sm-4 col-form-label">Circuit Number</label>
                <div class="col-sm-8">
                    <input type="text" name="circuit_no" class="form-control" id="circuit_no">
                    <small class="text-danger">If it doesn't exist</small>
                </div>
            </div>
            <div class="form-group row">
                <label for="me_access_no" class="col-sm-4 col-form-label">Me Access Cct Number</label>
                <div class="col-sm-8">
                    <input type="text" name="me_access_no" class="form-control" id="me_access_no">
                    <small class="text-danger">(Fibre/NTU)</small>
                </div>
            </div>
            <div class="form-group row">
                <label for="physical_interface" class="col-sm-4 col-form-label">Physical Interface</label>
                <div class="col-sm-8">
                    <select name="physical_interface" class="form-control">
                        <option></option>
                        <option value="Electrical">Electrical</option>
                        <option value="Optical">Optical</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="encapsulation" class="col-sm-4 col-form-label">Encapsulation</label>
                <div class="col-sm-8">
                    <select name="encapsulation" class="form-control">
                        <option></option>
                        <option value="dot1q">dot1q</option>
                        <option value="N/A">N/A</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="ntu_name" class="col-sm-4 col-form-label">NTU Name</label>
                <div class="col-sm-8">
                  <input type="text" name="ntu_name" class="form-control" id="ntu_name">
                </div>
            </div>
            <div class="form-group row">
                <label for="customer_facing_port" class="col-sm-4 col-form-label">Customer Facing Port</label>
                <div class="col-sm-8">
                  <input type="text" name="customer_facing_port" class="form-control" id="customer_facing_port">
                </div>
            </div>
            <div class="form-group row">
                <label for="customer_vlan" class="col-sm-4 col-form-label">Customer VLAN </label>
                <div class="col-sm-8">
                  <input type="text" name="customer_vlan" class="form-control" id="customer_vlan">
                  <small class="text-danger">only for 7210 dot1q interface</small>
                </div>
            </div>
            <div class="form-group row">
                <label for="ntu_ip_address" class="col-sm-4 col-form-label">NTU IP Address</label>
                <div class="col-sm-8">
                  <input type="text" name="ntu_ip_address" class="form-control" id="ntu_ip_address">
                </div>
            </div>
            <div class="form-group row">
                <label for="link_subnet" class="col-sm-4 col-form-label">Link Subnet </label>
                <div class="col-sm-8">
                  <input type="text" name="link_subnet" class="form-control" id="link_subnet">
                  <small class="text-danger">in format v.w.x.y/z</small>
                </div>
            </div>
            <div class="form-group row">
                <label for="gateway_address" class="col-sm-4 col-form-label">Management Gateway Address </label>
                <div class="col-sm-8">
                  <input type="text" name="gateway_address" class="form-control" id="gateway_address">
                  <small class="text-danger">only required for T5C</small>
                </div>
            </div>
            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit('Next', ['class'=>'btn btn-danger pull-right mb-3 pl-5 pr-5']) }}
            {{ Form::close() }}
        </div>
</div>

@endsection

