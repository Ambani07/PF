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
    

          {{-- @if($customer)
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
            
          @endif --}}


<div class="row">
        <div class="col-md-10 col-md-offset-1 text-muted bg-white m-auto p-5">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Customer Details</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Product Details</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">More</a>
                </div>
            </nav>
            <div class="tab-content mt-4" id="nav-tabContent ">
                    
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Company</th>
                            <th scope="col">Contact Person</th>
                            <th scope="col">Contact Email</th>
                            <th scope="col">Contact Phone No</th>
                            <th scope="col">Contact Cell No</th>
                            <th scope="col "></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th>{{$customer->id}}</th>
                            <td>{{$customer->firstname}}</td>
                            <td>{{$customer->lastname}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->company}}</td>
                            <td>{{$customer->contactPerson}}</td>
                            <td>{{$customer->contactPersonEmail}}</td>
                            <td>{{$customer->contactPersonPhone}}</td>
                            <td>{{$customer->contactPersonCell}}</td>
                            <td >
                                <div class="row">
                                    {{-- <div class="col-md-4">
                                            <a class="btn btn-light btn-sm mt-3" href="/customers/{{$customer->id}}"> <i class="fa fa-eye text-muted"></i></a>
                                    </div> --}}
                                    <div class="col-md-4">
                                            <a class="btn btn-light btn-sm mt-3" href="/customers/{{$customer->id}}/edit"><i class="fa fa-edit text-muted"></i></a>

                                    </div>
                                    <div class="col-md-4">
                                            {{ Form::open(['action' => ['CustomersController@destroy', $customer->id], 'method'=> 'POST' , 'class' => 'delete ml-3']) }}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::button('<i class="fa fa-trash text-danger"></i>', ['type' => 'submit','class'=>'btn btn-light pull-right btn-sm mt-1']) }}
                                        {{ Form::close() }}
                                    </div>
                                </div>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Term</th>
                            <th scope="col">Product Type</th>
                            <th scope="col">VLAN ID</th>
                            <th scope="col">Circuit Number</th>
                            <th scope="col">No IP(s)</th>
                            <th scope="col">Total Bandwidth</th>
                            <th scope="col">Local Bandwidth</th>
                            <th scope="col">Int Bandwidth</th>
                            <th scope="col">Access Type</th>
                            <th scope="col">Access Speed</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>{{$product->id}}</th>
                                <td>{{$product->term}}</td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->vlan_id}}</td>
                                <td>{{$product->circuit_no}}</td>
                                <td>{{$product->no_ips}}</td>
                                <td>{{$product->total_bandwidth}}</td>
                                <td>{{$product->local_bandwidth}}</td>
                                <td>{{$product->int_bandwidth}}</td>
                                <td>{{$product->accessType}}</td>
                                <td>{{$product->accessSpeed}}</td>
                                
                            </tr>
                        </tbody>
                    </table>

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Product Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Access Username</th>
                                <th scope="col">
                                    @if ($product->ei_option)
                                        EI Option
                                    @endif
                                </th>
                                <th scope="col">
                                    
                                    @if ($product->bandwidth_scheduling)
                                        Bandwidth Scheduling
                                    @endif
                                </th>
                                <th scope="col">
                                    
                                    @if ($product->prioritisation)
                                        Prioritisation
                                    @endif
                                </th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->username}}</td>
                                <td>{{$product->access_username}}</td>
                                <th>{{$product->ei_option}}</th>
                                <td>{{$product->bandwidth_scheduling}}</td>
                                <td>{{$product->prioritisation}}</td>
                                <td >
                                        <div class="row">
                                            {{-- <div class="col-md-4">
                                                    <a class="btn btn-light btn-sm mt-3" href="/customers/{{$customer->id}}"> <i class="fa fa-eye text-muted"></i></a>
                                            </div> --}}
                                            <div class="col-md-4 col-md-offset-1">
                                                    <a class="btn btn-light btn-sm mt-3" href="/product/{{$product->id}}/edit"><i class="fa fa-edit text-muted"></i></a>
        
                                            </div>
                                            <div class="col-md-4 col-md-offset-1">
                                                    {{ Form::open(['action' => ['ProductController@destroy', $product->id], 'method'=> 'POST' , 'class' => 'delete ml-3']) }}
                                                    {{ Form::hidden('_method', 'DELETE') }}
                                                    {{ Form::button('<i class="fa fa-trash text-danger"></i>', ['type' => 'submit','class'=>'btn btn-light pull-right btn-sm mt-1']) }}
                                                {{ Form::close() }}
                                            </div>
                                        </div>
                                    </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Created By: </strong> {{$customer->user->name}}</li>
                        <li class="list-group-item"><strong>Date created: </strong> {{$customer->created_at}}</li>
                        <li class="list-group-item"><strong>Updated at: </strong> {{$product->updated_at}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('extra-js')
    <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
        </script>
@endsection