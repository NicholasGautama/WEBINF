@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Tambah Mobility</h3>
    </div>
      <div class="bootstrap-table bootstrap4 m-5">
        <div class="row">
          <div class="card">
            <div class="card-body">
            <form action="adminaddmobility3" method="POST" enctype="multipart/form-data">
              @csrf 
              <div class="mb-3">
                  <label for="judul">Judul</label>
                  <input type="text" name="judul" class="form-control" id="judul" required>
              </div>
              <div class="mb-3">
                                <label for="isi" class="form-label">Isi</label>
                                <textarea class="form-control" name="isi" rows="3"></textarea>
                            </div>
                  <div class="mb-3">
              <div class="mb-3">
                  <label for="image">Gambar: </label>
                  <div class="input-group">
                      <input type="file" class="form-control" id="image" name="image">
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
    </div>
@endsection