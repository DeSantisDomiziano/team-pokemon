<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePokemonRequest;
use App\Http\Requests\UpdatePokemonRequest;
use App\Models\Generation;
use App\Models\Pokemon;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemons = Pokemon::orderByDesc('id')->get();
        return view('admin.pokemon.index',compact('pokemons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::orderBy("name")->get();
        $generations = Generation::orderBy("name")->get();
        return view('admin.pokemon.create', compact("types", "generations"));
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
        $imagePath = Storage::put("uploads", $validation["image"]);
        $validation["image"] = $imagePath;
        $newPokemon = Pokemon::create($validation);
        $types = $request->types;
        $newPokemon->types()->attach($types);
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
        $types = $pokemon->types;
        return view('admin.pokemon.show',compact('pokemon', 'types'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function edit(Pokemon $pokemon)
    {
        $types = Type::orderBy("name")->get();
        $generations = Generation::orderBy("name")->get();
        return view('admin.pokemon.edit', compact('pokemon', 'types', 'generations'));
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
        $pokemon->types()->sync($request->types);
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
