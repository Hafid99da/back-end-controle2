@extends('layouts.layout')
@section('content')
                <div class="card">
                    <div class="card-header">
                        <h2>Enseignants</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('enseignants.create') }}" class="btn btn-success btn-sm" title="Ajouter Nouveau Enseignant">
                            <i class="fa fa-plus" aria-hidden="true"></i> Ajouter Nouveau Enseignant
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
                                @foreach($enseignants as $enseignant)
                                    <tr>
                                        <td>{{ $enseignant->id }}</td>
                                        <td>{{ $enseignant->nom }}</td>
                                        <td>{{ $enseignant->adresse }}</td>
                                        <td>{{ $enseignant->telephone }}</td>
 
                                        <td>
                                            <a href="{{ route('enseignants.show', $enseignant) }}" title="View enseignant"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voir </button></a>
                                            <a href="{{ route('enseignants.edit', $enseignant) }}" title="Edit enseignant"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Modifier</button></a>
                                            <a href="{{ route('enseignants.delete', $enseignant) }}" title="Delete enseignant" onclick="return confirm('Confirmer la suppression!')"><button class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i>Supprimer</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $enseignants->links() }}
                        </div>
                    </div>
                </div>
@endsection