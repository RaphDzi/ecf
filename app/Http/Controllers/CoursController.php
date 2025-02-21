<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cours;

class CoursController extends Controller
{



    public function index() {
        $cours = Cours::latest()->paginate(7); // Récupère les cours avec pagination
        return view('cours.index', ['cours' => $cours]);
    }



    public function create() {
        return view('cours.create'); // Formulaire de création
    }



    public function show(Cours $cours) {
        return view('cours.show', ['cours' => $cours]);
    }



    public function store(Request $request) {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
        ]);

        Cours::create([
            'nom' => $request->input('nom'),
            'description' => $request->input('description'),
        ]);

        return redirect('/cours')->with('success', 'Cours créé avec succès !');
    }



    public function edit(Cours $cour) {
        return view('cours.edit', ['cours' => $cour]);
    }



    public function update(Cours $cour) {
        request()->validate([
            'nom' => 'required',
            'description' => 'required',
        ]);

        $cour->update([
            'nom' => request('nom'),
            'description' => request('description'),
        ]);

        return redirect('cours' );
    }


    public function destroy(Cours $cours)
    {

        $cours->delete();

        return redirect()->route('cours.index')->with('success', 'Cours supprimé avec succès!');
    }
}
