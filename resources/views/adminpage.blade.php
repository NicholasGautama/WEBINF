@extends('layouts.admin')

@section('content')
<style>
  .background-image-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    overflow: hidden;
  }

  .background-image {
    min-width: 100%;
    height: 100%;
    display: block;
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100% auto;
    opacity: 0.1;
    transition: transform 0.3s;
  }

  @media (max-width: 768px) {
    .background-image {
      transform-origin: center;
    }
  }

  @media (max-width: 768px) {
    .background-image:hover {
      transform: scale(1.2);
    }
  }

  .btn-primary {
    background-color: #023407;
    color: #FFFFFF;
  }

  .btn-primary:hover {
  background-color: #ffb703;
  color: #023407;
  transition: background-color 0.3s ease, color 0.3s ease;
}

</style>




<div class="position-relative">

<div class="background-image-container">
  <img src="{{ asset('images/GedungUMN.png') }}" alt="Gedung UMN" class="background-image">
</div>

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
                <img src="{{ asset('storage/Carousel/'.$item->image) }}" class="d-block w-100" alt="slide{{ $index + 1 }}">
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


@php
    $userAccesses = Auth::user()->userAccesses()->first();
@endphp

@if ($userAccesses->home == 1)
<div style="margin: 0 auto; padding: 10px 20px; text-align: center;">
  <a href="adminedit-carousel" class="btn btn-warning rounded-pill" style="width: 200px; background-color: #023047; color: #FFFFFF;">Edit Image</a>
</div>
@endif


<div class="position-relative" style="; font-family: 'Geologica', sans-serif; color: black;">
<img src="{{ asset('images/banner.png') }}"  class="img-fluid visual-image" alt="Visual Image">
</div>


<div class="position-relative" style="background-color: #Ffb703; padding: 50px; font-family: 'Geologica', sans-serif; color: white;">
  <p style="font-size:16px;">Saya memperoleh pengetahuan teori dan praktik yang berharga selama kuliah di UMN. Meskipun perbedaan antara dunia perkuliahan dan dunia kerja sering disebut, dasar-dasar ilmu yang saya dapatkan di bangku kuliah tetap menjadi landasan yang saya terapkan dalam pekerjaan. UMN memberikan dasar-dasar ilmu tersebut dengan sangat baik. Selain itu, UMN juga melatih saya untuk berpikir secara kritis dalam menganalisis masalah dan memenuhi keinginan pelanggan.</p>
  <div style="text-align: right;">
    <h4 style="color:white; font-size: 14px;">Marchelin Fau Hariono</h4>
    <h4 style="font-size:14px; color:white">Alumni Informatika 2012</h4>
    <p style="font-size: 14px;">IT Service Desk Analyst di Schlumberger</p>
  </div>
</div>


<div class="position-relative center" style="margin-top: 50px;">
  <div class="container px-5 custom-container">
    <div class="section-heading">
      <h1 class="text-black">Latest News</h1>
    </div>
    <div class="row">
  @php
  $latestBerita = $berita->sortByDesc('tanggal')->take(3);
  @endphp
  @foreach($latestBerita as $beritaItem)
  <div class="col-lg-12">
    <div class="card mb-4">
      <div class="row g-0">
        <div class="col-md-5">
          <a href="{{ url('read-berita/'.$beritaItem->id) }}" class="img-link">
            <img style="height:100%;" src="{{ asset('storage/Berita/' . $beritaItem->image) }}" alt="Image" class="card-img-top">
          </a>
        </div>
        <div class="col-md-7">
          <div class="card-body">
            <h4 class="card-title" style="font-family: 'Geologica', sans-serif; color: black;"><a href="{{ url('read-berita/'.$beritaItem->id) }}" style="color: black">{{ $beritaItem->judul }}</a></h4>
              <p>{{ date('d F Y', strtotime($beritaItem->tanggal)) }}</p>
            <p class="card-text text-justify">{{ $beritaItem->kota }} - {{ $beritaItem->narasi }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>

<div class="row">
  <div class="col-lg-12 text-center" style="font-family: 'Geologica', sans-serif; color: black;">
    <div id="carouselBeritaLainnya" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        @foreach($berita_lainnya->chunk(3) as $index => $chunk)
        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
          <div class="row justify-content-center">
            @foreach($chunk as $berita)
            <div class="col-md-4">
              <div class="card h-100 border-0 mb-4">
                <div class="card-body d-flex flex-column">
                  <a href="/read-berita/{{$berita->id}}">
                    <div class="position-relative">
                      <img src="{{ asset('storage/Berita/'. $berita->image) }}" class="img-fluid rounded shadow" style="width: 100%; height: 150px; object-fit: cover;" alt="...">
                    </div>
                  </a>
                  <a href="/read-berita/{{$berita->id}}" class="flex-grow-1">
                    <div class="card-title-wrapper">
                      <h6 class="card-title" style="max-height: 60px; overflow: hidden; margin-top:10px;">{{ $berita->judul }}</h6>
                      <small class="text-muted" style="font-size: 12px;">{{ date('d F Y', strtotime($berita->tanggal)) }}</small>
                    </div>
                    <p class="card-text mt-2 flex-grow-1">{{ $berita->deskripsi }}</p>
                  </a>
                </div>

              </div>
            </div>
            @endforeach
          </div>
        </div>
        @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselBeritaLainnya" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselBeritaLainnya" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>

<div class="row mt-4">
  <div class="col-md-12 text-center">
    <a href="{{ url('berita') }}" class="btn btn-primary rounded-pill" role="button" aria-pressed="true" style="width: 376px; height: 69px; font-size: 25px; background-color: #023047; color: #FFFFFF;">
      Read More
      <i class="fas fa-arrow-right ml-2"></i>
    </a>
  </div>
</div>

@endsection
