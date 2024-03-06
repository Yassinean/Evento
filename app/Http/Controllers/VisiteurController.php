<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class VisiteurController extends Controller
{
    public function index(){
        $categories = Categorie::get();
        return view('welcome',compact('categories'));
    }
}