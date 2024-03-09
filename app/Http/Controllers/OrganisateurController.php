<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Reservation;
use App\Models\User;

class OrganisateurController extends Controller
{
    public function ticket(ReservationRequest $request)
    {
        $reservations = Reservation::whereHas('event', function ($query) {
            $query->where('acceptation', 'manual');
        })->get();
        // dd($request);
        return view('organisateur.gestion_ticket', compact('reservations'));
    }
}