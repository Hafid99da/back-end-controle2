@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Inscription Page</div>
  <div class="card-body">
      
      <form action="{{ route('inscriptions.store') }}" method="post">
        @csrf
        <label>Inscription code</label></br>
        <input type="text" name="inscpt_code" id="inscpt_code" class="form-control"></br>
        <label>Cour</label></br>
        <select name="cour_id" id="cour_id" class="form-control">
          <option value="">Selectioner un course</option>
          @foreach($cours as $id => $nom)
            <option value="{{ $id }}">{{ $nom }} </option>
          @endforeach
        </select></br>
        <!-- <input type="text" name="cour_id" id="cour_id" class="form-control"></br> -->
        <label>Etudiant</label></br>
        <select name="etudiant_id" id="etudiant_id" class="form-control">
          <option value="">Selectioner un etudiant</option>
          @foreach($etudiants as $id => $nom)
            <option value="{{ $id }}">{{ $nom }} </option>
          @endforeach
        </select></br>
        <!-- <input type="text" name="etudiant_id" id="etudiant_id" class="form-control"></br> -->
        <label>Date</label></br>
        <input type="date" name="date_inscrit" id="date_inscrit" class="form-control"></br>
        <label>Montant</label></br>
        <input type="text" name="montant" id="montant" class="form-control"></br>

        <input type="submit" value="Ajouter" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop