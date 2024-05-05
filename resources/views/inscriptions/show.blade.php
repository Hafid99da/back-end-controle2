@extends('layouts.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header"><h3>Inscription Page</h3></div>
    <div class="card-body">
          <div class="card-body">
          <p class="card-text">Nom : {{ $inscription->id }}</p>
          <p class="card-text">Inscription code : {{ $inscription->inscpt_code }}</p>
          <p class="card-text">Cour : {{ $inscription->cour->nom}}</p>
          <p class="card-text">Etudiant : {{ $inscription->etudiant->nom }}</p>
          <p class="card-text">Date d'inscription : {{ $inscription->date_inscrit }}</p>
          <p class="card-text">Montant : {{ $inscription->montant() }}</p>
    </div>
  </div>
</div>
@endsection