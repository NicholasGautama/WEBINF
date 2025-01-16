@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Edit Program Himpunan</h3>
    </div>
      <div class="bootstrap-table bootstrap4 m-5">
        <div class="row">
          <div class="card">
            <div class="card-body">
              <form action="/admineditprogram/{{$program->id}}" method="post" enctype="multipart/form-data">
                  @csrf 
                  @method('PUT')
                  <div class="mb-3">
                      <label for="judul">Judul</label>
                      <input type="text" name="judul" class="form-control" id="judul" value="{{$program->judul}}"required>
                  </div>
                  <div class="mb-3">
                      <label for="isi">Deskripsi</label>
                      <input type="text" name="isi" class="form-control" id="isi" value="{{$program->isi}}" required>
                  </div>
                  <div class="mb-3">
                      <label for="gambar1">Gambar 1 : </label>
                      <div class="input-group">
                          <img src="{{ asset('storage/Program/' . $program->gambar1) }}" alt="Gambar 1" style="max-width: 200px;">
                          <input type="file" class="form-control" id="gambar1" name="gambar1">
                      </div>
                  </div>
                  <div class="mb-3">
                      <label for="gambar2">Gambar 2 : </label>
                      <div class="input-group">
                          <img src="{{ asset('storage/Program/' . $program->gambar2) }}" alt="Gambar 2" style="max-width: 200px;">
                          <input type="file" class="form-control" id="gambar2" name="gambar2">
                      </div>
                  </div>
                  <div class="mb-3">
                      <label for="gambar3">Gambar 3 : </label>
                      <div class="input-group">
                          <img src="{{ asset('storage/Program/' . $program->gambar3) }}" alt="Gambar 3" style="max-width: 200px;">
                          <input type="file" class="form-control" id="gambar3" name="gambar3">
                      </div>
                  </div>
                  <div class="mb-3">
                      <button class="btn btn-primary" type="submit">Update</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    @endsection