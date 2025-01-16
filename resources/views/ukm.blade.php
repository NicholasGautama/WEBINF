@extends('layouts.main')

@section('container')
  <!-- End Navigation -->
  <style>
    
    .carousel-image {
    max-width: 800px; /* Adjust this value as per your requirement */
    max-height: 400px;
    margin: 0 ; /* Centers the image horizontally */
    }
    .carousel-caption h5{
      font-weight: bold;
      text-transform: uppercase;
    }
    .overlayimg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(2,48,71, 0.5);
        z-index: 1;
    }
    .preload-carousel {
        visibility: hidden;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .preload-carousel.loaded {
        visibility: visible;
        opacity: 1;
    }

    .preload-image {
        display: none;
    }

    </style>


  <div class="container-fluid mt-5" style=";font-family: 'Geologica', sans-serif; color: black;">
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Student Activity Units</h3>
    </div>
    <div class="container-fluid text-center">
    @foreach ($ukm2 as $item)
    <div class="container-fluid text-center">
      <a href="{{$item->tautan5}}">
        <img class="img-fluid mb-4" src="{{ asset('storage/Program/' . $item->image1) }}" alt="" width="450">
      </a>
    </div>
    </div>
    @endforeach   
    </div>
  </div>
  <!-- <div class="container" style="font-family: 'Geologica', sans-serif; color: black;">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="background-color: #023047">
    <li class="nav-item">
      <a class="nav-link active" id="pills-info-tab" data-toggle="pill" href="#pills-info" role="tab" aria-controls="pills-info" aria-selected="true">Info</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-program-tab" data-toggle="pill" href="#pills-program" role="tab" aria-controls="pills-program" aria-selected="false">Program</a>
    </li>
    </ul>
  </div> -->


<div class="container" style="font-family: 'Geologica', sans-serif; color: black;">

        <ul class="nav nav-pills mb-3" id="myTab" role="tablist" style="font-family: 'Geologica', sans-serif; color: black; background-color: #023047">
            <li class="nav-item">
                <a class="nav-link active" id="profil-tab" data-toggle="tab" href="#profil" role="tab" aria-controls="profil" aria-selected="true" >Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="detail-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="detail" aria-selected="false">Details</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="profil" role="tabpanel" aria-labelledby="profil-tab">
            @foreach ($ukm as $item1)
            <div>
                <p><strong style="font-size: 30px;">{{$item1->judul}}</strong></p>
                <p style="text-align: justify; font-size: 15px">
                <?php
                $paragraphs = explode('\n', $item1->isi);
                $counter = 1;
                foreach ($paragraphs as $paragraph) {
                    if (trim($paragraph) != '') {
                        if (count($paragraphs) > 2) {
                            echo '';
                        }
                        echo $paragraph . '. <br><br>';
                        $counter++;
                    }
                }?></p>
            </div>
            @endforeach
            </div>

            <!-- tab detail -->
            <div class="tab-pane fade" id="detail" role="tabpanel" aria-labelledby="detail-tab" style="max-width; margin: auto;">
                
            <div class="row">
            @foreach ($programsukm as $item)
            <div class="col-md-6 col-sm-12">
            <div class="card mb-4" style=" height:500px;">
            <a href="{{$item->link }}"><img class="card-img-top" src="{{ asset('storage/ProgramsUkm/'.$item->image) }}" alt="..." style="height: 300px;" /></a>
                <div class="card-body" style="height: 150px; overflow: hidden">
                    <h3 class="card-title" style="font-size: 20px">{{ $item->judul }}</h3>
                    <p class="card-text overflow-hidden" style="text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 3.6em; line-height: 1.2em; font-family: 'Open Sans', sans-serif;">{{$item->narasi}}</p>
                    <a class="btn btn-primary rounded-pill" style="background-color: #023047; color: #FFFFFF; position: absolute; right: 15px;" href="{{$item->link }}">Read More →</a>
                </div>
            </div>
            </div>
            @endforeach
        </div>
</div>
</div>

@endsection