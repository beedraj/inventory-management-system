
@extends('layouts.app')
@section('content')
   <div class="container">
    <div class="row">
        <div class="col-md-6" style="margin-top:20px;">
        <h4>Registration</h4>
        <hr>
        <form action="{{route('register-user')}}" method="Post">
            
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf

            <div class="form-group">
                <label for="name"> Name </label>
                    <input type="text" class="form-control" placeholder="enter fullname" name="name" value="{{old('name')}}">
                    <span class="text-danger">@error('name') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="enter email" name="email" value="{{old('email')}}">
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                    <input type="password" class="form-control" placeholder="enter password" name="password" value="{{old('password')}}">
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="Confirm_password">Confirm_password </label>
                    <input type="password" class="form-control" placeholder="enter confirm_password" name="confirm_password" value="">
               
            </div>
            <div class="form-group">
                <button style="margin-top:20px" class="btn btn-block btn-primary" type="submit">Register</button>
            </div>
            <a href="{{route('login')}}">Already register !! login here</a>


    
 @endsection