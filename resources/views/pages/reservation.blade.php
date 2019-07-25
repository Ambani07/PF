@extends('layouts.app')

@section('head')
    

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">


@endsection

@section('top-section')
<header class="header-reservation">

  <div class="header__text-box mt-5">
      <h1 class="heading-primary">
          <span class="heading-primary--main">Reservation</span>
          <span class="heading-primary--sub">Please Complete The Form.</span>
      </h1>
  </div>
  
</header>
@endsection

@section('content')

<div class="container">
    <div class="row form-book__full mb-5 mt-5 p-5">

        
        
      <div class="col-md-12">
        <div class="row">

            <div class="form-group">
                <label>Date of Birth</label>
                <div class='input-group '>
                  <input type='text' class="form-control date" name="dob" id='startDate' />
                  <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar">
                    </span>
                  </span>
                </div>
              </div>
            
            <div class="col-md-6 col-md-offset-3">
                <form class="form">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" aria-describedby="email" placeholder="Full Name" required>
                      <label class="form-label" for="name">Full Name</label>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email">
                        <label class="form-label" for="email">Email address</label>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form_datetime" id="arrival-time" aria-describedby="arrival-time" placeholder="Arrival Time" required>
                        <label class="form-label" for="arrival-time">Arrival Time</label>
                      </div>
                      <div class="form-group">
                          <input type="number" class="form-control" id="mobile_number" aria-describedby="mobile_number" placeholder="Mobile Number">
                          <label class="form-label" for="mobile_number">Mobile Number</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  id="number_of_people" aria-describedby="number_of_people" placeholder="Number of people" required>
                            <label class="form-label" for="name">Number of People</label>
                          </div>
                        <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Kids included</label>
                        </div>
                    
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning text-white btn-md">NEXT STEP &rarr;</button>
                        </div>

                    
                  </form>

                  
            </div>
        </div>
      </div>
        
    </div>
</div>
<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker3'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
            </div>
        </div>
        
    </div>
</div>


@endsection

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
@section('extra-js')
<script type="text/javascript">

  $('.date').datepicker({  

     format: 'mm-dd-yyyy'

   });  

</script>


@endsection

