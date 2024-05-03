@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header"><h3>Cour Page</h3></div>
    <div class="card-body">
          <div class="card-body">
          <p class="card-text">Nom : {{ $cour->nom }}</p>
          <p class="card-text">Programme : {{ $cour->programme }}</p>
          <p class="card-text">Duration : {{ $cour->duration() }}</p>
    </div>
  </div>
</div>
@endsection