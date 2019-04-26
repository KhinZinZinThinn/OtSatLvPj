@extends('layout.app')
@section('title') Register
    @endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 mt-5 shadow">
                @if(Session('info'))
                   <div class="alert alert-success">{{Session('info')}}</div>
                @endif
            <h1 class="text-center text-primary">Sign Up</h1>
                <form method="post" action="{{route('register')}}">
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" value="{{old('name')}}" id="name" name="name" class="form-control @if($errors->has('name')) is-invalid @endif ">
                    @if($errors->has('name'))<span class="invalid-feedback">{{$errors->first('name')}}</span> @endif
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" value="{{old('email')}}" id="email" name="email" class="form-control @if($errors->has('email')) is-invalid @endif">
                    @if($errors->has('email'))<span class="invalid-feedback">{{$errors->first('email')}}</span> @endif
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control @if($errors->has('password')) is-invalid @endif">
                    @if($errors->has('password'))<span class="invalid-feedback">{{$errors->first('password')}}</span> @endif
                </div>
                <div class="form-group">
                    <label for="password_confirm">Password Confirmation</label>
                    <input type="password" id="password_confirm" name="password_confirm" class="form-control @if($errors->has('password_confirm')) is-invalid @endif">
                    @if($errors->has('password_confirm'))<span class="invalid-feedback">{{$errors->first('password_confirm')}}</span> @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
                </div>
                    @csrf
                </form>

            </div>
        </div>
    </div>




    @stop