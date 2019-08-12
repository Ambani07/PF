@extends('layouts.app')

@section('content')
    
    <!-- Breadcrumbs-->
    <ol class="breadcrumb mt-5 mb-5">
        <li class="breadcrumb-item">
            <a href="/dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="/customers">Customers</a>
        </li>
        
    </ol>
    <h2 class="mb-5">Recent Customers</h2>
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
                  <td>{{$site->category->name}}</td>
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
                          {{ Form::button('<i class="fa fa-trash text-danger"></i>', ['type' => 'submit','class'=>'btn btn-light btn-sm']) }}
                      {{ Form::close() }}
                      </td>
                </tr>
              @endforeach
          
              
          @endif
        </tbody>
      </table>
@endsection