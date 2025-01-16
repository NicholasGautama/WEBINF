@extends('layouts.admin')

@section('content')
<!-- Page header with logo and tagline-->
<div class="container">
  <div class="container-fluid my-5">
    <h3 class="text-center" style="font-size: 50px">News</h3>
  </div>
  <div class="bootstrap-table bootstrap4 mb-3">
    <a href="adminadd-berita" class="btn btn-primary">Tambah</a>
  </div>
</div>
<div class="container">
  <!-- Blog entries-->
  <div class="row">
    @foreach ($berita as $item)
    <div class="col-lg-4 d-flex align-items-stretch">
      <!-- Blog post-->
      <div class="card mb-4 w-100">
        <a href="read-berita/{{$item->id }}"><img class="card-img-top" src="{{ asset('storage/image/' . $item->image) }}" alt="..." /></a>
        <div class="card-body">
          <div class="small text-muted">{{ date('d F Y', strtotime($item->tanggal))}}</div>
          <h2 class="card-title h4">{{$item->judul}}</h2>
          <p class="card-text overflow-hidden" style="text-overflow: ellipsis; white-space: nowrap;">{{$item->kota}} – {{$item->narasi}}</p>
        </div>
        <a class="btn btn-primary justify-content-between align-items-center" href="read-berita/{{$item->id }}">Read More →</a>
        <div class="mt-auto border-top">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <a href="adminedit-berita/{{$item->id }}" class="btn btn-sm btn-warning me-2">Edit</a>
              <a href="admindelete-berita/{{$item->id }}" class="btn btn-sm btn-danger">Delete</a>
            </div>
            <small class="text-muted" style="margin-left: 1em; margin-right: 1em;">Last updated {{$item->updated_at->diffForHumans()}}</small>
          </div>
        </div>
      </div>
      <!-- End of Blog post-->
    </div>
    @endforeach
  </div>
  <hr class="my-0"/>
</div>
@endsection