@extends('layouts.admin')

@section('content')

<div class="container-fluid my-5">
  @foreach ($visimisi as $item)
    <h3 class="text-center" style="font-size: 50px">{{ $item->judulhal }}</h3>
  </div>
  <div class="container my-5">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <a href="adminedit-visimisi/{{$item->id }}" class="btn btn-primary">Edit</a>
    </div>
    <div class="row">
      <div class="col pt-5">
        <h5 style="font-size: 50px">{{ $item->judulvisiumn }}</h5>
        <p class="card-text">{{ $item->isivisiumn }}</p>
      </div>
      <div class="col pt-5">
        <h5 style="font-size: 50px">{{ $item->judulmisiumn }}</h5>
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
          }
          ?>
        </p>
      </div>
    </div>
    <div class="w-100"></div>
    <div class="row">
      <div class="col pt-5">
        <h5 style="font-size: 50px">{{ $item->judulvisifti }}</h5>
        <p class="card-text">{{ $item->isivisifti }}</p>
      </div>
      <div class="col pt-5">
        <h5 style="font-size: 50px">{{ $item->judulmisifti }}</h5>
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
          }
          ?>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col pt-5">
        <h5 style="font-size: 50px;">{{ $item->judulvisiinf }}</h5>
        <p class="card-text">{{ $item->isivisiinf }}</p>
      </div>
      <div class="col pt-5">
        <h5 style="font-size: 50px">{{ $item->judulmisiinf }}</h5>
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
          }
          ?>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col pt-5">
        <h5 style="font-size: 50px;">{{ $item->judulobjektif }}</h5>
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
          }
          ?>
        </p>
      </div>
    </div>
  </div>
@endforeach
@endsection
