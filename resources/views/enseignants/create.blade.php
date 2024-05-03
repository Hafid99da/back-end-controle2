@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Enseignant Page</div>
  <div class="card-body">
      
      <form action="{{ route('enseignants.store') }}" method="post">
        @csrf
        <label>Nom</label></br>
        <input type="text" name="nom" id="nom" class="form-control"></br>
        <label>Adresse</label></br>
        <input type="text" name="adresse" id="adresse" class="form-control"></br>
        <label>Telephone</label></br>
        <input type="text" name="telephone" id="telephone" class="form-control"></br>
        <input type="submit" value="Ajouter" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop