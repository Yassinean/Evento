<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class OrganisateurController extends Controller
{
    public function users(){
        $users = User::get();
        return view('organisateur.users' , compact('users'));
    }
}