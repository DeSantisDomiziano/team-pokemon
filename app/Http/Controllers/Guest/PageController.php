<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Pokemon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::all();
        $selectedPokemon = $pokemons[0];
        return view('home',compact('pokemons','selectedPokemon'));
    }
    public function show(Pokemon $pokemon)
    {
        $pokemons = Pokemon::all();
        $selectedPokemon = $pokemon;
        //dd($pokemon);
        return view('show',compact('pokemons','selectedPokemon'));

    }
}
