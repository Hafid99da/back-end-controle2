@extends('layout')
@section('content')
                <div class="card">
                    <div class="card-header">
                        <h2>Etudiants</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('etudiants.create') }}" class="btn btn-success btn-sm" title="Ajouter Nouveau Etudiant">
                            <i class="fa fa-plus" aria-hidden="true"></i> Ajouter Nouveau Etudiant
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Adresse</th>
                                        <th>Telephone</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($etudiants as $etudiant)
                                    <tr>
                                        <td>{{ $etudiant->id }}</td>
                                        <td>{{ $etudiant->nom }}</td>
                                        <td>{{ $etudiant->adresse }}</td>
                                        <td>{{ $etudiant->telephone }}</td>
 
                                        <td>
                                            <a href="{{ route('etudiants.show', $etudiant) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ route('etudiants.edit', $etudiant) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <a href="{{ route('etudiants.delete', $etudiant) }}" title="Delete Student" onclick="return confirm('Confirmer la suppression!')"><button class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
@endsection