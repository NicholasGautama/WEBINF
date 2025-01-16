@extends('layouts.app1')

@section('content')
  <div class="container-fluid my-5">
    <h3 class="text-center" style="font-size: 50px">Edit Logo HMIF</h3>
  </div>
  <div class="bootstrap-table bootstrap4 m-5">
      <div class="row">
          <div class="card">
              <div class="card-body">
                  <form action="/admineditlogohmif/{{$himpunan2->id}}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="mb-3">
                          <label for="nama">Judul Halaman</label>
                          <input type="text" name="nama" class="form-control" value="{{$himpunan2->nama}}" required>
                      </div>

                      <div class="mb-3">
                          <label for="judul1">Judul Gambar</label>
                          <input type="text" name="judul1" class="form-control" value="{{$himpunan2->judul1}}" required>
                      </div>

                      <div class="mb-3 d-flex align-items-start">
                          <img src="{{ asset('storage/Program/' . $himpunan2->image1) }}" class="img-thumbnail rounded-start border-0 me-3" alt="..." style="width: 150px;">
                          <div class="flex-grow-1">
                              <label for="image1" class="form-label">Choose an image to upload:</label>
                              <div class="input-group">
                              <input type="file" class="form-control" id="image1" name="image1" required>
                              </div>
                          </div>
                      </div>

                      <div class="mb-3">
                          <button class="btn btn-primary" type="submit">Upload</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>

    
  @endsection