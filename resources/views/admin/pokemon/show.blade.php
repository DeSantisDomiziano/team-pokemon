@extends('layouts.app')
@section('content')
<div class="mainpokedex">
    <div class="container h-100 ">
        <div class="row py-2 h-100 justify-content-center row-cols-2">

            <div class="col-6 d-flex flex-column justify-content-between">
                <div class="titlepokemon">
                    <h2 class="text-center m-0 py-3 text-uppercase">{{ $pokemon->name }}</h2>
                </div>
                <div class="img_pokemon text-center flex-grow-1 d-flex align-items-center justify-content-center">
                    @if(str_contains($pokemon->image, "uploads/"))
                    <img width="50%" src="{{ asset('storage/' . $pokemon->image) }}" alt="{{ $pokemon->name . ' image' }}">
                    @else
                    <img width="50%" src="{{ Vite::asset('resources/img/pokemon/' . ($pokemon->id) . '.png') }}" alt="{{ $pokemon->name . ' image' }}">
                    @endif
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

            <div class="col-6 px-5 pt-3 bg-white rounded-4">
                <p>Total: {{ $pokemon->total }}</p>
                <p>HP: {{ $pokemon->hp }}</p>
                <p>Attack: {{ $pokemon->attack }}</p>
                <p>Defense: {{ $pokemon->defense }}</p>
                <p>Special attack: {{ $pokemon->sp_atk }}</p>
                <p>Special defense: {{ $pokemon->sp_def }}</p>
                <p>Speed: {{ $pokemon->speed }}</p>
                @if($types->count() > 0)
                <p class="mb-0">Types:</p>
                @endif
                @foreach($types as $type)
                <span class="badge" style="background-color: {{ $type->color }}">{{ $type->name }}</span>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection