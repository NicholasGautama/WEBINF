@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Tambah Achievement</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="/adminprestasi/{{$prestasi->id}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="tahun">Tahun</label>
                                <input type="year" name="tahun" class="form-control" id="tahun" value="{{$prestasi->tahun}}"required>
                            </div>
                            <div class="mb-3">
                                <label for="nama_mahasiswa">Nama Mahasiswa</label>
                                <input type="text" name="nama_mahasiswa" class="form-control" id="nama_mahasiswa" value="{{$prestasi->nama_mahasiswa}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="lomba_kegiatan">Lomba/Kegiatan</label>
                                <input type="text" name="lomba_kegiatan" class="form-control" id="lomba_kegiatan" value="{{$prestasi->lomba_kegiatan}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="tingkat">Tingkat</label>
                                <select name="tingkat" id="tingkat" class="form-control" required>
                                    <option value="{{ $prestasi->tingkat }}">{{ $prestasi->tingkat }}</option>
                                    @if($prestasi->tingkat == 'Internasional')
                                        <option value="Nasional">Nasional</option>
                                        <option value="Regional">Regional</option>
                                    @elseif($prestasi->tingkat == 'Nasional')
                                        <option value="Internasional">Internasional</option>
                                        <option value="Regional">Regional</option>
                                    @else
                                        <option value="Internasional">Internasional</option>
                                        <option value="Nasional">Nasional</option>
                                    @endif
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="prestasi">Prestasi</label>
                                <input type="text" name="prestasi" class="form-control" id="prestasi" value="{{$prestasi->prestasi}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" id="keterangan" value="{{$prestasi->keterangan}}">
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