<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Paiement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class RapportController extends Controller
{
    public function imprimer(Paiement $paiement)
    {
        $paiement = Paiement::find($paiement->id);
        $pdf = App::make('dompdf.wrapper');
        $print = "<div style='margin: 20px; padding: 20px;'>";

        $print.= "<h1 align='center'> HIBRA centre : Centre d'apprentissage des langages de programmation </h1>";
        $print.= "<h3 align='center'> Paiement reçu </h3>";
        $print.= "<hr/>";

        $print.= "<p>Numero de reçu : <b>".$paiement->id."</b></p>";
        $print.= "<p>Date : <b>".$paiement->date_paiement."</b></p>";
        $print.= "<p>Numero d'inscription : <b>".$paiement->inscription->inscpt_code."</b></p>";
        $print.= "<p>Nom d'etudiant : <b>".$paiement->inscription->etudiant->nom."</b></p>";
        
        $print.= "<hr/>";

        $print.= "<p> Description : <b>".$paiement->inscription->cour->nom." ".$paiement->inscription->cour->programme."</b></p>";
        $print.= "<p> Montant : <b>".$paiement->montant."</b></p>";

        $print.= "<hr/>";

        $print.= "<span> Date d'impression: <b>".date('d-m-y')."</b></span>";

        $print.= "</div>";
        $pdf->loadHTML($print);
        return $pdf->stream();
    }
}
