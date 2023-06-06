@extends('layouts.app')

@section('content')
<div class="mainpokedex">
    <div class="container h-100">
        <div class="row py-2 h-100">
            <div class="col-6 d-flex flex-column justify-content-between">
                <div class="titlepokemon">
                    <h2 class="text-center m-0 py-3 text-uppercase">{{ $selectedPokemon->name }}</h2>
                </div>
                <div class="img_pokemon text-center flex-grow-1 d-flex align-items-center justify-content-center">
                    <img width="50%" src="{{ Vite::asset('resources/img/pokemon/' . $selectedPokemon->id . '.png') }}" alt="{{ $selectedPokemon->name . ' image' }}">
                </div>
                <div class="check_pokemon">

                    <?php $seen = rand(0, 100); ?>
                    <p class="d-flex justify-content-between m-0 py-2">
                        AVVISTATI:
                        <span>{{ $seen }}</span>
                    </p>
                    <p class="d-flex justify-content-between m-0 py-2">
                        CATTURATI:
                        <span>{{ rand(0, $seen) }}</span>
                    </p>

                </div>
            </div>
            @include('partials.rightSection')
        </div>
    </div>
</div>
@endsection
