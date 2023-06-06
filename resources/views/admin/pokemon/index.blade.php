@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    <div class="col">
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">IMG</th>
                    <th scope="col">Gen</th>
                    <th scope="col">Leg</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($pokemons as $pokemon)
                <tr class="">
                    <td scope="row">{{$pokemon->id}}</td>
                    <td>{{$pokemon->name}}</td>
                    <td><img src="{{ Vite::asset('resources/img/pokemon/' . ($pokemon->id) . '.png') }}" width="300" alt="{{$pokemon->name}}"></td>
                    <td>{{$pokemon->generation}}</td>
                    <td>{{$pokemon->legendary}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('pokemon.show',$pokemon)}}" role="button">view</a>
                        <a class="btn btn-primary" href="#" role="button">edit</a>
                        <a class="btn btn-primary" href="#" role="button">delete</a>
                    </td>
                </tr>
                    
                @endforeach
                
            </tbody>
        </table>
    </div>
    
</div>
    </div>
</div>

@endsection