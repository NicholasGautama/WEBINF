@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Delete Research Grants DIKTI</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
          <div class="row">
            <div class="card">
              <div class="card-body">
                <!-- {{$penelitian}} -->
                    <div class="mb-3">
                        <h3> Apakah Anda yakin ingin menghapus file berikut :</h3>
                    </div>
                    <div class="mb-3">
                        <label for="tahun">Tahun        : {{$penelitian->tahun}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="skema">Skema    : {{$penelitian->skema}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="judulpenelitian">Judul Penelitian   : {{$penelitian->judul_penelitian}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="namapeneliti">Nama Peneliti     : {{$penelitian->peneliti}}</label>
                    </div>
                    <div class="mb-3" >
                        <form style="display: inline-block" action="/admindelete-penelitian2/{{$penelitian->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        <a class="btn btn-primary" href="{{ url('adminresearch') }}">Cancel</a>
                    </div>
              </div>
            </div>
          </div>
        </div>
    
@endsection