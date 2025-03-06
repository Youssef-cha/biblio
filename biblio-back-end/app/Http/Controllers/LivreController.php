<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Livre::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "nom_livre" => ['required',"max:255"],
            "nom_auteur" => ['required',"max:255"],
            "date_pub" => ['required',"date"],
            "categorie_id" => ['required'],
        ]);
        $request->user()->livres()->create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Livre $livre)
    {
        return $livre;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livre $livre)
    {
        Gate::authorize('modify',$livre);
        $data = $request->validate([
            "nom_livre" => ['required',"max:255"],
            "nom_auteur" => ['required',"max:255"],
            "date_pub" => ['required',"date"],
            "categorie_id" => ['required'],
        ]);
        $livre->update($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livre $livre)
    {
        Gate::authorize('modify',$livre);

        $livre->delete();
        return ['message' => 'livre deleted successfully'];
    }
}
