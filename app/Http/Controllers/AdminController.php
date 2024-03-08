<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Event;
use App\Models\Visiteur;
use App\Models\Categorie;
use App\Models\Organisateur;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visiteurCount = Visiteur::count();
        $organisateurCount = Organisateur::count();
        $categoriecount = Categorie::count();
        $categories = Categorie::paginate(5);
        $eventCount = Event::count();
        $events = Event::paginate(10);
        return view('admin.dashboard', compact('categories', 'visiteurCount', 'categoriecount', 'events', 'organisateurCount', 'eventCount'));
    }

    public function users()
    {

        $users = User::get();

        return view('admin.users', compact('users'));
    }

    public function updateStatus(Request $request, User $usr)
    {
        $usr->update(['status' => !$usr->status]);
        // dd($usr);
        return redirect()->back()->with('success', 'Event status updated successfully');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
    }
}