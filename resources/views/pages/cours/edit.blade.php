@extends('layouts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ route('cours.update', $cour) }}" method="post">
        @csrf
        @method("PUT")
        <input type="hidden" name="id" id="id" value="{{$cour->id}}" id="id" />
        <label>Nom</label></br>
        <input type="text" name="nom" id="nom" value="{{$cour->nom}}" class="form-control">
        @error('nom')
          <div class="text-danger">{{$message}}</div>
        @enderror</br>
        <label>Programme</label></br>
        <input type="text" name="programme" id="programme" value="{{$cour->programme}}" class="form-control">
        @error('programme')
          <div class="text-danger">{{$message}}</div>
        @enderror</br>
        <label>Duration</label></br>
        <input type="text" name="duration" id="duration" value="{{$cour->duration}}" class="form-control">
        @error('duration')
          <div class="text-danger">{{$message}}</div>
        @enderror</br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@endsection