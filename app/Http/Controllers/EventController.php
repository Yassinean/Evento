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
        $eventCount = Event::where('organisateur_id', $organizerId)->with('organisateur')->count();
        // $evntcount = Event::withCount('reservation');
        $events = Event::where('organisateur_id', $organizerId)->with('organisateur')->get();
        $categories = Categorie::all();
        // $categoriesCount = Event::where('categorie_id', $categories)->with('categories')->count();
        return view('organisateur.dashboard', compact('events', 'categories', 'organizerId', 'eventCount'));
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

    public function update(Request $request, Event $event)
    {
        $validatedData = $request->validate([
            'nimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nname' => 'required|string|max:255',
            'ndescription' => 'required|string',
            'nlocalisation' => 'required|string',
            'ndate' => 'required|date',
            'ncapacity' => 'required|integer',
            'ncategorie_id' => 'required|integer|exists:categories,id',
            'nacceptation' => 'required', //is not in your form, ensure it's handled appropriately if needed.
        ]);
        if ($request->hasFile('nimage')) {
            $image = $request->file('nimage');
            $imageName = time() . '.' . $image->extension();
            $image->storeAs('public/images', $imageName);

            // Update the event with new image name.
            $event->image = $imageName;
        }

        $event->image = $validatedData['nimagegit'];;
        // dd($event->image);
        $event->name = $validatedData['nname'];
        $event->description = $validatedData['ndescription'];
        $event->localisation = $validatedData['nlocalisation'];
        $event->date = $validatedData['ndate'];
        $event->capacity = $validatedData['ncapacity'];
        $event->categorie_id = $validatedData['ncategorie_id'];

        $event->save();
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