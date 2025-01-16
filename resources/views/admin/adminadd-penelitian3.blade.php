@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px"> Add Independent Research </h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="adminresearch3" method="post">
                            <div class="mb-3">
                                <label for="tahun">Tahun</label>
                                <input type="year" name="tahun" class="form-control" id="tahun" required>
                            </div>
                            <div class="mb-3">
                                <label for="judul">Judul Penelitian</label>
                                <input type="text" name="judul" class="form-control" id="judul" required>
                            </div>
                            <div class="mb-3">
                                <label for="peneliti">Nama Peneliti</label>
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