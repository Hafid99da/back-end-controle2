@extends('layouts.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header"><h3>Paiement Page</h3></div>
    <div class="card-body">
          <div class="card-body">
          <p class="card-text">Inscription code : {{ $paiement->inscription->inscpt_code }}</p>
          <p class="card-text">Date de paiement : {{ $paiement->date_paiement }}</p>
          <p class="card-text">Montant : {{ $paiement->montant() }}</p>
    </div>
  </div>
</div>
@endsection