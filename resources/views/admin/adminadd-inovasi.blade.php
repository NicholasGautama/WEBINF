@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Add Copyright Innovation</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="adminaddinovasi" method="post">
                            @csrf 
                            <div class="mb-3">
                                <label for="tahun">Tahun</label>
                                <input type="year" name="tahun" class="form-control" id="tahun" required>
                            </div>
                            <div class="mb-3">
                                <label for="namap">Nama Penulis</label>
                                <input type="text" name="namap" class="form-control" id="namap" required>
                            </div>
                            <div class="mb-3">
                                <label for="judul_penelitian">Judul Penelitian</label>
                                <input type="text" name="judul_penelitian" class="form-control" id="judul_penelitian" required>
                            </div>
                            <div class="mb-3">
                                <label for="nodaftar">Nomor Pendaftaran</label>
                                <input type="number" name="nodaftar" class="form-control" id="nodaftar" required>
                            </div>
                            <div class="mb-3">
                                <label for="nohki">No HKI</label>
                                <input type="text" name="nohki" class="form-control" id="nohki" required>
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