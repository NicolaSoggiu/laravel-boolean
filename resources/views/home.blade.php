@extends('layouts.base')

@section('contents')


      

      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          @foreach ($travels as $key => $travel)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="{{ $loop->first ? 'true' : 'false' }}" aria-label="Slide {{ $key+1 }}"></button>
          @endforeach
        </div>
        <div class="carousel-inner">
          @foreach ($travels as $key => $travel)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
              <img src="{{ $travel->image }}" class="d-block w-100" alt="Slide {{ $key+1 }}">
              <div class="carousel-caption">
                <h5>{{ $travel->title }}</h5>
              </div>
            </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

@endsection