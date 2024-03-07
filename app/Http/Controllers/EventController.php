<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use App\Models\Categorie;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $categories = Categorie::all();
        return view('organisateur.dashboard', compact('events', 'categories'));
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

    public function update(EventRequest $request, $event)
    {
        $validatedData = $request->validated();
        dd($request->file('nimage'));
        if ($request->hasFile('nimage')) {
            $image = $request->file('nimage');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('public/images'), $imageName);
        } else {
            $imageName = null;
        }
        $event->update([
            'image' => $validatedData['nimage'],
            'name' => $validatedData['nname'],
            'description' => $validatedData['ndescription'],
            'localisation' => $validatedData['nlocalisation'],
            'date' => $validatedData['ndate'],
            'capacity' => $validatedData['ncapacity'],
            'categorie_id' => $validatedData['ncategorie_id'],
        ]);
        // dd($event);
        return redirect()->back();
    }

    public function updateStatus(Request $request, Event $event)
    {
        // Check if user has permission to update event status (you can customize this logic based on your requirements)

        $event->update(['status' => !$event->status]); // Toggle the status (assuming it's a boolean field)
        // dd($event);
        return redirect()->back()->with('success', 'Event status updated successfully');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->back();
    }
}