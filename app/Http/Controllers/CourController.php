<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Cour;
use Illuminate\View\View;

class CourController extends Controller
{
    public function index()
    {
        $cours = Cour::paginate(10);
        return view ('cours.index', compact('cours'));
    }

    /////////////

    public function create()
    {
        return view('cours.create');
    }

    //////////////

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'programme' => 'required',
            'duration' => 'required'
            ]);
        $input = $request->all();
        Cour::create($input);
        return redirect()->route('cours.index')->withInput(); 
    }

    public function show(Cour $cour)
    {
        return view('cours.show', compact('cour'));
    }

    public function edit(Cour $cour)
    {
        return view('cours.edit', compact('cour'));
    }

    public function update(Request $request, Cour $cour)
    {
        $request->validate([
            'nom' => 'required',
            'programme' => 'required',
            'duration' => 'required'
            ]);
        $cour = Cour::find($cour->id);
        $input = $request->all();
        $cour->update($input);
        return redirect()->route('cours.index')->withInput(); 
    }

    public function destroy(Cour $cour)
    {
        Cour::destroy($cour->id);
        return redirect()->route('cours.index'); 
    }
}
