<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\Creneau;
use App\Models\Reservation;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class ReservationController extends Controller
{



    public function index()
    {
        $reservations = Reservation::with('utilisateurs', 'creneaux.cours')->paginate(10);
        return view('reservations.index', compact('reservations'));
    }




    public function edit($id)
    {
        $reservation = Reservation::with('creneaux.cours', 'utilisateurs')->findOrFail($id);
        // Si tu veux obtenir tous les utilisateurs et créneaux disponibles
        $utilisateurs = Utilisateur::all();
        $creneaux = Creneau::all(); // Si tu veux tous les créneaux

        return view('reservations.edit', compact('reservation', 'utilisateurs', 'creneaux'));
    }






    public function update(Request $request, $id)
    {
        $request->validate([
            'utilisateur_id' => 'required|exists:utilisateurs,id',
            'creneau_id' => 'required|exists:creneaux,id',
            'date_reservation' => 'required|date',
        ]);

        $reservation = Reservation::findOrFail($id);
        $reservation->utilisateur_id = $request->utilisateur_id;
        $reservation->creneau_id = $request->creneau_id;
        $reservation->date_reservation = $request->date_reservation;
        $reservation->save();

        return redirect()->route('reservations.index')->with('success', 'Réservation mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);

        $reservation->delete();

        return redirect()->route('reservations.index')->with('success', 'Réservation supprimée avec succès.');
    }







    public function create()
    {
        // Récupère tous les cours disponibles
        $cours = Cours::all();
        return view('reservations.create', compact('cours'));
    }

    public function store(Request $request)
    {
        // Validation des données de réservation
        $request->validate([
            'cours_id' => 'required|exists:cours,id',
            'date_reservation' => 'required|date'
        ]);

        // Crée la réservation
        Reservation::create([
            'cours_id' => $request->input('cours_id'),
            'date_reservation' => $request->input('date_reservation'),
        ]);

        return redirect()->route('reservations.index')->with('success', 'Réservation effectuée avec succès!');
    }
}
