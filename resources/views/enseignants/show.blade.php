@extends('layouts.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header"><h3>Enseignant Page</h3></div>
    <div class="card-body">
          <div class="card-body">
          <p class="card-text">Nom : {{ $enseignant->nom }}</p>
          <p class="card-text">Adresse : {{ $enseignant->adresse }}</p>
          <p class="card-text">telephone : {{ $enseignant->telephone }}</p>
    </div>
  </div>
</div>
@endsection