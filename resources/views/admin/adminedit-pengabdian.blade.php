@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Edit Community Dedication</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
          <div class="row">
            <div class="card">
              <div class="card-body">
                <form action="/adminpengabdian/{{$pengabdian->id}}" method="post">
                  @csrf
                  @method('PUT')
                  <div class="mb-3">
                      <label for="nama" class="form-label">Nama Dosen</label>
                      <textarea class="form-control" name="nama" rows="3">{{ $pengabdian->nama }}</textarea>
                  </div>

                  <div class="mb-3">
                      <label for="nidn" class="form-label">NIDN</label>
                      <textarea class="form-control" name="nidn" rows="3">{{ $pengabdian->nidn }}</textarea>
                  </div>

                  <div class="mb-3">
                      <label for="namakegiatan">Kegiatan PKM</label>
                      <input type="text" name="namakegiatan" class="form-control" id="namakegiatan" value="{{$pengabdian->namakegiatan}}"required>
                  </div>
                  <div class="mb-3">
                      <label for="keterangan">Keterangan</label>
                      <select name="keterangan" id="keterangan" class="form-control" required>
                          <option value="{{$pengabdian->keterangan}}">{{$pengabdian->keterangan}}</option>
                          @if($pengabdian->keterangan == 'Internal')
                              <option value="LLDIKTI">LLDIKTI</option>
                          @else
                              <option value="Internal">Internal</option>
                          @endif   
                      </select>
                  </div>
                  <div class="mb-3">
                      <button class="btn btn-success" type="submit">Save</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
@endsection