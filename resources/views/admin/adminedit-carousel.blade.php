@extends('layouts.admin')

@section('content')
      <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Edit Carousel</h3>
        </div>
      <div class="bootstrap-table bootstrap4 m-5 ">
      <a href="adminadd-carousel" class="btn btn-primary mb-5 rounded-pill">Tambah</a>
      <table style="text-align: center;" id="table" data-toggle="table" data-flat="true" data-pagination="true">
        <thead>
          <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($carousel as $key => $item)
          <tr>
            <td style="text-align: center;">{{ $key+1 }}</td>
            <td style="text-align: center;"><img src="{{ asset('storage/Carousel/' . $item->image) }}" alt="{{ $item->judul }}" style="max-width: 200px; max-height: 200px;"></td>
            <td style="text-align: center;">{{ $item->judul }}</td>
            <td>
              <div class="d-flex justify-content-center">
                <a href="admindelete-carousel/{{$item->id }}" class="btn btn-danger btn-sm">Delete</a>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      </div>
@endsection