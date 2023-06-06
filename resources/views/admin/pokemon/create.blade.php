@extends('layouts.app')

@section('content')
<div class="container py-5 bg-dark-subtle rounded-4 my-4">
    <form action="{{ route('pokemon.store') }}" method="post">
    @csrf

        <div class="mb-3">
          <label for="name" class="form-label fs-4 fw-bold">name</label>
          <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="" aria-describedby="helpId" value="{{ old('name') }}" required>
          <small id="helpId" class="text-muted">Add name</small>
          @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="type_1" class="form-label fs-4 fw-bold">type 1</label>
          <input type="text" name="type_1" id="type_1" class="form-control @error('type_1') is-invalid @enderror" placeholder="" aria-describedby="helpId" value="{{ old('type_1') }}" required>
          <small id="helpId" class="text-muted">Add type 1</small>
          @error('type_1')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>


        <div class="mb-3">
          <label for="type_2" class="form-label fs-4 fw-bold">type 2</label>
          <input type="text" name="type_2" id="type_2" class="form-control @error('type_2') is-invalid @enderror" placeholder="" aria-describedby="helpId" value="{{ old('type_2') }}" required>
          <small id="helpId" class="text-muted">Add type 2</small>
          @error('type_2')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="total" class="form-label fs-4 fw-bold">total</label>
          <input type="number" name="total" id="total" class="form-control @error('total') is-invalid @enderror" placeholder="" aria-describedby="helpId" value="{{ old('total') }}" required>
          <small id="helpId" class="text-muted">Add total</small>
          @error('total')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="hp" class="form-label fs-4 fw-bold">HP</label>
          <input type="number" name="hp" id="hp" class="form-control @error('hp') is-invalid @enderror" placeholder="" aria-describedby="helpId" value="{{ old('hp') }}" >
          <small id="helpId" class="text-muted">Add HP</small>
          @error('hp')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="attack" class="form-label fs-4 fw-bold">attack</label>
          <input type="number" name="attack" id="attack" class="form-control @error('attack') is-invalid @enderror" placeholder="" aria-describedby="helpId" value="{{ old('attack') }}" >
          <small id="helpId" class="text-muted">Add kind of book</small>
          @error('attack')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="defense" class="form-label fs-4 fw-bold">defense</label>
          <input type="number" name="defense" id="defense" class="form-control @error('defense') is-invalid @enderror" placeholder="" aria-describedby="helpId" value="{{ old('defense') }}" >
          <small id="helpId" class="text-muted">Add kind of book</small>
          @error('defense')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="sp_atk" class="form-label fs-4 fw-bold">sp_atk</label>
          <input type="number" name="sp_atk" id="sp_atk" class="form-control @error('sp_atk') is-invalid @enderror" placeholder="" aria-describedby="helpId" value="{{ old('sp_atk') }}" >
          <small id="helpId" class="text-muted">Add kind of book</small>
          @error('sp_atk')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="sp_def" class="form-label fs-4 fw-bold">sp_def</label>
          <input type="number" name="sp_def" id="sp_def" class="form-control @error('sp_def') is-invalid @enderror" placeholder="" aria-describedby="helpId" value="{{ old('sp_def') }}" >
          <small id="helpId" class="text-muted">Add kind of book</small>
          @error('sp_def')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="speed" class="form-label fs-4 fw-bold">speed</label>
          <input type="number" name="speed" id="speed" class="form-control @error('speed') is-invalid @enderror" placeholder="" aria-describedby="helpId" value="{{ old('speed') }}" >
          <small id="helpId" class="text-muted">Add kind of book</small>
          @error('speed')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="generation" class="form-label fs-4 fw-bold">generation</label>
          <input type="number" name="generation" id="generation" class="form-control @error('generation') is-invalid @enderror" placeholder="" aria-describedby="helpId" value="{{ old('generation') }}" >
          <small id="helpId" class="text-muted">Add kind of book</small>
          @error('generation')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>
@endsection
