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
  <div style="font-family: 'Geologica', sans-serif; color: black">
  <div class="container-fluid my-5">
    @foreach ($visimisi as $item)
    <h3 class="text-center" style="font-size: 50px">{{ $item->judulhal}}</h3>
  </div>
  <div class="container my-5">
    <div class="row">
      <div class="col pt-5">
        <h5 style="font-size:40px">{{ $item->judulvisiumn }}</h5>
        <p class="card-text">{{ $item->isivisiumn }}</p>
      </div>
      <div class="col pt-5">
        <h5 style="font-size: 40px">{{ $item->judulmisiumn }}</h5>
        <p class="card-text">
          <?php
          $paragraphs = explode('.', $item->isimisiumn);
          $counter = 1;
          foreach ($paragraphs as $paragraph) {
              if (trim($paragraph) != '') {
                  if (count($paragraphs) > 2) {
                      echo $counter . '. ';
                  }
                  echo $paragraph . '.<br>';
                  $counter++;
              }
          }?>
        </p>
      </div>
      <div class="w-100"></div>
        <div class="col pt-5">
          <h5 style="font-size: 40px">{{ $item->judulvisifti }}</h5>
          <p class="card-text">{{ $item->isivisifti }}</p>
        </div>
        <div class="col pt-5">
          <h5 style="font-size: 40px">{{ $item->judulmisifti }}</h5>
          <p class="card-text">
              <?php
              $paragraphs = explode('.', $item->isimisifti);
              $counter = 1;
              foreach ($paragraphs as $paragraph) {
                  if (trim($paragraph) != '') {
                      if (count($paragraphs) > 2) {
                          echo $counter . '. ';
                      }
                      echo $paragraph . '.<br>';
                      $counter++;
                  }
              }?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col pt-5">
          <h5 style="font-size: 40px;">{{ $item->judulvisiinf }}</h5>
          <p class="card-text">{{ $item->isivisiinf }}</p>
        </div>
        <div class="col pt-5">
          <h5 style="font-size: 40px">{{ $item->judulmisiinf }}</h5>
          <p class="card-text">
              <?php
              $paragraphs = explode('.', $item->isimisiinf);
              $counter = 1;
              foreach ($paragraphs as $paragraph) {
                  if (trim($paragraph) != '') {
                      if (count($paragraphs) > 2) {
                          echo $counter . '. ';
                      }
                      echo $paragraph . '.<br>';
                      $counter++;
                  }
              }?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col pt-5">
          <h5 style="font-size: 40px;">{{ $item->judulobjektif}}</h5>
          <p class="card-text">
            <?php
                $paragraphs = explode('. ', $item->isiobjektif);
                $counter = 1;
                foreach ($paragraphs as $paragraph) {
                    if (trim($paragraph) != '') {
                        if (count($paragraphs) > 2) {
                            echo $counter . '. ';
                        }
                        echo $paragraph . '.<br>';
                        $counter++;
                    }
                }?>
          </p>
        </div>
      </div>
    </div>
    @endforeach  
  </div>
  </div>
@endsection