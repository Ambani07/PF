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
          <div class="mr-5">{{count($sites)}} sites</div>
        </div>
        <a class="card-footer text-muted clearfix small z-1" href="/sites">
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

  <a class="btn btn-dark" href="/customers/create"> <i class="fa fa-plus"></i> Add Customer</a>


  <table class="table mt-5 shadow">
  <thead class="thead-dark">
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
            <td></td>
            <td>
              @if ($site->customer->status == 1)
                  Active
              @else
                  <span class="text-danger">Not active</span>
              @endif
            </td>
            <td>{{$site->created_at}}</td>
            <td><a href="/customers/{{$site->id}}"> <i class="fa fa-eye text-muted"></i></a></td>
                <td><a href="/customers/{{$site->id}}/edit"><i class="fa fa-edit text-muted"></i></a></td>
                <td>
                    {{ Form::open(['action' => ['CustomersController@destroy', $site->id], 'method'=> 'POST' , 'class' => 'delete ml-3 ']) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::button('Delete <i class="fa fa-trash text-danger"></i>', ['type' => 'submit','class'=>'btn btn-light btn-sm mt-3 mr-2 ']) }}
                {{ Form::close() }}
                </td>
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