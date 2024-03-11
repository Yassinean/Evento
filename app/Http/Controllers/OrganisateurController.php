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
        $user_id = Auth::id();
        $organisateur = Organisateur::where('user_id', $user_id)->first();
        $events = $organisateur->event()->get();
        return view('organisateur.gestion_ticket', compact('events'));
    }

    public function acceptReservation($eventReservation)
    {
        $reservation = Reservation::find($eventReservation);
        // dd($reservation);
        if ($reservation) {
            $event = $reservation->event;
            if ($event->capacity > 0) {
                $reservation->update([
                    'status' => 'accepter',
                ]);
                $event->capacity--;
                $event->save();
                return redirect()->back()->with('success', 'Vous avez accepter la reservation avec succès ');
            }else{
                return redirect()->back()->with('success', 'Tous les places sont reservées ');
            }
        }
    }
    public function deleteReservation($eventReservation)
    {
        $reservation = Reservation::findOrFail($eventReservation);
        $reservation->delete();
        return redirect()->back()->with('success', 'Vous avez refuser la reservation');
    }
}