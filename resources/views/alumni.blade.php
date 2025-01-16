@extends('layouts.main')

@section('container')
<div class="container-fluid my-5">
  @foreach ($alumni as $item)
  <h3 class="text-center mb-4" style="font-size: 50px; font-family: 'Geologica', sans-serif; color: black;">{{$item->judul}}</h3>
  <div class="d-flex justify-content-center">
    <img class="img-fluid mb-4 mx-auto" src="{{ asset('storage/Sarana/'.$item->gambar) }}" alt="" style="max-width: 600px;">
  </div>
  <div class="container my-5">
    <h5 style="text-align: justify">
      {!! str_replace('// ', '<br><br>', $item->isi) !!}
    </h5>
  </div>
  @endforeach
</div> 
@endsection
