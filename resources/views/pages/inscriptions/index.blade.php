@extends('layouts.layout')
@section('content')
                <div class="card">
                    <div class="card-header">
                        <h2>Inscriptions</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('inscriptions.create') }}" class="btn btn-success btn-sm" title="Ajouter Nouveau inscription">
                            <i class="fa fa-plus" aria-hidden="true"></i> Ajouter Nouveau Inscription
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Inscription code</th>
                                        <th>Cour</th>
                                        <th>Etudiant</th>
                                        <th>Date d'inscription</th>
                                        <th>Montant</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($inscriptions as $inscription)
                                    <tr>
                                        <td>{{ $inscription->id }}</td>
                                        <td>{{ $inscription->inscpt_code }}</td>
                                        <td>{{ $inscription->cour->nom }}</td>
                                        <td>{{ $inscription->etudiant->nom}}</td>
                                        <td>{{ $inscription->date_inscrit }}</td>
                                        <td>{{ $inscription->montant() }}</td>
 
                                        <td>
                                            <a href="{{ route('inscriptions.edit', $inscription) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Modifier</button></a>
                                            @if(Auth::user()->role ==='admin')
                                            <a href="{{ route('inscriptions.delete', $inscription) }}" title="Delete Student" onclick="return confirm('Confirmer la suppression!')"><button class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i>Suprimmer</button></a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $inscriptions->links() }}
                        </div>
 
                    </div>
                </div>
@endsection