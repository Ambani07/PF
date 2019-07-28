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
            <a href="/customers">Product</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="/customers/">Edit Product</a>
        </li>

    </ol>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 mb-5 m-auto text-muted bg-white">
                    <h2 class="mt-5 mb-5">Product</h2>

                    {{-- {{ $customer['firstname'] }} --}}
                    
                    {{ Form::open(['action' => ['ProductController@update', $product->id], 'method'=> 'POST']) }}
                    <h5><strong>Edit Product Details</strong></h5>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('category_id', 'Product') }}
                                <select name="category_id" class="form-control">
                                        <option value="{{$product->category->id}}">{{$product->category->name}}</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                    
                                  </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                            {{ Form::label('term', 'Term') }}
                            <select name="term" class="form-control">
                                    <option value="{{$product->term}}">{{$product->term}}</option>
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
                                {{ Form::text('vland_id', $product->vlan_id, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('circuit_no', 'Circuit Number') }}
                                {{ Form::text('circuit_no', $product->circuit_no, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('no_ips', 'Number of IP(s)') }}
                                {{ Form::text('no_ips', $product->no_ips, ['class' => 'form-control']) }}
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5 class="mb-3 mt-3"><strong>Bandwidth</strong></h5>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('total_bandwidth', 'Total Bandwidth') }}
                                {{ Form::text('total_bandwidth',  $product->total_bandwidth, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('local_bandwidth', 'Local Bandwidth') }}
                                {{ Form::text('local_bandwidth',  $product->local_bandwidth, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('int_bandwidth', 'Int Bandwidth') }}
                                {{ Form::text('int_bandwidth',  $product->int_bandwidth, ['class' => 'form-control']) }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    {{ Form::label('accessType', 'Access Type') }}
                                    <select name="accessType" class="form-control">
                                            <option value="{{$product->accessType}}">{{$product->accessType}}</option>
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
                                    {{ Form::text('accessSpeed', $product->accessSpeed, ['class' => 'form-control']) }}
                                </div>
                            </div>
                        </div>

                    
                    <hr>
                    <h5 class="mb-3 mt-3"><strong class="text-danger">Teraco X Connect Point (if applicable)</strong></h5>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('ei_option', 'EI Option') }}
                                {{ Form::text('ei_option', $product->ei_option, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('bandwidth_scheduling', 'Bandwidth Scheduling') }}
                                {{ Form::text('bandwidth_scheduling', $product->bandwidth_scheduling, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('prioritisation', 'Prioritisation') }}
                                {{ Form::text('prioritisation', $product->prioritisation, ['class' => 'form-control']) }}
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('product_name', 'Product Name') }}
                                {{ Form::text('product_name', $product->product_name, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('username', 'Username') }}
                                {{ Form::text('username', $product->username, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {{ Form::label('access_username', 'Access Username') }}
                                {{ Form::text('access_username', $product->access_username, ['class' => 'form-control']) }}
                            </div>
                        </div>
                    </div>

                    {{ Form::hidden('_method', 'PUT') }}
                    {{ Form::submit('Update', ['class'=>'btn btn-danger pull-right mb-3 pl-5 pr-5']) }}
                    {{ Form::close() }}
    

            
                </div>
    </div>
    
    
@endsection
