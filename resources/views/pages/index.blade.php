@extends('layouts.app')

@section('top-section')

@endsection

@section('content')

<!-- Breadcrumbs-->
<ol class="breadcrumb mt-5 mb-5">
    <li class="breadcrumb-item">
    <a href="/dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
</ol>

  <!-- Icon Cards-->
  <div class="row tex-muted mb-5">
    <div class="col-xl-3 col-sm-6 mb-3 ">
      <div class="card text-muted bg-light o-hidden h-100 shadow">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-users"></i>
          </div>
          <div class="mr-5">{{count($customers)}} Customers</div>
        </div>
        <a class="card-footer text-muted clearfix small z-1" href="/customers">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-muted bg-light o-hidden h-100 shadow">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-random"></i>
          </div>
          <div class="mr-5">11 Migrations</div>
        </div>
        <a class="card-footer text-muted clearfix small z-1" href="#">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-muted bg-light o-hidden h-100 shadow">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-list"></i>
          </div>
          <div class="mr-5">123 Incomplete</div>
        </div>
        <a class="card-footer text-muted clearfix small z-1" href="#">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-muted bg-light o-hidden h-100 shadow">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-ban"></i>
          </div>
          <div class="mr-5">13 Cancellation</div>
        </div>
        <a class="card-footer text-muted clearfix small z-1" href="#">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
  </div>

  <a class="btn btn-danger" href="/customers/create"> <i class="fa fa-plus"></i> Add customers</a>


  <table class="table mt-5 shadow">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Company</th>
      <th scope="col">Product</th>
      <th scope="col">Status</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    
    @if ($customers)
        @foreach ($customers as $customer)
          <tr>
            <td>{{$customer->firstname . ' ' . $customer->lastname}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->company}}</td>
            <td>N/A</td>
            <td>{{$customer->status}}</td>
            <td>{{$customer->created_at}}</td>
          </tr>
        @endforeach
    
        
    @endif
  </tbody>
</table>
@endsection

@section('extra-js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ asset('js/parallax.min.js') }}"></script>
<script>

    $(window).scroll(function(){
        var scrollTop = $(this).scrollTop();
        
        $('.header').css('top', -(scrollTop * 0.4) + 'px');
        $('.food').css('top', -(scrollTop * 0.4) + 'px')
    });
</script>
@endsection