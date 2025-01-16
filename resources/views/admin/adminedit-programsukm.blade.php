@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Edit Program UKM</h3>
    </div>
      <div class="bootstrap-table bootstrap4 m-5">
        <div class="row">
          <div class="card">
            <div class="card-body">
              <form action="/admineditprogramsukm/{{$programsukm->id}}" method="post" enctype="multipart/form-data">
                  @csrf 
                  @method('PUT')
                  <div class="mb-3">
                      <label for="judul">Judul</label>
                      <input type="text" name="judul" class="form-control" id="judul" value="{{$programsukm->judul}}"required>
                  </div>
                  <div class="mb-3">
                      <label for="isi">Deskripsi</label>
                      <input type="text" name="narasi" class="form-control" id="narasi" value="{{$programsukm->narasi}}" required>
                  </div>
                  <div class="mb-3">
                      <label for="image">Gambar: </label>
                      <div class="input-group">
                          <img src="{{ asset('storage/ProgramsUkm/' . $programsukm->image) }}" alt="Image" style="max-width: 200px;">
                          <input type="file" class="form-control" id="image" name="image">
                      </div>
                      <div class="mb-3">
                      <label for="link">Link</label>
                      <input type="text" name="link" class="form-control" id="link" value="{{$programsukm->link}}" required>
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