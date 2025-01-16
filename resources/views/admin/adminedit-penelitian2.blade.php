@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Update Research Grants DIKTI</h3>
    </div>
    <div class="bootstrap-table bootstrap4 m-5">
      <div class="row">
        <div class="card">
          <div class="card-body">
            <form action="/adminresearch2/{{$penelitian->id}}" method="post">
              @csrf
              @method('put')
                <div class="mb-3">
                    <label for="tahun">Tahun</label>
                    <input type="number" name="tahun" class="form-control" id="tahun" value="{{$penelitian->tahun}}" required>
                </div>
                <div class="mb-3">
                    <label for="skema">Skema</label>
                    <input type="text" name="skema" class="form-control" id="skema" value="{{$penelitian->skema}}" required>
                </div>
                <div class="mb-3">
                    <label for="judul_penelitian">Judul Penelitian</label>
                    <input type="text" name="judul_penelitian" class="form-control" id="judul_penelitian" value="{{$penelitian->judul_penelitian}}" required>
                </div>
                <div class="mb-3">
                    <label for="peneliti">Nama Peneliti</label>
                    <input type="text" name="peneliti" class="form-control" id="peneliti" value="{{$penelitian->peneliti}}" required>
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