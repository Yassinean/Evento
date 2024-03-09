<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Event;
use App\Models\Categorie;
use App\Models\Reservation;
use Illuminate\Http\Request;

class VisiteurController extends Controller
{
    public function index(Request $request)
    {
        $categories = Categorie::select('categories.name', 'categories.id', DB::raw('count(events.id) as event_count'))
            ->join('events', 'events.categorie_id', '=', 'categories.id')
            ->where('events.status', '=', 1)
            ->groupBy('categories.id')
            ->get();
        $categoryId = $request->input('id');
        if ($categoryId) {
            $query = Event::query();
            $query->where('categorie_id', $categoryId);
            $events = $query->with('categorie')->paginate(20);
        } else {
            $events = Event::paginate(10);
        }

        return view('welcome', compact('categories', 'events'));
    }

    public function detailEvent($id)
    {
        $events = Event::find($id);
        $reservations = Reservation::all();
        // dd($events);
        return view('single_page_event', compact('events', 'reservations'));
    }

    public function search(Request $request)
    {
        $searchQuery = $request->input('search');
        $eventSearchResults = [];
        if ($searchQuery) {
            $eventSearchResults = Event::where('name', 'like', '%' . $searchQuery . '%')->get();
        }
        // dd($eventSearchResults);
        return redirect()->back()->with('eventSearchResults', $eventSearchResults);
    }

    public function filterEvents(Request $request)
    {
    }
}