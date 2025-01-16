@extends('layouts.main')

@section('container')
<style>
    .title-adm{
        color: #4371ba;
        font-size: 25px;
        font-weight: bold;
        margin:auto;
    }
    .card-header{
        background-color: white;
    }
    </style>

<div class="container-fluid mt-5" style="font-family: 'Geologica', sans-serif; color: black;">
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px; color:#023047;">Current Prospect</h3>
    </div>
</div>
<div class="container">
                @foreach ($prospect as $item)
                
<div class="card">
                <div class="card-header">
                    <p class="title-adm">{{$item -> title}}</p>
                </div>
                <div class="card-body">
                <p class="fs-5 mb-4" style="text-align: justify; font-family: 'Nunito', sans-serif; font-size: 10px;">
                <?php
                  $paragraphs = explode('//', $item->isi);
                  $counter = 1;
                  foreach ($paragraphs as $paragraph) {
                      if (trim($paragraph) != '') {
                          $formattedParagraph = preg_replace('/\*\*(.*?)\*\*/', '<strong style="font-size: larger">$1</strong>', $paragraph);
                          if (count($paragraphs) > 2) {
                              '.';
                          }
                          echo $formattedParagraph . '';
                          $counter++;
                      }
                  }
                ?>
              </p>
                </div>
</div>
                @endforeach
</div>

</div>

@endsection