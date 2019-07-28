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
        <li class="breadcrumb-item">
            <a href="/customers">Add Customer</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="/customers/">Add Product</a>
        </li>

    </ol>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 mb-5 m-auto text-muted bg-white">
                    <h2 class="mt-5 mb-5">Product</h2>

                    {{-- {{ $customer['firstname'] }} --}}
                    
                    {{ Form::open(['action' => 'ProductController@store', 'method'=> 'POST']) }}
                    <h5><strong>Product Details</strong></h5>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('product_id', 'Product') }}
                                <select name="product_id" class="form-control">
                                    @foreach ($products as $product)
                                        <option value="{{$product->id}}">{{$product->name}}</option>
                                    @endforeach
                                    
                                  </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                            {{ Form::label('term', 'Term') }}
                            <select name="term" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('vland_id', 'VLAN ID') }}
                                {{ Form::text('vland_id', '', ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('circuit_no', 'Circuit Number') }}
                                {{ Form::text('circuit_no', '', ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('no_ips', 'Number of IP(s)') }}
                                {{ Form::text('no_ips', '', ['class' => 'form-control']) }}
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5 class="mb-3 mt-3"><strong>Bandwidth</strong></h5>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('total_bandwidth', 'Total Bandwidth') }}
                                {{ Form::text('total_bandwidth', '', ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('local_bandwidth', 'Local Bandwidth') }}
                                {{ Form::text('local_bandwidth', '', ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('int_bandwidth', 'Int Bandwidth') }}
                                {{ Form::text('int_bandwidth', '', ['class' => 'form-control']) }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    {{ Form::label('accessType', 'Access Type') }}
                                    <select name="accessType" class="form-control">
                                            <option value="LAN Connect">LAN Connect</option>
                                            <option value="Managed LAN">Managed LAN</option>
                                            <option value="Metro Link">Metro Link</option>
                                            <option value="Teraco Dedicated Cross Connect">Teraco Dedicated Cross Connect</option>
                                            <option value="Teraco Dedicated Shared Connect">Teraco Shared Cross Connect</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    {{ Form::label('accessSpeed', 'Access Speed') }}
                                    {{ Form::text('accessSpeed', '', ['class' => 'form-control']) }}
                                </div>
                            </div>
                        </div>

                    
                    <hr>
                    <h5 class="mb-3 mt-3"><strong class="text-danger">Teraco X Connect Point (if applicable)</strong></h5>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('ei_option', 'EI Option') }}
                                {{ Form::text('ei_option', '', ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('bandwidth_scheduling', 'Bandwidth Scheduling') }}
                                {{ Form::text('bandwidth_scheduling', '', ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('prioritisation', 'Prioritisation') }}
                                {{ Form::text('prioritisation', '', ['class' => 'form-control']) }}
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('product_name', 'Product Name') }}
                                {{ Form::text('product_name', '', ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('username', 'Username') }}
                                {{ Form::text('username', '', ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('access_username', 'Access Username') }}
                                {{ Form::text('access_username', '', ['class' => 'form-control']) }}
                            </div>
                        </div>
                    </div>

                    {{ Form::submit('Submit', ['class'=>'btn btn-danger pull-right mb-3 pl-5 pr-5']) }}
                    {{ Form::close() }}
    

            
                </div>
    </div>
    
    
@endsection
