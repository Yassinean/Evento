<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Categorie;
use App\Models\Organisateur;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {

        $organizerQuery = Organisateur::where('user_id', Auth::id())->first();
        $organizerId = $organizerQuery ? $organizerQuery->id : null;
        $evntcount = Event::withCount('reservation');
        $events = Event::where('organisateur_id', $organizerId)->with('organisateur')->get();
        $categories = Categorie::all();
        return view('organisateur.dashboard', compact('events', 'categories', 'organizerId', 'evntcount'));
    }

    public function store(EventRequest $request)
    {

        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
        } else {
            $imageName = null;
        }

        Event::create(array_merge($validatedData, ['image' => $imageName]));
        return redirect()->back();
    }

    public function update(EventRequest $request, Event $id)
    {
        dd($request);
        $validatedData = $request->validated();
        $image = $request->file('nimage');
        $imageName = time() . '.' . $image->extension();
        $image->storeAs('public/images', $imageName);
        $id->update([
            'image' => $imageName,
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'localisation' => $validatedData['localisation'],
            'date' => $validatedData['date'],
            'capacity' => $validatedData['capacity'],
            'categorie_id' => $validatedData['categorie_id'],
        ]);
        // dd($event);
        return redirect()->back();
    }

    public function updateStatus(Request $request, Event $event)
    {
        $event->update(['status' => !$event->status]);
        return redirect()->back()->with('success', 'Event status updated successfully');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->back();
    }
}