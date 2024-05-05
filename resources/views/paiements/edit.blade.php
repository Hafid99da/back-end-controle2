@extends('layouts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ route('paiements.update', $paiement) }}" method="post">
        @csrf
        @method("PUT")
        <input type="hidden" name="id" id="id" value="{{$paiement->id}}" id="id" />
        <label>Inscription code</label></br>
        <select name="inscription_id" id="inscription_id" class="form-control">
          <option value="{{$paiement->inscription_id}}">{{$paiement->inscription_id}}</option>
        </select></br>
        <label>Date de paiement</label></br>
        <input type="text" name="date_paiement" id="date_paiement" value="{{$paiement->date_paiement}}" class="form-control"></br>
        <label>Montant</label></br>
        <input type="text" name="montant" id="montant" value="{{$paiement->montant}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  </div>
</div>
 
@endsection