@extends('layouts.app1')

@section('content')
<!-- Page content-->
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-8">
          <!-- Post content-->
          <article>
            <!-- Post header-->
            <header class="mb-4">
                <!-- Post title-->
                <h1 class="fw-bolder mb-1" style="font-family: 'Geologica', sans-serif; color: black">{{$berita->judul}}</h1>
                <!-- Post meta content-->
                <div class="text-muted fst-italic mb-2">{{ date('d F Y', strtotime($berita->tanggal)) }} by {{ $berita->penulis }}</strong></div>
                <!-- Post categories-->
                <div class="badge bg-secondary text-decoration-none link-light">{{$berita->kategori}}</div>
            </header>
            <!-- Preview image figure-->
            <figure class="mb-4">
              <img class="img-fluid rounded img-shdw" src="{{ asset('storage/Berita/'.$berita->image) }}" alt="..." />
            </figure>
            <!-- Post content-->
            <section class="mb-5">
              <p class="fs-5 mb-4" style="text-align: justify; font-family: 'Open Sans', sans-serif;"><strong>{{strtoupper($berita->kota)}} – {{$berita->narasi}}</strong></p>
              <p class="fs-5 mb-4" style="text-align: justify; font-family: 'Nunito', sans-serif; font-size: 10px;"><?php
                  $paragraphs = explode('//', $berita->konten);
                  $counter = 1;
                  foreach ($paragraphs as $paragraph) {
                      if (trim($paragraph) != '') {
                          $formattedParagraph = preg_replace('/\*\*(.*?)\*\*/', '<strong style="font-size: larger">$1</strong>', $paragraph);
                          if (count($paragraphs) > 2) {
                              '.';
                          }
                          echo $formattedParagraph . '<br> <br>';
                          $counter++;
                      }
                  }
              ?></p>

              </p>
            </section>
          </article>
          <!-- Link section-->
          <section class="mb-5">
            <ul>
              @foreach($berita_lainnya as $berita)
              <a href="/read-berita/{{$berita->id}}"><li style="font-size: 18px; color:blue">{{ $berita->judul}}</li></a>
              @endforeach
            </ul> 
          </section>
      </div>
      <!-- Side widgets-->
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-header">
            <h4>Berita Lainnya</h4>
          </div>
          <div class="card-body">
            @foreach($berita_lainnya as $berita)
              <div class="card border-0 mb-2" style="background-color: #f4f4f4;">
                <div class="row g-0">
                  <div class="col-md-5 center">
                    <div style="height: 100%; display: flex; align-items: center; justify-content: center;">
                      <img src="{{ asset('storage/Berita/'.$berita->image) }}" class="img-fluid rounded" style="max-width:100%; max-height:100%; display:block; margin:auto;" alt="...">
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="card-body">
                      <a href="/read-berita/{{$berita->id}}">
                        <h6 class="card-title mb-0">{{ $berita->judul}}</h6>
                        <small class="text-muted">{{ date('d F Y', strtotime($berita->tanggal)) }}</small>
                        <p class="card-text mt-2">{{ $berita->deskripsi}}</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>



    </div>
  </div>
@endsection