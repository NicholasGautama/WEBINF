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
    background-color: #023407;
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

<!-- Page header with logo and tagline-->
<div class="container" style="font-family: 'Geologica', sans-serif; color: black">
  <div class="container-fluid my-5">
    <h3 class="text-center" style="font-size: 50px">Facilities</h3>
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
          <p class="card-text overflow-hidden" style="text-overflow: ellipsis; white-space: nowrap;">{{$item->penjelasan}}</p>
        </div>
        <a style="background-color: #023047; font-family: 'Geologica', sans-serif; color: white" class="btn btn-primary justify-content-between align-items-center" href="read-sarana/{{$item->id }}">Read More →</a>
        <style>
          a:hover {
            color: #ffb703 !important;
          }
        </style>
        <div class="mt-auto border-top">
          <div class="d-flex justify-content-between align-items-center">
          </div>
        </div>
      </div>
      <!-- End of Blog post-->
    </div>
    @endforeach
  </div>
</div>

</div>
@endsection
