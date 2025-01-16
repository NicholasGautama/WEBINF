@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Tambah Community Dedication</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="adminaddpengabdian" method="post">
                            @csrf 
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Dosen</label>
                                <textarea class="form-control" id="nama" rows="2" name="nama"required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="nidn" class="form-label">NIDN Dosen</label>
                                <textarea class="form-control" id="nidn" rows="1" name="nnidn"required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="namakegiatan">Kegiatan PKM</label>
                                <input type="text" name="namakegiatan" class="form-control" id="namakegiatan" required>
                            </div>
                            <div class="mb-3">
                                <label for="namakegiatan">Keterangan</label>
                                <select name="keterangan" id="keterangan" class="form-control" required>
                                    <option value="">Select One</option>
                                    <option value="Internal">Internal</option>
                                    <option value="LLDIKTI">LLDIKTI</option>
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
    </div>
@endsection