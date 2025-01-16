@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Delete Brand Innovation</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
          <div class="row">
            <div class="card">
              <div class="card-body">
                    <div class="mb-3">
                        <h3> Apakah Anda yakin ingin menghapus file berikut :</h3>
                    </div>
                    <div class="mb-3">
                        <label for="semester">Tahun       : {{$inovasi->semester}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="tahun">Tahun       : {{$inovasi->tahun}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="programstud">Program Studi      : {{$inovasi->programstud}}</label>
                    </div>
                    <div class="mb-3">
                        <label>Penulis  ( Nama Penulis | NIDN )</label><br>
                        @if($inovasi->namap1 != '-')
                            <label for="namap1">1. {{$inovasi->namap1}} | {{$inovasi->nidn1}}</label>
                            <br>
                        @endif
                        @if($inovasi->namap2 != '-')
                            <label for="namap2">2. {{$inovasi->namap2}} | {{$inovasi->nidn2}}</label>
                            <br>
                        @endif
                        @if($inovasi->namap3 != '-')
                            <label for="namap3">3. {{$inovasi->namap3}} | {{$inovasi->nidn3}}</label>
                            <br>
                        @endif
                        @if($inovasi->namap4 != '-')
                            <label for="namap4">4. {{$inovasi->namap4}} | {{$inovasi->nidn4}}</label>
                            <br>
                        @endif
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
                    <div class="mb-3">
                        <label for="tanggal">Tanggal    : {{$inovasi->tanggal}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="hibah">Nomor HKI    : {{$inovasi->hibah}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="tautan">Nomor HKI    : {{$inovasi->tautan}}</label>
                    </div>
                    <div class="mb-3" >
                        <form style="display: inline-block" action="/admindelete-inovasi2/{{$inovasi->id}}" method="post">
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