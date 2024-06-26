<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Enseignant;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $enseignants = Enseignant::paginate();
        return view ('pages.enseignants.index', compact('enseignants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('pages.enseignants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        if ($request->user()->cannot('update', Enseignant::class)) {
            abort(403);
        }
        $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'telephone' => 'required'
            ]);
        $input = $request->all();
        Enseignant::create($input);
        return redirect()->route('enseignants.index')->withInput(); 
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enseignant $enseignant)
    {
        return view('pages.enseignants.edit', compact('enseignant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enseignant $enseignant)
    {
        if ($request->user()->cannot('update', Enseignant::class)) {
            abort(403);
        }
        $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'telephone' => 'required'
            ]);
        $enseignant = Enseignant::find($enseignant->id);
        $input = $request->all();
        $enseignant->update($input);
        return redirect()->route('enseignants.index')->withInput();  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enseignant $enseignant)
    {
        Enseignant::destroy($enseignant->id);
        return redirect()->route('enseignants.index');
    }
}
