@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Tambah Copyright Inovation</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="/admininovasi2/{{$inovasi->id}}" method="post">
                        @csrf
                        @method('PUT') 
                            <div class="mb-3">
                                <label for="semester">Semester</label>
                                <input type="text" name="semester" class="form-control" value="{{$inovasi->semester}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="tahun">Tahun</label>
                                <input type="text" name="tahun" class="form-control"  value="{{$inovasi->tahun}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="namap1">Penulis 1</label>
                                <input type="text" name="namap1" class="form-control"  value="{{$inovasi->namap1}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="nidn1">NIDN Penulis 1</label>
                                <input type="text" name="nidn1" class="form-control"  value="{{$inovasi->nidn1}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="programstud">Program Studi</label>
                                <input type="text" name="programstud" class="form-control"  value="{{$inovasi->programstud}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="namap2">Penulis 2</label>
                                <input type="text" name="namap2" class="form-control"  value="{{$inovasi->namap2}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="nidn2">NIDN Penulis 2</label>
                                <input type="text" name="nidn2" class="form-control"  value="{{$inovasi->nidn2}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="namap3">Penulis 3</label>
                                <input type="text" name="namap3" class="form-control"  value="{{$inovasi->namap3}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="nidn3">NIDN Penulis 3</label>
                                <input type="text" name="nidn3" class="form-control"  value="{{$inovasi->nidn3}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="namap4">Penulis 4</label>
                                <input type="text" name="namap4" class="form-control"  value="{{$inovasi->namap4}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="nidn4">NIDN Penulis 4</label>
                                <input type="text" name="nidn4" class="form-control"  value="{{$inovasi->nidn4}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="judul_penelitian">Judul Penelitian</label>
                                <input type="text" name="judul_penelitian" class="form-control"  value="{{$inovasi->judul_penelitian}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="nodaftar">No Daftar</label>
                                <input type="text" name="nodaftar" class="form-control"  value="{{$inovasi->nodaftar}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="nohki">No HKI</label>
                                <input type="text" name="nohki" class="form-control"  value="{{$inovasi->nohki}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control"  value="{{$inovasi->tanggal}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="hibah">Hibah dari Kemenristekdikti (Ya/Tidak) </label>
                                <select name="hibah" id="hibah" class="form-control" required>
                                    <option value="{{$inovasi->hibah}}">{{$inovasi->hibah}}</option>
                                    @if($inovasi->hibah == 'Ya')
                                        <option value="Tidak">Tidak</option>
                                    @else
                                        <option value="Ya">Ya</option>
                                    @endif   
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="jenis">Jenis (Terdaftar/Granted)</label>
                                <select name="jenis" id="jenis" class="form-control" required>
                                    <option value="{{$inovasi->jenis}}">{{$inovasi->jenis}}</option>
                                    @if($inovasi->jenis == 'Terdaftar')
                                        <option value="Granted">Granted</option>
                                    @else
                                        <option value="Terdaftar">Terdaftar</option>
                                    @endif   
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tautan">Tautan</label>
                                <input type="text" name="tautan" class="form-control"  value="{{$inovasi->tautan}}" required>
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