@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Update Internal Research</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
          <div class="row">
            <div class="card">
              <div class="card-body">
                <form action="/adminresearch/{{$research->id}}" method="post">
                  @csrf
                  @method('PUT')
                    <div class="mb-3">
                        <label for="tahun">Tahun Penelitian</label>
                        <input type="year" name="tahun" class="form-control" id="name" value="{{$research->tahun}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="judulpenelitian">Judul Penelitian</label>
                        <input type="text" name="judul_penelitian" class="form-control" id="judul_penelitian" value="{{$research->judul_penelitian}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="namapeneliti">Nama Peneliti</label>
                        <input type="text" name="peneliti" class="form-control" id="peneliti" value="{{$research->peneliti}}" required>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    
        @endsection