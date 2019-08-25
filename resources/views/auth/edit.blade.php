@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-5">
            <div class="row bg-light text-dark department text-center py-3">
                    <div class="container">
                <h1>Edit Account </h1>

              </div>
                </div>
    </div>
<div class="container">
    <div class="row justify-content-center">

        
        
        <div class="col-md-8">
            <div class="card register" style="margin-top: 5vh !important;">

                <div class="card-body">
                    {{-- <form method="POST" action="{{ route('register') }}"> --}}
                        {{ Form::open(['action' => ['auth\UserController@update', $user->id], 'method'=> 'POST']) }}
                        {{-- @csrf --}}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ $user->surname }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role_id" class="col-md-4 col-form-label text-md-right">Role</label>

                            <div class="col-md-6">
                                
                                <select name="role_id"  class="form-control">
                                        <option value="{{$user->role->id}}">{{$user->role->name}}</option>
                                    @foreach ($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>

                                @error('role_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tel_no" class="col-md-4 col-form-label text-md-right">{{ __('Tel Number') }}</label>

                            <div class="col-md-6">
                                <input id="tel_no" type="text" class="form-control @error('tel_no') is-invalid @enderror" name="tel_no" value="{{ $user->tel_no }}" required autocomplete="tel_no" autofocus>

                                @error('tel_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cell_no" class="col-md-4 col-form-label text-md-right">{{ __('Cell Number') }}</label>

                            <div class="col-md-6">
                                <input id="cell_no" type="text" class="form-control @error('cell_no') is-invalid @enderror" name="cell_no" value="{{ $user->cell_no }}" required autocomplete="cell_no" autofocus>

                                @error('cell_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            {{ Form::hidden('_method', 'PUT') }}
                            {{ Form::submit('Update', ['class'=>'btn btn-primary ']) }}
                        </div>
                    </div>
                    
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
