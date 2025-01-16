@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Delete Community Dedication</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
          <div class="row">
            <div class="card">
              <div class="card-body">
                    <div class="mb-3">
                        <h3> Apakah Anda yakin ingin menghapus file berikut :</h3>
                    </div>
                    <div class="mb-3">
                        <label for="tahun">Tahun       : {{$prestasi->tahun}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="nama_mahasiswa">Nama Mahasiswa     : {{$prestasi->nama_mahasiswa}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="lomba_kegiatan">Lomba/Kegiatan   : {{$prestasi->lomba_kegiatan}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="tingkat">Tingkat    : {{$prestasi->tingkat}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="prestasi">Prestasi   : {{$prestasi->prestasi}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="ketreangan">Keterangan  : {{$prestasi->keterangan}}</label>
                    </div>
                    <div class="mb-3" >
                        <form style="display: inline-block" action="/admindelete-prestasi/{{$prestasi->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        <a class="btn btn-primary" href="{{ url('adminprestasi') }}">Cancel</a>
                    </div>
              </div>
            </div>
          </div>
        </div>
    
@endsection