@extends('layouts.main')

@section('container')
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

  .announcement-container {
    position: fixed;
    bottom: 0;
    right: 0;
    z-index: 150;
    padding: 20px;
  }

  .modal-trigger-container{
    animation: changeColor 6s infinite; /* Animasi selama 6 detik, diulang tanpa batas */
  }

  @keyframes changeColor {
      0% { background-color: #023047; }
      33% { background-color: #ffb703; }
      66% { background-color: #8ecae6; }
      100% { background-color: #023047; } /* Kembali ke warna awal */
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

<div class="announcement-container">
  <!-- Button to trigger modal -->
  <div class="modal-trigger-container alert alert-info mt-3 d-flex justify-content-end align-items-center" role="alert" style="font-family: 'Geologica', sans-serif;">
    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#upcomingAnnouncementModal" style="background-color: #023047; color: #FFFFFF; font-size: 20px">
		<b>Upcoming Event!</b>
    </button>
  </div>
</div>

@if($upcomingAnnouncements->isNotEmpty())
<div class="modal fade" id="upcomingAnnouncementModal" tabindex="-1" aria-labelledby="upcomingAnnouncementLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="upcomingAnnouncementLabel">Upcoming Events</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <section class="section" style="font-family: 'Geologica', sans-serif; color: black;">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <ul class="list-unstyled">
                  <!-- Loop through each announcement -->
                  @foreach ($upcomingAnnouncements as $item)
                  <li class="d-md-table mb-4 mt-4 w-100 border-bottom hover-shadow p-3">
                    <div class="d-md-table-cell text-center text-white mb-md-0 p-3" style="background-color: #ffb703; width: 150px;">
                      <span class="h1 d-block">{{ \Carbon\Carbon::parse($item->tanggal)->format('d') }}</span>
                      {{ \Carbon\Carbon::parse($item->tanggal)->format('F Y') }}
                    </div>
                    <div class="d-md-table-cell px-4 vertical-align-middle mb-5 mb-md-0">
                      <p class="h4 mt-0 mb-3">{{ $item->judul }}</p>
                      <p class="mb-4" style="font-family: 'Open Sans', sans-serif;">
                        @php
                          $isi = str_replace('///', '<br><br>', $item->isi); 
                          $isi = str_replace('//', '<br>', $isi); 
                          $isi = str_replace('--', '<br> -', $isi); 

                          // Batasi hingga 250 karakter
                          if (strlen($isi) > 250) {
                              $isi = substr($isi, 0, 250) . '...';
                          }
                          echo $isi;
                        @endphp
                      </p>
                    </div>
                    <div class="d-md-table-cell text-center pr-0 pr-md-4">
                      <a href="{{ url('read-announcement/'.$item->id) }}" class="btn btn-primary rounded-pill" style="background-color: #023047; color: #FFFFFF;">Read More</a>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@else
<div class="modal fade" id="upcomingAnnouncementModal" tabindex="-1" aria-labelledby="upcomingAnnouncementLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="upcomingAnnouncementLabel">Upcoming Events</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <section class="section" style="font-family: 'Geologica', sans-serif; color: black;">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                {{-- <ul class="list-unstyled">
                  <!-- Loop through each announcement -->
                  @foreach ($upcomingAnnouncements as $item)
                  <li class="d-md-table mb-4 mt-4 w-100 border-bottom hover-shadow p-3">
                    <div class="d-md-table-cell text-center text-white mb-md-0 p-3" style="background-color: #ffb703; width: 150px;">
                      <span class="h1 d-block">{{ \Carbon\Carbon::parse($item->tanggal)->format('d') }}</span>
                      {{ \Carbon\Carbon::parse($item->tanggal)->format('F Y') }}
                    </div>
                    <div class="d-md-table-cell px-4 vertical-align-middle mb-5 mb-md-0">
                      <p class="h4 mt-0 mb-3">{{ $item->judul }}</p>
                      <p class="mb-4" style="font-family: 'Open Sans', sans-serif;">
                        @php
                          $isi = str_replace('///', '<br><br>', $item->isi); 
                          $isi = str_replace('//', '<br>', $isi); 
                          $isi = str_replace('--', '<br> -', $isi); 

                          // Batasi hingga 250 karakter
                          if (strlen($isi) > 250) {
                              $isi = substr($isi, 0, 250) . '...';
                          }
                          echo $isi;
                        @endphp
                      </p>
                    </div>
                    <div class="d-md-table-cell text-center pr-0 pr-md-4">
                      <a href="{{ url('read-announcement/'.$item->id) }}" class="btn btn-primary rounded-pill" style="background-color: #023047; color: #FFFFFF;">Read More</a>
                    </div>
                  </li>
                  @endforeach
                </ul> --}}
                <div class="alert alert-info mt-3" style="font-family: 'Geologica', sans-serif;">
                  There are no upcoming events at the moment.
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endif
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


<div class="position-relative" style="; font-family: 'Geologica', sans-serif; color: black;">
<img src="{{ asset('images/banner.png') }}"  class="img-fluid visual-image" alt="Visual Image">
</div>


<div class="position-relative" style="background-color: #Ffb703; padding: 50px; font-family: 'Geologica', sans-serif; color: white;">
<p style="font-size:16px;">I gained valuable theoretical and practical knowledge during my studies at UMN. Despite the often mentioned differences between the world of academia and the professional world, the fundamental knowledge I acquired in my college years remains the foundation that I apply in my work. UMN provided that foundational knowledge very effectively. Additionally, UMN trained me to think critically in analyzing problems and fulfilling customer desires.</p>
<div style="text-align: right;">
  <h4 style="color:white; font-size: 14px;">Marchelin Fau Hariono</h4>
  <h4 style="font-size:14px; color:white">Class of 2012 Informatics Alumni</h4>
  <p style="font-size: 14px;">IT Service Desk Analyst at Schlumberger</p>
</div>

</div>


<div class="position-relative center" style="margin-top: 50px;">
  <div class="container px-5 custom-container">
    <div class="section-heading">
      <h1 class="text-black">Latest News</h1>
    </div>
    <div class="row">
  @php
  // $latestBerita = $berita->sortByDesc('tanggal')->take(3); #tanpa filter informatika
  $latestBerita = $berita->filter(function($item) {
      return stripos($item->kategori, 'informatika') !== false;
  })->sortByDesc('tanggal')->take(3);
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
        {{-- @php
        // Filter berita lainnya dengan kategori informatika
        $filteredBeritaLainnya = $berita_lainnya->filter(function($item) {
            return stripos($item->kategori, 'informatika') !== false;
        });
        @endphp --}}
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

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // If there are upcoming announcements, trigger the modal
    @if($upcomingAnnouncements->isNotEmpty())
        var modal = new bootstrap.Modal(document.getElementById('upcomingAnnouncementModal'), {});
        document.querySelector('.modal-trigger-container button').addEventListener('click', function() {
            modal.show();
        });
    @endif
});
</script>
@endsection