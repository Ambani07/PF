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
    <h2 class="mb-5">Customers</h2>
    @if($sites)
        
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col"># ID</th>
                <th scope="col">Name</th>
                <th scope="col">Site</th>
                <th scope="col">Term</th>
                <th scope="col">Status</th>
                <th scope="col">Date Created</th>
                <th></th>
                <th></th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($sites as $site)
                    <tr>
                        <th scope="row">{{$customer->id}}</th>
                        <td>{{$sites->customer->name}}</td>
                        <td>{{$customer->lastname}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->company}}</td>
                        <td>{{$customer->created_at}}</td>
                        <td><a href="/customers/{{$customer->id}}"> <i class="fa fa-eye text-muted"></i></a></td>
                        <td><a href="/customers/{{$customer->id}}/edit"><i class="fa fa-edit text-muted"></i></a></td>
                        <td>
                            {{ Form::open(['action' => ['CustomersController@destroy', $customer->id], 'method'=> 'POST' , 'class' => 'p-0 m-0']) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('delete', ['class'=>'btn btn-danger pull-right btn-sm']) }}
                            {{ Form::close() }}

                            

                        </td>
                    </tr>
                @endforeach
                
            </tbody>
            
        </table>
        {{$customers->links()}}
    @else
        <p>No Customers found</p>
    @endif
@endsection