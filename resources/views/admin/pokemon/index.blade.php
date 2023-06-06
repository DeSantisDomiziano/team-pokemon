@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row">
    <div class="col">

    <div class="px-5">
        @if(session('message'))
        <div class="alert alert-success p-4">
            <strong class="fs-4">
                {{ session('message') }}
            </strong>
        </div>
        @endif
    </div>

    <div class="text-end">
        <a href="{{ route('pokemon.create') }}" class="btn btn-info my-3 px-4 text-white fw-bold">
            <i class="fa-solid fa-plus"></i>
            ADD
        </a>
    </div>

    <div class="table-responsive rounded-4">
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
                    <td><img src="{{ Vite::asset('resources/img/pokemon/' . ($pokemon->id) . '.png') }}" width="100" alt="{{$pokemon->name}}"></td>
                    <td>{{$pokemon->generation}}</td>
                    <td>{{$pokemon->legendary}}</td>
                    <td>
                        <a class="me-2 fs-4 text-primary" href="{{route('pokemon.show',$pokemon->id)}}" role="button" title="view">
                        <i class="fa-solid fa-eye"></i>
                        </a>
                        <a class="me-2 fs-4 text-warning" href="{{route('pokemon.edit',$pokemon->id)}}" role="button">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a>

                        <button type="button" class="btn p-0 me-2 fs-4 text-danger " data-bs-toggle="modal" data-bs-target="#id-{{ $pokemon->id }}">
                        <i class="fa-solid fa-skull"></i>
                        </button>
                        
                        <!-- Modal Body -->
                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                        <div class="modal fade" id="id-{{ $pokemon->id }}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitle-{{ $pokemon->id }}">Cancel <br> {{ $pokemon->name }} </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <span>Do you really want it? 😭</span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">
                                            <i class="fa-solid fa-xl fa-xmark text-success"></i>
                                        </button>
                                        <form action="{{ route('pokemon.destroy', $pokemon->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            
                                            <button type="submit" class="btn">
                                                <i class="fa-solid fa-xl fa-trash text-danger" title="delete"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                
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