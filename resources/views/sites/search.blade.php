@extends('layouts.app')

@section('content')
    
    <!-- Breadcrumbs-->
    <ol class="breadcrumb mt-5 mb-5">
        <li class="breadcrumb-item">
            <a class="text-muted" href="/dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            <a class="text-muted">Search</a>
        </li>
        <li class="breadcrumb-item active">
            <a class="text-muted">{{ request()->input('search') }}</a>
        </li>
    </ol>

    <h1 class="text-muted text-center">Search Results</h1>
    <h3>{{count($sites)}} search result(s) for '{{ request()->input('search') }}'</h3>

    @if (count($sites) > 0)
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
              </tr>
            </thead>
            <tbody>
              
              
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
                      <td><a href="/customers/{{$site->id}}"> view</a></td>
                      @if (Auth::user()->role->read_only == 0)
                        {{-- <td>
                            {{ Form::open(['action' => ['CustomersController@destroy', $site->id], 'method'=> 'POST' , 'class' => 'delete ml-3 ']) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::button('<i class="fa fa-trash text-danger"></i>', ['type' => 'submit','class'=>'btn btn-light btn-sm']) }}
                        {{ Form::close() }}
                        </td> --}}
                      @endif    
                      
                    </tr>
                  @endforeach
              
              
            </tbody>
          </table>

          {{ $sites->links() }}
          @else
            <h3 class="text-muted">Search not found.</h3>
            
          @endif
   
    
    

@endsection