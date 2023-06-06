<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePokemonRequest;
use App\Http\Requests\UpdatePokemonRequest;
use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemons = Pokemon::all();
        return view('admin.pokemon.index',compact('pokemons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pokemon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePokemonRequest $request)
    {
        $validation = $request->validated();
        Pokemon::create($validation);

        return to_route('pokemon.index')->with('message', 'pokemon added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show(Pokemon $pokemon)
    {
        return view('admin.pokemon.show',compact('pokemon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function edit(Pokemon $pokemon)
    {
        return view('admin.pokemon.edit', compact('pokemon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePokemonRequest $request, Pokemon $pokemon)
    {
        $validation = $request->validated();
        $pokemon->update($validation);

        return to_route('pokemon.index')->with('message', 'pokemon added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();
        return to_route('pokemon.index')->with('message', 'pokemon deleted');
    }
}
