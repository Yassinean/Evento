<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;
use App\Models\Categorie;
use App\Models\Reservation;
use App\Models\Organisateur;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
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
        return redirect()->back()->with('success', 'Vous avez ajouter la categorie ' . $validatedData['name'] . ' avec succès');;
    }

    public function update(Request $request, Event $event)
    {
        $validatedData = $request->validate([
            // 'nimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nname' => 'required|string|max:255',
            'ndescription' => 'required|string',
            'nlocalisation' => 'required|string',
            'ndate' => ['required', 'date', 'after_or_equal:today'],
            'ncapacity' => 'required|integer',
            'ncategorie_id' => 'required|integer|exists:categories,id',
            'nacceptation' => 'required', //is not in your form, ensure it's handled appropriately if needed.
        ]);
        if ($request->hasFile('nimage')) {
            $image = $request->file('nimage');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);

            // Update the event with new image name.
            $event->image = $imageName;
        }

        // dd($event->image);
        $event->name = $validatedData['nname'];
        $event->description = $validatedData['ndescription'];
        $event->localisation = $validatedData['nlocalisation'];
        $event->date = $validatedData['ndate'];
        $event->capacity = $validatedData['ncapacity'];
        $event->categorie_id = $validatedData['ncategorie_id'];

        $event->save();
        return redirect()->back()->with('success', 'Event modifié avec succès');
    }

    public function updateStatus(Request $request, Event $event)
    {
        $event->update(['status' => !$event->status]);
        return redirect()->back()->with('success', 'Event status modifié avec succès');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->back()->with('success', 'Vous avez supprimer l\'événement avec succès');
    }
}