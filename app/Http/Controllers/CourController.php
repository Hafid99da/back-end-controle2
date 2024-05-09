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
        return view ('pages.cours.index', compact('cours'));
    }

    /////////////

    public function create()
    {
        return view('pages.cours.create');
    }

    //////////////

    public function store(Request $request)
    {
        if ($request->user()->cannot('update', Cour::class)) {
            abort(403);
        }
        $request->validate([
            'nom' => 'required',
            'programme' => 'required',
            'duration' => 'required'
            ]);
        $input = $request->all();
        Cour::create($input);
        return redirect()->route('cours.index')->withInput(); 
    }

    public function edit(Cour $cour)
    {
        return view('pages.cours.edit', compact('cour'));
    }

    public function update(Request $request, Cour $cour)
    {
        if ($request->user()->cannot('update', Cour::class)) {
            abort(403);
        }
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
