@extends('layout.app')
@section('title')
    Login
    @stop
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 mt-5 shadow">
                @if(Session('err'))
                    <div class="alert alert-danger">{{Session('err')}}</div>
                @endif
                <h1 class="text-center text-primary">Login</h1>
                <form method="post" action="{{route('login')}}">
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" value="{{old('name')}}" id="name" name="name" class="form-control @if($errors->has('name')) is-invalid @endif ">
                        @if($errors->has('name'))<span class="invalid-feedback">{{$errors->first('name')}}</span> @endif
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control @if($errors->has('password')) is-invalid @endif">
                        @if($errors->has('password'))<span class="invalid-feedback">{{$errors->first('password')}}</span> @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                    </div>
                    @csrf
                </form>

            </div>
        </div>
    </div>

    @stop