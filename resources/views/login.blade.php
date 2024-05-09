@extends('layouts.layout')
@section('content')
    @if ($errors->any())
        <div  class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )
                <li>{{ $error }}</li>
                @endforeach
            </ul>
    @endif
    @if (Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
<div class="container border text-center py-3" style="width: 500px;">
    <h1>Connecter</h1>
    <form class="ms-auto me-auto mt-auto" action="{{ route('login.login') }}" method="POST" >
        @csrf   
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control m-auto" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="rememberme">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection
