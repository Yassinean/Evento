<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Organisateur;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OrganisateurController extends Controller
{
    public function acceptation(Request $request)
    {
        $organisateur = Auth::user()->id;
        $idOrganisateur = Organisateur::where('user_id', $organisateur)->first();
        $reservations = Reservation::with('visiteurs.users', 'event.organisateur')
            ->where('status', 'en cour')->get();
        // dd($reservations);
        return view('organisateur.gestion_ticket', compact('reservations'));
    }

    public function acceptReservation(Request $request, $eventReservation)
    {
        $reservation = Reservation::findOrFail($eventReservation);
        $reservation->update([
            'status' => $request->status,
        ]);
        return redirect()->back();
    }
    public function deleteReservation($eventReservation)
    {
        $reservation = Reservation::findOrFail($eventReservation);
        $reservation->delete();
        return redirect()->back();
    }
}