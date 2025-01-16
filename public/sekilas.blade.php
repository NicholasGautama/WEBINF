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

  <!-- End Navigation -->
        <div class="container-fluid my-5" style="font-family: 'Geologica', sans-serif; color: black";>
          @foreach ($about as $item)
          <h3 class="text-center" style="font-size: 50px">{{$item->judul}}</h3>
        
            <div class="container my-5">
              <h5 style="text-align: justify">
              {{$item->isi1}} <br><br>
              {{$item->isi2}} <br><br>
              {{$item->isi3}} <br> <br>
              </h5>
            </div>
          </body>
          @endforeach
        </div>
@endsection