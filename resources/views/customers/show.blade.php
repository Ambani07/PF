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
                    <a class="nav-item nav-link active text-dark" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Site Details</a>
                    <a class="nav-item nav-link text-dark" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Service Details</a>
                    <a class="nav-item nav-link text-dark" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Network Details</a>
                </div>
            </nav>
            <div class="tab-content mt-4" id="nav-tabContent ">

                @if ($customer)
                <div class="tab-pane fade show active" id="nav-customer" role="tabpanel" aria-labelledby="nav-customer-tab">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Name</strong><span class="data">{{$customer->name}}</span></li>
                            <li class="list-group-item"><strong>Contact Person</strong><span class="data">{{$customer->contactPerson}}</span></li>
                            <li class="list-group-item"><strong>Contact Email</strong><span class="data">{{$customer->contactPersonEmail}}</span></li>
                            <li class="list-group-item"><strong>Contact Person Phone No</strong><span class="data">{{$customer->contactPersonPhone}}</span></li>
                            <li class="list-group-item"><strong>Contact Person Cell No</strong><span class="data">{{$customer->contactPersonCell}}</span></li>
                        </ul>



                    <a class="btn btn-light btn-sm mt-3 mr-2 pull-left" href="/customers/{{$customer->id}}/edit">Edit <i class="fa fa-edit text-muted"></i></a>
                    {{ Form::open(['action' => ['CustomersController@destroy', $customer->id], 'method'=> 'POST' , 'class' => 'delete ml-3 ']) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::button('Delete <i class="fa fa-trash text-danger"></i>', ['type' => 'submit','class'=>'btn btn-light btn-sm mt-3 mr-2 ']) }}
                    {{ Form::close() }}
                    
                        
                    </div>
                @endif
                    
                @if ($product)
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>#ID</strong><span class="data">{{$product->id}}</span></li>
                        <li class="list-group-item"><strong>Term</strong><span class="data">{{$product->term}}</span></li>
                        <li class="list-group-item"><strong>Product Type</strong><span class="data">{{$product->category->name}}</span></li>
                        <li class="list-group-item"><strong>VLAN ID</strong><span class="data">{{$product->vlan_id}}</span></li>
                        <li class="list-group-item"><strong>Number of IP(s) usable</strong><span class="data">{{$product->no_ips}}</span></li>
                        <li class="list-group-item"><strong>Totoal Bandwidth</strong><span class="data">{{$product->total_bandwidth}}</span></li>
                        <li class="list-group-item"><strong>Local Bandwidth</strong><span class="data">{{$product->local_bandwidth}}</span></li>
                        <li class="list-group-item"><strong>International Bandwidth</strong><span class="data">{{$product->int_bandwidth}}</span></li>
                        <li class="list-group-item"><strong>Access Type</strong><span class="data">{{$product->accessType}}</span></li>
                        <li class="list-group-item"><strong>Access Speed</strong><span class="data">{{$product->accessSpeed}}</span></li>
                        <li class="list-group-item"><strong>Product Name</strong><span class="data">{{$product->product_name}}</span></li>
                        <li class="list-group-item"><strong>Username</strong><span class="data">{{$product->username}}</span></li>
                        <li class="list-group-item"><strong>Access Username</strong><span class="data">{{$product->access_username}}</span></li>

                        @if ($product->ei_option)
                            <li class="list-group-item"><strong>EI Option</strong><span class="data">{{$product->ei_option}}</span></li>
                        @endif

                        @if ($product->bandwidth_scheduling)
                            <li class="list-group-item"><strong>Bandwidth Scheduling</strong><span class="data">{{$product->bandwidth_scheduling}}</span></li>
                        @endif

                        @if ($product->prioritisation)
                            <li class="list-group-item"><strong>Prioritisation</strong><span class="data">{{$product->prioritisation}}</span></li>
                        @endif

                        
                        
                        
                    </ul>    
                    <a class="btn btn-light btn-sm mt-3 mr-2 pull-left" href="/product/{{$product->id}}/edit">Edit <i class="fa fa-edit text-muted"></i></a>
                    {{ Form::open(['action' => ['ProductController@destroy', $product->id], 'method'=> 'POST' , 'class' => 'delete ml-3']) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::button('Delete <i class="fa fa-trash text-danger"></i>', ['type' => 'submit','class'=>'btn btn-light btn-sm mt-3 mr-2 ']) }}
                    {{ Form::close() }}
                </div>

                @endif
                
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Created by</strong><span class="data">{{$customer->user->name}}</span></li>
                        <li class="list-group-item"><strong>Created at</strong><span class="data">{{$customer->created_at}}</span></li>
                        <li class="list-group-item"><strong>Updated at</strong><span class="data">{{$customer->updated_at}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
@endsection
