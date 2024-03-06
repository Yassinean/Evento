<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class OrganisateurController extends Controller
{
    public function index(){
        $event = Event::get();
        return view('organisateur.dashboard' , compact('event'));
    }
}