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
            <h2 class="text-center mt-5 mb-5">Customer's Site</h2>
            
            {{ Form::open(['action' => 'ServicesController@store', 'method'=> 'POST']) }}
            <h5 class="text-center mb-4"><strong>Site Info</strong></h5>
            <div class="form-group row">
                <label for="category_id" class="col-sm-4 col-form-label">Product</label>
                <div class="col-sm-8">
                    <select name="category_id" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label">Name</label>
                <div class="col-sm-8">
                  <input type="text" name="name" class="form-control" id="name">
                </div>
            </div>
            <h5 class="text-center mb-4"><strong>Address</strong></h5>
            <div class="form-group row">
                <label for="street" class="col-sm-4 col-form-label">Street</label>
                <div class="col-sm-8">
                  <input type="text" name="street" class="form-control" id="street">
                </div>
            </div>
            <div class="form-group row">
                <label for="suburb" class="col-sm-4 col-form-label">Suburb/Town</label>
                <div class="col-sm-8">
                  <input type="text" name="suburb" class="form-control" id="suburb">
                </div>
            </div>
            <div class="form-group row">
                <label for="city" class="col-sm-4 col-form-label">City</label>
                <div class="col-sm-8">
                  <input type="text" name="city" class="form-control" id="city">
                </div>
            </div>
            <div class="form-group row">
                <label for="regionName" class="col-sm-4 col-form-label">Region Name</label>
                <div class="col-sm-8">
                    <select name="regionName" class="form-control">
                        <option></option>
                        <option value="CR">CR</option>
                        <option value="ER">ER</option>
                        <option value="GC">GC</option>
                        <option value="NER">NER</option>
                        <option value="SR">SR</option>
                        <option value="WR">WR</option>
                        <option value="CR-NC">CR</option>
                    </select>
                </div>
            </div>
            <hr><br><br>
            <h5 class="text-center mb-4"><strong>Site SAP Information</strong></h5>
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
            <div class="form-group row">
                <label for="me_access_no" class="col-sm-4 col-form-label">Me Access Cct Number</label>
                <div class="col-sm-8">
                    <input type="text" name="me_access_no" class="form-control" id="me_access_no">
                    <small class="text-danger">(Fibre/NTU)</small>
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
            
            
            
                
            {{ Form::submit('Next', ['class'=>'btn btn-danger pull-right mb-3 pl-5 pr-5']) }}
            {{ Form::close() }}
        </div>
</div>

@endsection

