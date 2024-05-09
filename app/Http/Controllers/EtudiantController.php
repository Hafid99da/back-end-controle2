<?php

namespace App\Http\Controllers;

use auth;
use  App\Models\Etudiant;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $etudiants = Etudiant::paginate(10);
        return view ('pages.etudiants.index', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('pages.etudiants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg'
            ]);
        
        if($request->has('image')){
            $file = $request->file('image');
            $extension = $file -> getClientOriginalExtension();
            $filename= time() . "." .$extension;
            $path = "images/etudiants/";
            $file->move($path, $filename);
        }

        Etudiant::create([
            'nom' => $request->nom,
            'adresse' => $request->adresse ,
            'telephone' => $request->telephone,
            'image' => $path.$filename
        ]);
        return redirect()->route('etudiants.index')->withInput(); 
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        return view('pages.etudiants.edit', compact('etudiant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        if ($request->user()->cannot('update', Etudiant::class)) {
            abort(403);
        }
        $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg'
            ]);

        $etudiant = Etudiant::find($etudiant->id);

        
        if($request->has('image')){
            $file = $request->file('image');
            $extension = $file -> getClientOriginalExtension();
            $filename= time() . "." .$extension;

            $path = "images/etudiants/";
            $file->move($path, $filename);

            if(File::exists($etudiant->image)){
                File::delete($etudiant->image);
            }
            $etudiant->update([
                'nom' => $request->nom,
                'adresse' => $request->adresse ,
                'telephone' => $request->telephone,
                'image' => $path.$filename
            ]);
        }
        $etudiant->update([
            'nom' => $request->nom,
            'adresse' => $request->adresse ,
            'telephone' => $request->telephone
        ]);
        return redirect()->route('etudiants.index')->withInput();  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        Etudiant::destroy($etudiant->id);
        if(File::exists($etudiant->image)){
            File::delete($etudiant->image);
        }
        return redirect()->route('etudiants.index');  
    }
}
