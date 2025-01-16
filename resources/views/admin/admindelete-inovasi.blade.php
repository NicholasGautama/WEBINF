@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Delete Copyright Innovation</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
          <div class="row">
            <div class="card">
              <div class="card-body">
                    <div class="mb-3">
                        <h3> Apakah Anda yakin ingin menghapus file berikut :</h3>
                    </div>
                    <div class="mb-3">
                        <label for="tahun">Tahun       : {{$inovasi->tahun}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="namap">Nama Penulis     : {{$inovasi->namap}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="judul_penelitian">Judul Penelitian   : {{$inovasi->judul_penelitian}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="nodaftar">Nomor Pendaftaran    : {{$inovasi->nodaftar}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="nohki">Nomor HKI    : {{$inovasi->nohki}}</label>
                    </div>
                    <div class="mb-3" >
                        <form style="display: inline-block" action="/admindelete-inovasi/{{$inovasi->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        <a class="btn btn-primary" href="{{ url('admininovasi') }}">Cancel</a>
                    </div>
              </div>
            </div>
          </div>
        </div>
@endsection