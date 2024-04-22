<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AppartementController extends Controller
{
    public function index()
    {
        $appartements = Appartement::all();

        if (Auth::check() && Auth::user()->is_proprietaire) {
            $appartements = Appartement::where('Proprietaire', Auth::id())->get();
        }
        
        return view('appartements.index', compact('appartements'));
    }

    public function show(Appartement $appartement)
    {

        return view('appartements.show', compact('appartement'));
    }
}
