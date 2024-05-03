@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Cours Page</div>
  <div class="card-body">
      
      <form action="{{ route('cours.store') }}" method="post">
        @csrf
        <label>Nom</label></br>
        <input type="text" name="nom" id="nom" class="form-control"></br>
        <label>Programme</label></br>
        <input type="text" name="programme" id="programme" class="form-control"></br>
        <label>Duration</label></br>
        <input type="text" name="duration" id="duration" class="form-control"></br>
        <input type="submit" value="Ajouter" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop