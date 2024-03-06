<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Admin;
use App\Models\Visiteur;
use App\Models\Organisateur;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
        
          if ($request->role === 'visiteur') {
            Visiteur::create(['user_id' => $user->id]);
        } elseif ($request->role === 'organisateur') {
            organisateur::create(['user_id' => $user->id]);
        } elseif ($request->role === 'admin') {
            Admin::create(['user_id' => $user->id]);
        }

         Auth::login($user);
        if ($user->role === 'visiteur') {
            return redirect('home');
        } elseif ($user->role === 'organisateur') {
            return redirect('oraganisateur.dashboard');
        } elseif ($user->role === 'admin') {
            return redirect('/dashboard');
        }


        return redirect(RouteServiceProvider::HOME);
    }
}