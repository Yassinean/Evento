<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Categorie;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $events = Event::with('organisateur', 'organisateur.user')->where('id', $id)
            ->first();
        if ($events->status) {
            $result = $events->reservations()->where('user_id', Auth::id())->where('status', 'accepter')->exists();
            // dd($result);
            $reservations = Reservation::all();
            return view('single_page_event', compact('events', 'reservations' , 'result'));
            // return view('single_page_event', compact('events'));
        } else {
            return  abort('404');
        }
        // dd($id);
        // $events = Event::find($id);
        // if ($events->status = 1)
        // else return abort('404');
        // dd($events);
    }

    public function search(Request $request)
    {
        $searchQuery = $request->input('search');
        $eventSearchResults = [];
        if ($searchQuery) {
            $eventSearchResults = Event::where('name', 'like', '%' . $searchQuery . '%')
                ->where('status', 1)->get();
        }
        // dd($eventSearchResults);
        return redirect()->back()->with('eventSearchResults', $eventSearchResults);
    }

    public function filterEvents(Request $request)
    {
    }
}