@extends('layouts.app1')

@section('content')
  <div class="container-fluid my-5">
      <h3 class="text-center" style="font-size: 50px">Add Announcement</h3>
  </div>
      <div class="bootstrap-table bootstrap4 m-5">
          <div class="row">
              <div class="card">
                  <div class="card-body">
                      <form action="adminaddannouncement" method="post">
                          @csrf 
                          <div class="mb-3">
                              <label for="judul">Judul announcement</label>
                              <input type="text" name="judul" class="form-control" id="judul" required>
                          </div>
                          <div class="mb-3">
                              <label for="tanggal" class="form-label">Tanggal</label>
                              <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                          </div>
                          <div class="mb-3">
                              <label for="isi" class="form-label">Isi Pengumuman</label>
                              <textarea class="form-control" id="isi" rows="3" name="isi"></textarea>
                          </div>
                          <div class="mb-3">
                              <label for="keterangan" class="form-label">Keterangan Tambahan</label>
                              <textarea class="form-control" id="keterangan" rows="3" name="keterangan"></textarea>
                          </div>
                          <div class="mb-3">
                              <label for="tautan" class="form-label">Tautan</label>
                              <input type="text" class="form-control" id="tautan" name="tautan" required>
                          </div>
                          <div class="mb-3">
                              <button class="btn btn-success" type="submit">Save</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>   
@endsection