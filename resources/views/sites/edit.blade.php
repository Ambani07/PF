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
            <h2 class="mt-5 mb-5">Edit Site</h2>
            
            {{ Form::open(['action' => ['SitesController@update', $site->id], 'method'=> 'POST']) }}
            <h5 class="text-center mb-4"><strong>Address</strong></h5>
            <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label">Name</label>
                <div class="col-sm-8">
                  <input type="text" name="name" value="{{$site->name}}" class="form-control" id="name">
                </div>
            </div>
                
            <div class="form-group row">
                <label for="street" class="col-sm-4 col-form-label">Street</label>
                <div class="col-sm-8">
                  <input type="text" name="street" value="{{$site->street}}" class="form-control" id="street">
                </div>
            </div>
            <div class="form-group row">
                <label for="suburb" class="col-sm-4 col-form-label">Suburb/Town</label>
                <div class="col-sm-8">
                  <input type="text" name="suburb" value="{{$site->suburb}}" class="form-control" id="suburb">
                </div>
            </div>
            <div class="form-group row">
                <label for="city" class="col-sm-4 col-form-label">City</label>
                <div class="col-sm-8">
                  <input type="text" name="city" value="{{$site->city}}" class="form-control" id="city">
                </div>
            </div>
            <div class="form-group row">
                <label for="regionName" class="col-sm-4 col-form-label">Region Name</label>
                <div class="col-sm-8">
                    <select name="regionName" value="{{$site->region_name}}" class="form-control">
                        <option style="visibility:hidden;" value="{{$site->region_name}}">{{$site->region_name}}</option>
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

            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit('Next', ['class'=>'btn btn-danger pull-right mb-3 pl-5 pr-5']) }}
            {{ Form::close() }}
        </div>
    
    
@endsection
