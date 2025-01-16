@extends('layouts.main')

@section('container')
<!-- End Navigation -->
<div class="container-fluid my-5">
  <h3 class="text-center" style="font-size: 50px;font-family: 'Geologica', sans-serif; color: black;">Certification</h3>
  </div>
  <div class="container my-5">
    @foreach ($sertifikasi as $item)
      <p style="font-size: 20px;text-align: justify;"><strong>{{$item->sertifikasi}} </strong>
      <br>{{$item->penjelasan}} 
      @if ($item->kontak || $item->tautan)
      <a style="color:blue" href="{{$item->tautan}}">{{$item->kontak}}</a> 
      @endif
      </br>
      </p>
      <?php
      $paragraphs = explode('.', $item->spesialisasi);
      $counter = 1;
      foreach ($paragraphs as $paragraph) {
          if (trim($paragraph) != '') {
              if (count($paragraphs) > 2) {
                  echo '<li>';
              }
              echo $paragraph . '.<br>';
              $counter++;
          }
      }?>
      <br>
    @endforeach

<p style="font-size: 20px;text-align: justify;">For details, please check via the following link: <a href="https://certiport.pearsonvue.com/Certifications/ITSpecialist/Certification/Certify" style="color: blue">Certiport IT Specialist</a><br>
</div> 
@endsection