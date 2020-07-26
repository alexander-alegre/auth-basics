@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    {{auth()->user()->name}}
                </div>
            </div>




            <div id="update-profile-form" class="mt-4 rounded shadow-lg p-4">
                <form method="POST" action="{{route('update_profile')}}">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input value="{{auth()->user()->name}}" name="name" type="text" class="form-control" id="name" aria-describedby="nameError">
                        @error('name')
                            <small id="nameError" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input value="{{auth()->user()->email}}" name="email" type="email" class="form-control" id="email" aria-describedby="emailError">
                        @error('email')
                            <small id="emailError" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>



            <div id="update-profile-form" class="mt-4 rounded shadow-lg p-4">
                <form method="POST" action="{{route('update_password')}}">
                    @csrf

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password" aria-describedby="passwordError">
                        @error('password')
                        <small id="emailError" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" aria-describedby="passwordConfirmationError">
                        @error('password_confirmation')
                        <small id="emailError" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update Password</button>
                </form>
            </div>







        </div>
    </div>
</div>
@endsection
