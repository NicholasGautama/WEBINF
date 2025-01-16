@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Add Research Grants DIKTI</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="adminresearch2" method="post">
                            <div class="mb-3">
                                <label for="tahun">Tahun</label>
                                <input type="year" name="tahun" class="form-control" id="tahun" required>
                            </div>
                            <div class="mb-3">
                                <label for="skema">Skema Penelitian</label>
                                <input type="text" name="skema" class="form-control" id="skema" required>
                            </div>
                            <div class="mb-3">
                                <label for="judulpenelitian">Judul Penelitian</label>
                                <input type="text" name="judul_penelitian" class="form-control" id="judul_penelitian" required>
                            </div>
                            <div class="mb-3">
                                <label for="namapeneliti">Nama Peneliti</label>
                                <input type="text" name="peneliti" class="form-control" id="peneliti" required>
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