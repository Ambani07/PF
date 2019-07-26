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
          @if($customer)
          <a href="/customers" class="btn btn-success pull-right"> <i class="fa fa-download"></i> Excel</a>
            <h4 class="text-muted mb-5"><strong>Customer Details</strong></h4>
            <p><strong>Firstname: </strong> {{$customer->firstname}}</p>
            <p><strong>Lastname: </strong> {{$customer->lastname}}</p>
            <p><strong>Email: </strong> {{$customer->email}}</p>
            <p><strong>Company: </strong> {{$customer->company}}</p>

            <hr>
            <h5 class="text-muted"><strong>Address</strong></h5>
            <p><strong>Street: </strong> {{$customer->street}}</p>
            <p><strong>Suburb / Town: </strong> {{$customer->suburb}}</p>
            <p><strong>City: </strong> {{$customer->city}}</p>

            <hr>
            <h5 class="text-muted"><strong>Contact Person</strong></h5>
            <p><strong>Name: </strong> {{$customer->contactPerson}}</p>
            <p><strong>Email: </strong> {{$customer->contactPersonEmail}}</p>
            <p><strong>Phone No: </strong> {{$customer->contactPersonPhone}}</p>
            <p><strong>Cell No: </strong> {{$customer->contactPersonCell}}</p>

            <a href="/customers" class="btn btn-danger mt-5 mb-5"> <i class="fa fa-chevron-left"></i> Back</a>
          @endif
      </div>
    </div>
    
@endsection