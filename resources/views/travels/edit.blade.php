@extends('layouts.base')
@section('contents')

    <h2>Modifica il tuo viaggio!</h2>

    <form method="POST" action="{{ route('travels.update', ['travel' => $travel->id ]) }}">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{old('date', $travel->date)}}">
            <div class="invalid-feedback">
                @error('date')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title', $travel->title)}}">
            <div class="invalid-feedback">
                @error('title')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">text</label>
            <input type="text" class="form-control @error('text') is-invalid @enderror" id="text" name="text" value="{{old('text', $travel->text)}}">
            <div class="invalid-feedback">
                @error('text')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">image</label>
            <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{old('image', $travel->image)}}">
            <div class="invalid-feedback">
                @error('image')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">country</label>
            <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" value="{{old('country', $travel->country)}}">
            <div class="invalid-feedback">
                @error('country')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" value="{{old('city', $travel->city)}}">
            <div class="invalid-feedback">
                @error('city')
                {{ $message }}
                @enderror
            </div>
        </div>
        <button class="btn btn-primary">Save</button>
    </form>

@endsection