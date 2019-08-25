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
      <div class="card text-muted bg-light o-hidden h-100 ">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-users"></i>
          </div>
          <div class="mr-5">{{count($sites)}} sites</div>
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
      <div class="card text-muted bg-light o-hidden h-100 ">
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
      <div class="card text-muted bg-light o-hidden h-100 ">
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
      <div class="card text-muted bg-light o-hidden h-100 ">
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

      <div class="card mb-3">

          <h2 class="text-dark">Line Graph</h2>
          <p class="lead" >Customers per month</p>
        <div class="card-body">
          <canvas id="myAreaChart" width="80%" height="30"></canvas>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

  <div class="row">
  <table class="table mt-5 ">
  <thead class="text-dark">
    <tr>
        <th scope="col"># ID</th>
        <th scope="col">Name</th>
        <th scope="col">Contact Person</th>
        <th scope="col">Contact Person Email</th>
        <th scope="col">Product</th>
        <th scope="col">Status</th>
        <th scope="col">Date Created</th>
        <th></th>
        <th></th>
    </tr>
  </thead>
  <tbody>
    
    @if ($sites)
        @foreach ($sites as $site)
          <tr>
            <td>{{$site->id}}</td>
            <td>{{$site->name}}</td>
            <td>{{$site->customer->contactPerson}}</td>
            <td>{{$site->customer->contactPersonEmail}}</td>
            <td>{{$site->category->name}}</td>
            <td>
              @if ($site->customer->status == 1)
                  Active
              @else
                  <span class="text-danger">Not active</span>
              @endif
            </td>
            <td>{{$site->created_at}}</td>
            @if (Auth::user()->role->read_only == 0)
                <td><a href="/customers/{{$site->id}}"> view</a></td>
            @endif
          </tr>
        @endforeach
    
        
    @endif
  </tbody>
</table>
</div>
@endsection

@section('extra-js')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ url('js/Chart.min.js')}}" ></script>
<script src="{{ url('js/chart-area.js')}}" ></script>
<script>

    $(window).scroll(function(){
        var scrollTop = $(this).scrollTop();
        
        $('.header').css('top', -(scrollTop * 0.4) + 'px');
        $('.food').css('top', -(scrollTop * 0.4) + 'px')
    });
</script>





@endsection