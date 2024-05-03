<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use  App\Models\Etudiant;
use Illuminate\View\View;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $etudiants = Etudiant::all();
        return view ('etudiants.index', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('etudiants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'telephone' => 'required'
            ]);
        $input = $request->all();
        Etudiant::create($input);
        return redirect()->route('etudiants.index')->withInput(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        return view('etudiants.show', compact('etudiant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        return view('etudiants.edit', compact('etudiant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'telephone' => 'required'
            ]);
        $etudiant = Etudiant::find($etudiant->id);
        $input = $request->all();
        $etudiant->update($input);
        return redirect()->route('etudiants.index')->withInput();  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        Etudiant::destroy($etudiant->id);
        return redirect()->route('etudiants.index');  
    }
}
