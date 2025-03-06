<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function store(Request $request, Livre $livre)
    {
        if(Auth::user()->reservations->count() > 0){
            return redirect()->route('livres.show' , $livre->id)->with('error', 'you have alredy a reservation');
        }
        request()->validate([
            'date_debut' => 'required',
            'date_fin' => 'required',
        ]);
        Reservation::create([
            'date_debut' => request('date_debut'),
            'date_fin' => request('date_fin'),
            'état' => 'en attente',
            'livre_id' => $livre->id,
            'user_id' => Auth::id(),
        ]);
        return redirect('livres/' . $livre->id)->with('success', 'reservation added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
