@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Tambah Program UKM</h3>
    </div>
      <div class="bootstrap-table bootstrap4 m-5">
        <div class="row">
          <div class="card">
            <div class="card-body">
            <form action="adminaddprogramsukm" method="post" enctype="multipart/form-data">
              @csrf 
              <div class="mb-3">
                  <label for="judul">Judul</label>
                  <input type="text" name="judul" class="form-control" id="judul" required>
              </div>
              <div class="mb-3">
                  <label for="narasi">Deskripsi</label>
                  <input type="text" name="narasi" class="form-control" id="narasi" required>
              </div>
              <div class="mb-3">
                  <label for="image">Gambar: </label>
                  <div class="input-group">
                      <input type="file" class="form-control" id="image" name="image">
                  </div>
              </div>
              <div class="mb-3">
                  <label for="link">Link</label>
                  <input type="text" name="link" class="form-control" id="link" required>
              </div>
              <div class="mb-3">
                  <button class="btn btn-primary" type="submit">Upload</button>
              </div>
          </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection