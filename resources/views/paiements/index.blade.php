@extends('layouts.layout')
@section('content')
                <div class="card">
                    <div class="card-header">
                        <h2>Paiement</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('paiements.create') }}" class="btn btn-success btn-sm" title="Ajouter Nouveau paiement">
                            <i class="fa fa-plus" aria-hidden="true"></i> Ajouter Nouveau Paiement
                        </a>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Inscription code</th>
                                        <th>Date de paiement</th>
                                        <th>Montant</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($paiements as $paiement)
                                    <tr>
                                        <td>{{ $paiement->id }}</td>
                                        <td>{{ $paiement->inscription->inscpt_code }}</td>
                                        <td>{{ $paiement->date_paiement }}</td>
                                        <td>{{ $paiement->montant() }}</td>
 
                                        <td>
                                            <a href="{{ route('paiements.show', $paiement) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"> </i>Voir </button></a>
                                            <a href="{{ route('paiements.edit', $paiement) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Modifier</button></a>
                                            <a href="{{ route('paiements.delete', $paiement) }}" title="Delete Student" onclick="return confirm('Confirmer la suppression!')"><button class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i>Supprimer</button></a>
                                            <a href="{{ route('paiements.rapport', $paiement) }}" title="Paiement Rapport"><button class="btn btn-success btn-sm"><i class="fa fa-print" aria-hidden="true"></i>Imprimer</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $paiements->links() }}
                        </div>
 
                    </div>
                </div>
@endsection