@extends('layouts.app')
@section('content')
<div class="mainpokedex">
    <div class="container h-100">
        <div class="row py-2 h-100">
            <div class="col-6 d-flex flex-column justify-content-between">
                <div class="pokedex_left_top_section">
                    <div class="titlepokemon">
                        <h2 class="text-center m-0 py-2 text-uppercase">{{$pokemon[0]->name}}</h2>
                    </div>
                    <div class="img_pokemon text-center">
                        <img width="50%" src="{{ Vite::asset('resources/pokemon/' . $pokemon[0]->id . '.png') }}" alt="{{ $pokemon[0]->name . ' image'}}">
                    </div>
                </div>
                <div class="check_pokemon">
                    <?php $catched = rand(0, 100); ?>
                    <p class="d-flex justify-content-between m-0 py-2">
                        POSSEDUTI:
                        <span>{{ rand(0, $catched) }}</span>
                    </p>
                    <p class="d-flex justify-content-between m-0 py-2">
                        CATTURATI:
                        <span>{{ $catched }}</span>
                    </p>
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