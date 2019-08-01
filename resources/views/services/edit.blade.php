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
            <h2 class="mt-5 mb-5">Edit Service</h2>
            
            {{ Form::open(['action' => ['ServicesController@update', $service->id], 'method'=> 'POST']) }}
            <h5 class="text-center mb-4"><strong>Address</strong></h5>

            <div class="form-group row">
                <label for="type_of_service" class="col-sm-4 col-form-label">Type Of Service</label>
                <div class="col-sm-8">
                    <select name="type_of_service" value="{{$service->type_of_service}}" class="form-control">
                        <option style="visibility:hidden;" value="{{$service->type_of_service}}">{{$service->type_of_service}}</option>
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
                    <select name="sla" value="{{$service->sla}}" class="form-control">
                        <option style="visibility:hidden;" value="{{$service->sla}}">
                            @if ($service->sla == 0)
                                True
                            @else
                                False
                            @endif
                        </option>
                        <option value="0">False</option>
                        <option value="1">True</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="cover_period" class="col-sm-4 col-form-label">Cover Period</label>
                <div class="col-sm-8">
                    <select name="cover_period" value="{{$service->cover_period}}" class="form-control">
                        <option style="visibility:hidden;" value="{{$service->cover_period}}">{{$service->cover_period}}</option>
                        <option value="None">None</option>
                        <option value="Standard">Standard</option>
                        <option value="Extended">Extended</option>
                        <option value="Bronze">Premium</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="service_class" class="col-sm-4 col-form-label">Service Class</label>
                <div class="col-sm-8">
                    <select name="service_class" value="{{$service->service_class}}" class="form-control">
                        <option style="visibility:hidden;" value="{{$service->service_class}}">{{$service->service_class}}</option>
                        <option value="None">None</option>
                        <option value="Gold">Gold</option>
                        <option value="Silver">Silver</option>
                        <option value="Bronze">Bronze</option>
                    </select>
                </div>
            </div>
                
            

            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit('Next', ['class'=>'btn btn-danger pull-right mb-3 pl-5 pr-5']) }}
            {{ Form::close() }}
        </div>
    
    
@endsection
