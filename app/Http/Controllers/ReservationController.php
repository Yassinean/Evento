<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Visiteur;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ReservationRequest;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($eventId)
    {
        $event = Event::findOrFail($eventId);
        $reservations = $event->reservation()->with('visiteurs')->get();
        // dd($reservations);
        return view('ticket', compact('event', 'reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(ReservationRequest $request, $eventId)
    {
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationRequest $request)
    {
        $validatedData = $request->validated();
        $visiteur = Visiteur::where('id', Auth::id())->first();

        $reservation = Reservation::create([
            'user_id' => $validatedData['client_id'],
            'event_id' => $validatedData['event_id'],
            'status' => $validatedData['status'],
        ]);
        dd($reservation);
        // dd($reservation);

        return redirect()->back();
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