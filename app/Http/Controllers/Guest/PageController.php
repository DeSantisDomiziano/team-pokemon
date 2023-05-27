<?php

namespace App\Http\Controllers\Guest;
use App\Models\Pokemon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $pokemon = Pokemon::all();
        return view("home", compact("pokemon"));
    }

    public function singlePokemon($pokemonId){
        $pokemon = Pokemon::all();
        $singlePokemon = Pokemon::where('id', $pokemonId + 1)->get();
        return view("singlePokemon", compact("pokemon", "singlePokemon"));
    }
}
