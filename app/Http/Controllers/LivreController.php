<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{

    public function index()
    {
        $livres = Livre::all();
        return view('livres.index', compact('livres'));
    }
    public function create()
    {
        return view('livres.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nomlivre' => 'required',
            'nomauteur' => 'required',
            'description' => 'nullable',
            'date_pub' => 'required|date',
        ]);
        Livre::create($request->all());
        return redirect()->route('livres.index')->with('success', 'Livre crééavec succès.');
    }
    public function show(Livre $livre)
    {
        return view('livres.show', compact('livre'));
    }
    public function edit(Livre $livre)
    {
        return view('livres.edit', compact('livre'));
    }
    public function update(Request $request, Livre $livre)
    {
        $request->validate([
            'titre' => 'required',
            'auteur' => 'required',
            'description' => 'nullable',
            'date_publication' => 'required|date',
        ]);
        $livre->update($request->all());
        return redirect()->route('livres.index')->with('success', 'Livre mis àjour avec succès.');
    }
    public function destroy(Livre $livre)
    {
        $livre->delete();
        return redirect()->route('livres.index')->with('success', 'Livresupprimé avec succès.');
    }
}
