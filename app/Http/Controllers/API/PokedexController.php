<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    public function index() {
        $pokemons = Pokemon::all();
        return response()->json([
            'success' => true,
            'pokemons' => $pokemons

        ]);
    }

    public function show($id) {
        $pokemon = Pokemon::find($id);
        return response()->json([
            'success' => true,
            'pokemon' => $pokemon
        ]);
    }
}
