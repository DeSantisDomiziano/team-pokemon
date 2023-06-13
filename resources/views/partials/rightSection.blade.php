<div class="col-6 h-100">
    <ul class="list_pokemon p-0 m-0 list-unstyled">
        @foreach($pokemons as $index => $singlepokemon)
        <li class="{{ $index + 1 === $selectedPokemon -> id ? 'active' : '' }}">
            <a class="text-dark d-flex justify-content-between align-items-center text-decoration-none" href="{{route('selectedPokemon',$singlepokemon->id)}}">
                <p class="number m-0">{{ $index + 1 }}</p>
                <img height="50" src="{{ Vite::asset('resources/img/pokemon/'. $index + 1 .'.png') }}" alt="{{ $singlepokemon->name . ' image' }}">
                <p class="name m-0 text-end">{{ $singlepokemon->name }}</p>
            </a>
        </li>
        @endforeach
    </ul>
</div>
