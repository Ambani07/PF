@extends('layouts.app')

@section('content')
    <h1>Customers</h1>
    @if(count($customers) > 0)
        
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col"># ID</th>
                <th scope="col">Fristname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Email</th>
                <th scope="col">Company</th>
                <th scope="col">Date Created</th>
                <th></th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <th scope="row">{{$customer->id}}</th>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->surname}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->company}}</td>
                        <td>{{$customer->created_at}}</td>
                        <td><a href="/customers/{{$customer->id}}"> <i class="fa fa-eye text-muted"></i></a></td>
                        <td><a href="/customer"></a> <i class="fa fa-edit"></i> </td>
                    </tr>
                @endforeach
                
            </tbody>
            
        </table>
        {{$customers->links()}}
    @else
        <p>No Customers found</p>
    @endif
@endsection