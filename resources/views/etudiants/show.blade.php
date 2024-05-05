@extends('layouts.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header"><h3>Etudiant Page</h3></div>
    <div class="card-body">
          <div class="card-body">
          <p class="card-text">Nom : {{ $etudiant->nom }}</p>
          <p class="card-text">Adresse : {{ $etudiant->adresse }}</p>
          <p class="card-text">telephone : {{ $etudiant->telephone }}</p>
    </div>
  </div>
</div>
@endsection