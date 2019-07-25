@extends('layouts.app')

@section('content')
    <a href="/customers" class="btn btn-danger"> <i class="fa fa-chevron-left"></i> Back</a>
    @if($customer)
      <h4>{{$customer->name}}</h4>
    @endif
@endsection