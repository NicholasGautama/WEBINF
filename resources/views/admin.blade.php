@extends('layouts.app')

@section('content')
<div class="container-fluid position-relative">
  <!-- <div class="row">
    <div class="col"> -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          @foreach ($carousel as $index => $item)
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
          @endforeach
        </div>
        <div class="carousel-inner">
          @foreach ($carousel as $index => $item)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
              <a href="#">
                <img src="{{ asset('storage/Carousel/'.$item->image) }}" class="d-block w-100" alt="slide{{ $index + 1 }}" style="max-width: 100%; height: auto;">
                <div class="carousel-caption d-none d-md-block"></div>
              </a>
            </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  <!-- </div>
</div> -->

@endsection
