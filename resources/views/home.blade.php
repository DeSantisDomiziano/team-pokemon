@extends('layouts.app')
@section('content')
<div class="nav_pokedex">
    <h1 class="text-white text-center m-0">POKEDEX NAZIONALE</h1>
</div>
<div class="mainpokedex">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="titlepokemon mx-1">
                    <h2 class="text-center m-0 p-1">{{$pokemon[0]->name}}</h2>
                </div>
                <div class="img_pokemon">
                    <img src="{{ Vite::asset('resources/pokemon/' . $pokemon[0]->id . '.png') }}" alt="">
                </div>
                <div class="check_pokemon">
                    <p class="text-center m-1 p-1">POSSEDUTI:</p>
                    <p class="text-center m-0 p-3">CATTURATI:</p>
                </div>
            </div>
            <div class="col-6">
                <div class="listpokemon">
                    <ul class="p-0 m-1">
                        @foreach($pokemon as $index => $singlepokemon)
                        <li class="d-flex p-0 m-0 justify-content-between">
                            <p class="number m-0 p-1">{{$index + 1}}</p>
                            <img src="{{Vite::asset('resources/pokemon/'. $index + 1 .'.png')}}" alt="">
                            <p class="name m-0">
                                <a href="{{ route('singlePokemon', $index) }}">{{$singlepokemon->name}}</a>
                            </p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection