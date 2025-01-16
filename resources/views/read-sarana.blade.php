@extends('layouts.app1')

@section('content')
<!-- Page content-->
  <div class="container mt-5" style="font-family: 'Geologica', sans-serif; color: black">
    <div class="row  ">
      <div class="col-lg-6">
          <figure class="mb-4">
            <img class="img-fluid rounded img-shdw" src="{{ asset('storage/Sarana/' . $sarana->image) }}" alt="..." />
          </figure>
      </div>
      <div class="col-lg-6">
          <header class="mb-4">
              <h1 class="fw-bolder mb-1">{{$sarana->fasilitas}}</h1>
              <p class="fs-6" style="text-align: justify; font-family: 'Golos Text', sans-serif;">{{$sarana->penjelasan}}</p>
          </header>
        <article>
      </div>
    </div>
  </div>
  
@endsection