<?php

namespace App\Http\Controllers\Guest;
use App\Models\Pokemon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $pokemon = Pokemon::all();
        $selectedPokemon = Pokemon::where('id', 1)->get();
        return view("home", compact("pokemon", "selectedPokemon"));
    }

    public function selectedPokemon($pokemonId){
        $pokemon = Pokemon::all();
        $selectedPokemon = Pokemon::where('id', $pokemonId + 1)->get();
        return view("home", compact("pokemon", "selectedPokemon"));
    }
}
