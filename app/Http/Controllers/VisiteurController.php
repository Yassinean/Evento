<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Categorie;
use Illuminate\Http\Request;

class VisiteurController extends Controller
{
    public function index()
    {
        $events = Event::paginate(10);
        $categories = Categorie::get();
        return view('welcome', compact('categories', 'events'));
    }

    public function detailEvent($id)
    {
        $events = Event::find($id);
        // dd($events);
        return view('single_page_event', compact('events'));
    }
}