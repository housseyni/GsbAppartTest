<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use Illuminate\Http\Request;


class AppartementController extends Controller
{
    public function index()
    {
        $appartements = Appartement::all();
        return view('appartements.index', compact('appartements'));
    }

    public function show(Appartement $appartement)
    {

        return view('appartements.show', compact('appartement'));
    }
}
