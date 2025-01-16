@extends('layouts.admin')

@section('content')
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center h-100">
      <h3 class="text-center" style="font-size: 50px; margin-top: 30px;">Academic Calendar</h3>
      <div class="container m-5">
        <a href="adminadd-kalender" class="btn btn-primary">Tambah</a>
      </div>
      <div class="container flex-grow-1">
        <div class="row">
          @foreach ($kalender as $key => $item)
            <div class="col-md-6 my-5 position-relative">
              <form action="{{ route('delete_kalender', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger position-absolute" style="top: 0; left: 0;">Delete</button>
              </form>
              <img class="img-fluid" style=""src="{{ asset('storage/Kalender/' . $item->image) }}"/>
              <a href="{{ asset('storage/image/' . $item->image) }}" download class="position-absolute" style="top: 0; bottom: 0; left: 0; right: 0;"></a>
            </div>
            @if (($key + 1) % 2 == 0)
              </div><div class="row">
            @endif
          @endforeach
        </div>
      </div>
    </div>
@endsection
