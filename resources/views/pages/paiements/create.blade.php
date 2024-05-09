@extends('layouts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Paiement Page</div>
  <div class="card-body">
      
      <form action="{{ route('paiements.store') }}" method="post">
        @csrf
        <label>Inscription code</label></br>
        <select name="inscription_id" id="inscription_id" class="form-control">
          <option value="">Selectioner code d'inscription</option>
          @foreach($inscriptions as $id => $inscpt_code)
            <option value="{{ $id }}">{{ $inscpt_code }} </option>
          @endforeach
        </select>
        @error('inscription_id')
          <div class="text-danger">{{$message}}</div>
        @enderror</br>
        <label>Date de paiement</label></br>
        <input type="date" name="date_paiement" id="date_paiement" class="form-control">
        @error('date_paiement')
          <div class="text-danger">{{$message}}</div>
        @enderror</br>
        <label>Montant</label></br>
        <input type="text" name="montant" id="montant" class="form-control">
        @error('montant')
          <div class="text-danger">{{$message}}</div>
        @enderror</br>
        <input type="submit" value="Ajouter" class="btn btn-success"></br>
    </form>
  </div>
</div>
 
@stop