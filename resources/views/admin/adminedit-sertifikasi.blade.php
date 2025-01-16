@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Edit Certification</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                      <form action="/adminsertifikasi/{{$sertifikasi->id}}" method="post">
                        @csrf
                        @method('PUT')
                            <div class="mb-3">
                                <label for="sertifikasi">Sertifikasi</label>
                                <input type="text" name="sertifikasi" class="form-control" id="sertifikasi" value="{{$sertifikasi->sertifikasi}}">
                            </div>
                            <div class="mb-3">
                                <label for="penjelasan">Penjelasan</label>
                                <input type="text" name="penjelasan" class="form-control" id="penjelasan" value="{{$sertifikasi->penjelasan}}" >
                            </div>
                            <div class="mb-3">
                                <label for="spesialisasi">Spesialisasi</label>
                                <input type="text" name="spesialisasi" class="form-control" id="spesialisasi" value="{{ nl2br($sertifikasi->spesialisasi) }}" >
                            </div>
                            <div class="mb-3">
                                <label for="kontak">Kontak</label>
                                <input type="text" name="kontak" class="form-control" id="kontak" value="{{ nl2br($sertifikasi->kontak) }}" >
                            </div>
                            <div class="mb-3">
                                <label for="tautani">Tautan Kontak</label>
                                <input type="text" name="tautan" class="form-control" id="tautan" value="{{ nl2br($sertifikasi->tautan) }}" >
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