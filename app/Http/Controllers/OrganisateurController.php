<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Categorie;
use App\Models\Reservation;
use App\Models\Organisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ReservationRequest;

class OrganisateurController extends Controller
{
    public function index()
    {
        $organizerQuery = Organisateur::where('user_id', Auth::id())->first();
        $organizerId = $organizerQuery ? $organizerQuery->id : null;
        $eventCount = Event::where('organisateur_id', $organizerId)->with('organisateur')->count();

        $events = Event::where('organisateur_id', $organizerId)->pluck('id');
        $reservationsCount = Reservation::whereIn('event_id', $events)->count();

        $events = Event::where('organisateur_id', $organizerId)->with('organisateur')->get();
        $categories = Categorie::all();
        // $categoriesCount = Event::where('categorie_id', $categories)->with('categories')->count();
        return view('organisateur.dashboard', compact('events', 'categories', 'organizerId', 'eventCount', 'reservationsCount'));
    }

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
            } else {
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