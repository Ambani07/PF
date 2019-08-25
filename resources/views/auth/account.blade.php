@extends('layouts.app')

@section('top-section')

@endsection

@section('content')

    <div class="container-fluid mt-5">
            <div class="row bg-light text-dark department text-center py-3 mb-4">
                    <div class="container">
                <h1>My Account </h1>
                <p>{{ Auth::user()->department->name }}</p>

              </div>
                </div>
    </div>

  <!-- Page Content -->
  <div class="container emp-profile">
      
      
          <div class="row">
              <div class="col-md-4">
                  <div class="profile-img">

                    {{-- @empty(Auth::user()->avatar)
                      
                    @endempty --}}

                    @if (!empty(Auth::user()->avatar))
                      {{-- <img src="#" alt="{{asset('images/avatars/{{ Auth::user()->avatar}}')" > --}}
                      <img src="/images/avatars/{{ Auth::user()->avatar}}" alt="avatar">
                    @else
                      <img src="https://ui-avatars.com/api/?size=300&name={{ Auth::user()->name }}+{{ Auth::user()->surname }}" alt="default avatar"/>
                    @endif

                   
                   
                    {{ Form::open(['action' => ['auth\UserController@update_avatar', Auth::user()->id], 'method'=> 'POST', 'files' => true]) }}
                      <div class="file btn btn-lg btn-primary ">
                          Change Image
                          {{ Form::file('avatar') }}
                          {{-- <input type="submit" class="btn-btn-light" value="submit"/> --}}
                      </div>

                      {{ Form::hidden('_method', 'POST') }}
                      {{ Form::submit('Save', ['class'=>'btn btn-primary d-block m-auto']) }}
                      {{ Form::close() }}
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="profile-head">
                              <h5>
                                  {{ Auth::user()->name }} {{ Auth::user()->surname }}
                              </h5>
                              <h6>
                                  {{ Auth::user()->role->name }}
                              </h6>
                              
                      <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-2">
                <a class="profile-edit-btn" href="/account/{{ Auth::user()->id }}">Edit Profile <i class="fa fa-edit"></i> </a>
                  {{-- <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/> --}}
              </div>
          </div>
          <div class="row">
              <div class="col-md-4">
                  
              </div>
              <div class="col-md-8">
                  <div class="tab-content profile-tab" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                  <div class="row">
                                      <div class="col-md-6">
                                          <label>Email</label>
                                      </div>
                                      <div class="col-md-6">
                                          <p>{{ Auth::user()->email}}</p>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-6">
                                          <label>Phone</label>
                                      </div>
                                      <div class="col-md-6">
                                          <p>{{ Auth::user()->cell_no}}</p>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-6">
                                          <label>Work</label>
                                      </div>
                                      <div class="col-md-6">
                                          <p>{{ Auth::user()->tel_no}}</p>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-6">
                                          <label>Active since</label>
                                      </div>
                                      <div class="col-md-6">
                                          <p>{{ Auth::user()->created_at}}</p>
                                      </div>
                                  </div>
                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">


                                  <div class="row">
                                      <div class="col-md-6">
                                          <label>Total Projects</label>
                                      </div>
                                      <div class="col-md-6">
                                          <p>{{ count(Auth::user()->sites)}}</p>
                                      </div>
                                  </div>
                                  
                          <div class="row">
                              <div class="col-md-12">
                                  <label>Your Bio</label><br/>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In aut officia velit ipsum quisquam nesciunt beatae, inventore repellat porro atque. Similique corporis recusandae nihil voluptatum laborum doloremque natus! Corrupti, ullam.</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      {{-- </form> --}}
      
  
  </div>
  <!-- /.container -->

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