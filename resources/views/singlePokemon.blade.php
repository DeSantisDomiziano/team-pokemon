@extends('layouts.app')

@section('content')
<div class="nav_pokedex">
    <h1 class="text-white text-center m-0">POKEDEX NAZIONALE</h1>
</div>
<div class="mainpokedex">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="titlepokemon m-1">
                    <h2 class="text-center m-0 p-1">{{$singlePokemon[0]->name}}</h2>
                </div>
                <div class="img_pokemon">
                    <img src="{{ Vite::asset('resources/pokemon/' . $singlePokemon[0]->id . '.png') }}" alt="">
                </div>
                <div class="check_pokemon">
                    <p class="text-center m-1 p-1">POSSEDUTI:</p>
                    <p class="text-center m-0 p-3">CATTURATI:</p>
                </div>
            </div>
            @include("partials.rightSection")
        </div>
    </div>
</div>
@endsection
