@extends('layouts.admin')

@section('content')
<!-- Page header with logo and tagline-->

<style>
  .background-image-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
  }

  .background-image {
    width: 100%;
    height: auto;
    display: block;
    opacity: 0.1;
  }

  .carousel-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('{{ asset('images/visualasset.png') }}');
    background-repeat: no-repeat;
    background-size: cover;
    z-index: -1;
  }

  .btn-primary {
    background-color: #023047;
    color: #FFFFFF;
  }

  .btn-primary:hover {
  background-color: #ffb703;
  color: #023407;
  transition: background-color 0.3s ease, color 0.3s ease;
}

</style>

<div class="background-image-container">
  <img src="{{ asset('images/GedungUMN.png') }}" alt="Gedung UMN" class="background-image">
</div>

<div class="container">
  <div class="container-fluid my-5">
    <h3 class="text-center" style="font-size: 50px;font-family: 'Geologica', sans-serif; color: black">Facilities</h3>
  </div>
  <div class="bootstrap-table bootstrap4 mb-3">
    <a href="adminadd-sarana" class="btn btn-primary">Tambah</a>
  </div>
</div>
<div class="container" style="font-family: 'Geologica', sans-serif; color: black">
  <!-- Blog entries-->
  <div class="row">
    @foreach ($sarana as $item)
    <div class="col-lg-4 d-flex align-items-stretch">
      <!-- Blog post-->
      <div class="card mb-4 w-100">
        <a href="read-sarana/{{$item->id }}"><img class="card-img-top" src="{{ asset('storage/Sarana/' . $item->image) }}" alt="..." /></a>
        <div class="card-body">
          <h2 class="card-title h4">{{$item->fasilitas}}</h2>
          <p class="card-text overflow-hidden" style="text-overflow: ellipsis; white-space: nowrap;font-family: 'Golos Text', sans-serif;">{{$item->penjelasan}}</p>
        </div>
        <a class="btn btn-primary justify-content-between align-items-center" href="read-sarana/{{$item->id }}">Read More →</a>
        <div class="mt-auto border-top">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <a href="adminedit-sarana/{{$item->id }}" class="btn btn-sm btn-warning me-2">Edit</a>
              <a href="admindelete-sarana/{{$item->id }}" class="btn btn-sm btn-danger">Delete</a>
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

</div>
</div>
@endsection