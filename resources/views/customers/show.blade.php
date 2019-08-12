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
        <li class="breadcrumb-item active">Customer Details</li>
    </ol>

<div class="row">
        
        <div class="col-md-10 col-md-offset-1 text-muted bg-white m-auto p-5">
            
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active text-dark" id="nav-customer-tab" data-toggle="tab" href="#nav-customer" role="tab" aria-controls="nav-customer" aria-selected="true">Customer Details</a>
                    <a class="nav-item nav-link text-dark" id="nav-site-tab" data-toggle="tab" href="#nav-site" role="tab" aria-controls="nav-site" aria-selected="true">Site Details</a>
                    <a class="nav-item nav-link text-dark" id="nav-service-tab" data-toggle="tab" href="#nav-service" role="tab" aria-controls="nav-profile" aria-selected="false">Service Details</a>
                    <a class="nav-item nav-link text-dark" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Network Details</a>
                </div>
            </nav>
            <a class="btn btn-success mt-3 mr-2 " href="/sites/export/{{$site->id}}">Excel <i class="fa fa-download"></i></a>
            <div class="tab-content mt-4" id="nav-tabContent ">

                @if ($customer)
                <div class="tab-pane fade show active" id="nav-customer" role="tabpanel" aria-labelledby="nav-customer-tab">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Name</strong><span class="data">{{$site->customer->name}}</span></li>
                            <li class="list-group-item"><strong>Contact Person</strong><span class="data">{{$site->customer->contactPerson}}</span></li>
                            <li class="list-group-item"><strong>Contact Email</strong><span class="data">{{$site->customer->contactPersonEmail}}</span></li>
                            <li class="list-group-item"><strong>Contact Person Phone No</strong><span class="data">{{$site->customer->contactPersonPhone}}</span></li>
                            <li class="list-group-item"><strong>Contact Person Cell No</strong><span class="data">{{$site->customer->contactPersonCell}}</span></li>
                        </ul>

                        @if (Auth::user()->role->read_only == 0)
                        <a class="btn btn-light btn-sm mt-3 mr-2 pull-left" href="/customers/{{$customer->id}}/edit">Edit <i class="fa fa-edit text-muted"></i></a>
                        {{ Form::open(['action' => ['CustomersController@destroy', $customer->id], 'method'=> 'POST' , 'class' => 'delete ml-3 ']) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::button('Delete <i class="fa fa-trash text-danger"></i>', ['type' => 'submit','class'=>'btn btn-light btn-sm mt-3 mr-2 ']) }}
                        {{ Form::close() }}
                        @endif
                    </div>
                @endif
            
                <div class="tab-pane fade" id="nav-site" role="tabpanel" aria-labelledby="nav-site-tab">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Product</strong><span class="data">{{$site->category->name}}</span></li>
                        <li class="list-group-item"><strong>Site Name</strong><span class="data">{{$site->name}}</span></li>
                        <li class="list-group-item"><strong>Street</strong><span class="data">{{$site->street}}</span></li>
                        <li class="list-group-item"><strong>Suburb</strong><span class="data">{{$site->suburb}}</span></li>
                        <li class="list-group-item"><strong>City</strong><span class="data">{{$site->city}}</span></li>
                        <li class="list-group-item"><strong>Region</strong><span class="data">{{$site->region_name}}</span></li>
                    </ul>
                    @if (Auth::user()->role->read_only == 0)
                        <a class="btn btn-light btn-sm mt-3 mr-2 pull-left" href="/site/{{$site->id}}/edit">Edit <i class="fa fa-edit text-muted"></i></a>
                        {{ Form::open(['action' => ['SitesController@destroy', $site->id], 'method'=> 'POST' , 'class' => 'delete ml-3 ']) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::button('Delete <i class="fa fa-trash text-danger"></i>', ['type' => 'submit','class'=>'btn btn-light btn-sm mt-3 mr-2 ']) }}
                        {{ Form::close() }}
                    @endif    
                </div>

                <div class="tab-pane fade" id="nav-service" role="tabpanel" aria-labelledby="nav-service-tab">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Type of service</strong><span class="data">{{$site->service->type_of_service}}</span></li>
                        <li class="list-group-item"><strong>SLA</strong>
                            <span class="data">
                                @if ($site->service->sla == 0)
                                    True
                                @else
                                    False
                                @endif
                            </span>
                        </li>
                        <li class="list-group-item"><strong>Cover Period</strong><span class="data">{{$site->service->cover_period}}</span></li>
                        <li class="list-group-item"><strong>Service Class </strong><span class="data">{{$site->service->service_class}}</span></li>
                    </ul>
                    @if (Auth::user()->role->read_only == 0)
                        <a class="btn btn-light btn-sm mt-3 mr-2 pull-left" href="/services/{{$site->service->id}}/edit">Edit <i class="fa fa-edit text-muted"></i></a>
                        {{ Form::open(['action' => ['ServicesController@destroy', $site->service->id], 'method'=> 'POST' , 'class' => 'delete ml-3 ']) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::button('Delete <i class="fa fa-trash text-danger"></i>', ['type' => 'submit','class'=>'btn btn-light btn-sm mt-3 mr-2 ']) }}
                        {{ Form::close() }}
                    @endif
                </div>
                
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>NTU Name</strong><span>{{$site->network->ntu_name}}</span></li>
                        <li class="list-group-item"><strong>NTU IP Address</strong><span class="data">{{$site->network->ntu_ip_address}}</span></li>
                        <li class="list-group-item"><strong>Circuit Number</strong><span class="data">{{$site->network->circuit_no}}</span></li>
                        <li class="list-group-item"><strong>Physical Interface</strong><span class="data">{{$site->network->physical_interface}}</span></li>
                        <li class="list-group-item"><strong>Encapsulation</strong><span class="data">{{$site->network->encapsulation}}</span></li>
                        <li class="list-group-item"><strong>Customer Facing Port</strong><span class="data">{{$site->network->customer_facing_port}}</span></li>
                        <li class="list-group-item"><strong>Customer VLAN</strong><span class="data">{{$site->network->customer_vlan}}</span></li>
                        <li class="list-group-item"><strong>Link Subnet</strong><span class="data">{{$site->network->link_subnet}}</span></li>
                        <li class="list-group-item"><strong>Gateway Address</strong><span class="data">{{$site->network->gateway_address}}</span></li>
                        <li class="list-group-item"><strong>Bandwidth</strong><span class="data">{{$site->network->bandwidth}}</span></li>
                        <li class="list-group-item"><strong>ME Access Type</strong><span class="data">{{$site->network->me_access_type}}</span></li>
                        <li class="list-group-item"><strong>ME Access Cct Number</strong><span class="data">{{$site->network->me_access_no}}</span></li>
                        <li class="list-group-item"><strong>ME Node</strong><span class="data">{{$site->network->me_node}}</span></li>
                        <li class="list-group-item"><strong>ME Port</strong><span class="data">{{$site->network->me_port}}</span></li>
                    </ul>
                    @if (Auth::user()->role->read_only == 0)
                        <a class="btn btn-light btn-sm mt-3 mr-2 pull-left" href="/services/{{$site->service->id}}/edit">Edit <i class="fa fa-edit text-muted"></i></a>
                        {{ Form::open(['action' => ['ServicesController@destroy', $site->service->id], 'method'=> 'POST' , 'class' => 'delete ml-3 ']) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::button('Delete <i class="fa fa-trash text-danger"></i>', ['type' => 'submit','class'=>'btn btn-light btn-sm mt-3 mr-2 ']) }}
                        {{ Form::close() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
    
@endsection
