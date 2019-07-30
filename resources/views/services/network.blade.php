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
            <a href="/customers">Add Site</a>
        </li>

    </ol>


    <div class="row">
        <div class="col-md-8 col-md-offset-2 mb-5 m-auto text-muted bg-white">
            <h2 class="mt-5 mb-5">Customer's Site</h2>
            
            {{ Form::open(['action' => 'CustomersController@store', 'method'=> 'POST']) }}
            
            <div class="form-group">
                {{ Form::label('name', 'Site Name') }}
                {{ Form::text('name', '', ['class' => 'form-control']) }}
            </div>
            
            <h5><strong>Address</strong></h5>
                
                <div class="form-group">
                    {{ Form::label('street', 'Street') }}
                    {{ Form::text('street', '', ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('suburb', 'Suburb/Town') }}
                    {{ Form::text('suburb', '', ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('city', 'City') }}
                    {{ Form::text('city', '', ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('regionName', 'Region Name') }}
                    <select name="regionName" class="form-control">
                        <option value="CR">CR</option>
                        <option value="ER">ER</option>
                        <option value="GC">GC</option>
                        <option value="NER">NER</option>
                        <option value="SR">SR</option>
                        <option value="WR">WR</option>
                        <option value="CR-NC">CR</option>
                    </select>
                </div>
                
            {{ Form::submit('Next', ['class'=>'btn btn-danger pull-right mb-3 pl-5 pr-5']) }}
            {{ Form::close() }}
        </div>
</div>

@endsection

