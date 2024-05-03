<?php

namespace App\Http\Controllers;

use App\Models\Cour;
use App\Models\Etudiant;
use App\Models\Inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscriptions = Inscription::all();
        return view ('inscriptions.index', compact('inscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cours = Cour::pluck("nom", "id");
        $etudiants = Etudiant::pluck("nom", "id");
        return view('inscriptions.create', compact( 'cours','etudiants'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'inscpt_code' => 'required',
            'cour_id' => 'required',
            'etudiant_id' => 'required',
            'date_inscrit' => 'required',
            'montant' => 'required'
            ]);

        $input = $request->all();
        Inscription::create($input);
        return redirect()->route('inscriptions.index')->withInput(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Inscription $inscription)
    {
        return view('inscriptions.show', compact('inscription'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inscription $inscription)
    {
        return view('inscriptions.edit', compact('inscription'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inscription $inscription)
    {
        $request->validate([
            'inscpt_code' => 'required',
            'cour_id' => 'required',
            'etudiant_id' => 'required',
            'date_inscrit' => 'required',
            'montant' => 'required'
            ]);
        $inscription = Inscription::find($inscription->id);
        $input = $request->all();
        $inscription->update($input);
        return redirect()->route('inscriptions.index')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inscription $inscription)
    {
        Inscription::destroy($inscription->id);
        return redirect()->route('inscriptions.index'); 
    }
}
