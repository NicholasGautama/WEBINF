@extends('layouts.app1')

@section('content')
  <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Tambah Profile Himpunan</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="adminaddprofilehimpunan" method="post">
                            <div class="mb-3">
                                <label for="judul">Judul</label>
                                <input type="year" name="judul" class="form-control" id="judul" required>
                            </div>
                            <div class="mb-3">
                                <label for="isi">Isi</label>
                                <input type="text" name="isi" class="form-control" id="isi" required>
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