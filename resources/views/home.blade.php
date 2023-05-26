@extends('layouts.app')
@section('content')
<div class="nav_pokedex">
    <h1>POKEDEX NAZIONALE</h1>
</div>
<div class="mainpokedex">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="titlepokemon">
                    <h2>POKEMON</h2>
                </div>
                <div class="img_pokemon">
                    <img src="https://picsum.photos/400" alt="">
                </div>
                <div class="check_pokemon">
                    <p>POSSEDUTI:</p>
                    <p>CATTURATI:</p>
                </div>
            </div>
            <div class="col-6">
                <div class="listpokemon">
                    <ul>
                    @foreach($pokemon as $index => $singlepokemon)
                        <li>
                            <img src="" alt="">
                            <span>{{$index}}</span>
                            <p>{{$singlepokemon->name}}</p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection