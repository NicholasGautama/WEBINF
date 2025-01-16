@extends('layouts.main')

@section('container')
      <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px; font-family: 'Geologica', sans-serif; color: black">Academic Calendar</h3>
        </div>
          <div class="container">
            @foreach ($kalender as $item)
              <div class="my-5">
                <img class="img-fluid img-shdw" src="{{ asset('storage/Kalender/' . $item->image) }}"/>
              </div>
            @endforeach
          </div>
      </div>

      @endsection