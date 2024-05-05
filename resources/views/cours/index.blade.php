@extends('layouts.layout')
@section('content')
                <div class="card">
                    <div class="card-header">
                        <h2>Cours</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('cours.create') }}" class="btn btn-success btn-sm" title="Ajouter Nouveau Cour">
                            <i class="fa fa-plus" aria-hidden="true"></i> Ajouter Nouveau Cour
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Programme</th>
                                        <th>Duration</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cours as $cour)
                                    <tr>
                                        <td>{{ $cour->id }}</td>
                                        <td>{{ $cour->nom }}</td>
                                        <td>{{ $cour->programme }}</td>
                                        <td>{{ $cour->duration() }}</td>
 
                                        <td>
                                            <a href="{{ route('cours.show', $cour) }}" title="View cour"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voir </button></a>
                                            <a href="{{ route('cours.edit', $cour) }}" title="Edit cour"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Modifier</button></a>
                                            <a href="{{ route('cours.delete', $cour) }}" title="Delete cour" onclick="return confirm('Confirmer la suppression!')"><button class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i>Supprimer</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $cours->links() }}
                        </div>
 
                    </div>
                </div>
@endsection