@extends('layouts.main')

@section('container')
<!-- End Navigation -->

<!-- Page header with logo and tagline-->
<div class="container">
<div class="container-fluid my-5">
    <h3 class="text-center" style="font-size: 50px;font-family: 'Geologica', sans-serif; color: black;">News</h3>
  </div>
</div>

<div class="container" style="font-family: 'Geologica', sans-serif; color: black;">
<div class="row">
  <div class="col-lg-12">
    @php
    $latestBerita = $berita->sortByDesc('tanggal')->take(5);
    $firstBerita = $latestBerita->shift();
    @endphp
    <div class="card mb-4">
      <div class="row g-0">
        <div class="col-md-6">
          <a href="{{ url('read-berita/'.$firstBerita->id) }}" class="img-link">
            <img style="height: 100%; width:relative;" src="{{ asset('storage/Berita/' . $firstBerita->image) }}" alt="Image" class="card-img-top">
          </a>
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <h4 class="card-title"><a href="{{ url('read-berita/'.$firstBerita->id) }}" style="color: black">{{ $firstBerita->judul }}</a></h4>
            <div class="post-meta">
              <p>{{ date('d F Y', strtotime($firstBerita->tanggal)) }}</p>
            </div>
            <p class="card-text text-justify" style="font-family: 'Open Sans', sans-serif;">{{ $firstBerita->kota }} - {{ $firstBerita->narasi }}</p>
            <a href="{{ url('read-berita/'.$firstBerita->id) }}" class="btn btn-primary rounded-pill" style="background-color: #023047; color: #FFFFFF; position: absolute; bottom: 15px;">Read More →</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
    @foreach ($latestBerita as $item)
    <div class="col-md-6 col-sm-12">
        <div class="card mb-4" style="height:610px;">
        <a href="{{ url('read-berita/'.$item->id) }}"><img class="card-img-top" src="{{ asset('storage/Berita/'.$item->image) }}" alt="..." style="height: 300px;" /></a>
            <div class="card-body" style="height: 150px; overflow: hidden">
                <div class="small text-muted" style="margin-bottom: 10px;">{{ date('d F Y', strtotime($item->tanggal))}}</div>
                <h3 class="card-title" style="font-size: 20px">{{ $item->judul }}</h3>
                <p class="card-text overflow-hidden" style="text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 3.6em; line-height: 1.2em; font-family: 'Open Sans', sans-serif;">{{$item->kota}} – {{$item->narasi}}</p>
                <a class="btn btn-primary rounded-pill" style="background-color: #023047; color: #FFFFFF; position: absolute; bottom: 15px;" href="{{ url('read-berita/'.$item->id) }}">Read More →</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

</div>

@endsection
