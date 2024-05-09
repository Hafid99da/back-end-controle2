@extends('layouts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ route('etudiants.update', $etudiant) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <input type="hidden" name="id" id="id" value="{{$etudiant->id}}" id="id" />
        <label>Nom</label></br>
        <input type="text" name="nom" id="nom" value="{{$etudiant->nom}}" class="form-control">
        @error('nom')
          <div class="text-danger">{{$message}}</div>
        @enderror</br>
        <label>Adresse</label></br>
        <input type="text" name="adresse" id="adresse" value="{{$etudiant->adresse}}" class="form-control">
        @error('adresse')
          <div class="text-danger">{{$message}}</div>
        @enderror</br>
        <label>Telephone</label></br>
        <input type="text" name="telephone" id="telephone" value="{{$etudiant->telephone}}" class="form-control">
        @error('telephone')
          <div class="text-danger">{{$message}}</div>
        @enderror</br>
        <label>Téléchargez l'image</label></br>
        <input type="file" name="image" id="image" class="form-control" value="{{$etudiant->image}}"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@endsection