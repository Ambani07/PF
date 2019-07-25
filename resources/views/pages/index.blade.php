@extends('layouts.app')

@section('top-section')

@endsection

@section('content')

<!-- Breadcrumbs-->
<ol class="breadcrumb mt-5">
    <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
</ol>

  <!-- Icon Cards-->
  <div class="row tex-muted">
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-muted bg-light o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-users"></i>
          </div>
          <div class="mr-5">26 Customers</div>
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
      <div class="card text-muted bg-light o-hidden h-100">
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
      <div class="card text-muted bg-light o-hidden h-100">
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
      <div class="card text-muted bg-light o-hidden h-100">
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


  <table class="table mt-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Company</th>
      <th scope="col">Product</th>
      <th scope="col">Status</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark Otto</td>
      <td>Mark.Otto@gmail.com</td>
      <td>Telkom</td>
      <td>EI</td>
      <td>complete</td>
      <td>24/07/2019</td>
    </tr>
    <tr>
      <td>Mark Otto</td>
      <td>Mark.Otto@gmail.com</td>
      <td>Telkom</td>
      <td>EI</td>
      <td>complete</td>
      <td>24/07/2019</td>
    </tr>
    <tr>
      <td>Mark Otto</td>
      <td>Mark.Otto@gmail.com</td>
      <td>Telkom</td>
      <td>EI</td>
      <td>complete</td>
      <td>24/07/2019</td>
    </tr>
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