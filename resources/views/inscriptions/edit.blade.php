@extends('layouts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ route('inscriptions.update', $inscription) }}" method="post">
        @csrf
        @method("PUT")
        <input type="hidden" name="id" id="id" value="{{$inscription->id}}" id="id" />
        <label>Inscription code</label></br>
        <input type="text" name="inscpt_code" id="inscpt_code" value="{{$inscription->inscpt_code}}" class="form-control"></br>
        <label>Cour</label></br>
        <input type="text" name="cour_id" id="cour_id" value="{{$inscription->cour_id}}" class="form-control"></br>
        <label>Etudiant</label></br>
        <input type="text" name="etudiant_id" id="etudiant_id" value="{{$inscription->etudiant_id}}" class="form-control"></br>
        <label>Date</label></br>
        <input type="text" name="date_inscrit" id="date_inscrit" value="{{$inscription->date_inscrit}}" class="form-control"></br>
        <label>Montant</label></br>
        <input type="text" name="montant" id="montant" value="{{$inscription->montant}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  </div>
</div>
 
@endsection