<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use App\Models\Paiement;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paiements = Paiement::paginate();
        return view ('pages.paiements.index', compact('paiements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $inscriptions = Inscription::pluck("inscpt_code", "id");
        return view('pages.paiements.create', compact('inscriptions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->user()->cannot('update', Paiement::class)) {
            abort(403);
        }
        $request->validate([
            'inscription_id' => 'required',
            'date_paiement' => 'required',
            'montant' => 'required'
            ]);

        $input = $request->all();
        Paiement::create($input);
        return redirect()->route('paiements.index')->withInput(); 
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paiement $paiement)
    {
        return view('pages.paiements.edit', compact('paiement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paiement $paiement)
    {
        if ($request->user()->cannot('update', Paiement::class)) {
            abort(403);
        }
        $request->validate([
            'inscription_id' => 'required',
            'date_paiement' => 'required',
            'montant' => 'required'
            ]);

        $paiement = Paiement::find($paiement->id);
        $input = $request->all();
        $paiement->update($input);
        return redirect()->route('paiements.index')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paiement $paiement)
    {
        Paiement::destroy($paiement->id);
        return redirect()->route('paiements.index');
    }
}
