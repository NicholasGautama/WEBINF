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
                        <label for="nomor">Nomor        : {{$pengabdian->no}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="nama">Tahun Penelitian     : {{$pengabdian->nama}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="nidn">Judul Penelitian   : {{$pengabdian->nidn}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="namakegiatan">Nama Peneliti     : {{$pengabdian->namakegiatan}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="namapeneliti">Nama Peneliti     : {{$pengabdian->keterangan}}</label>
                    </div>
                    <div class="mb-3" >
                        <form style="display: inline-block" action="/admindelete-pengabdian/{{$pengabdian->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        <a class="btn btn-primary" href="{{ url('adminpengabdian') }}">Cancel</a>
                    </div>
              </div>
            </div>
          </div>
        </div>
    
@endsection