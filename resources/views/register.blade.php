@extends('layouts.layout')
@section('content')
<div class="container border text-center py-3" style="width: 500px;">
  <h1>Register</h1>
  <form class="ms-auto me-auto mt-auto" action="{{route('register.store')}}" method="POST">
      @csrf
      <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" value="{{old('name')}}">                
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" value="{{old('email')}}">              
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
      </div>
      <div class="mb-3">
          <label for="password_confirmation" class="form-label">Confirm password</label>
          <input type="password" class="form-control" name="password_confirmation">
        </div>    
      <button type="submit" class="btn btn-primary">Register</button>
  </form>
</div>
@endsection