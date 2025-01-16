@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Tambah  Graduate Profile</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="adminaddpl" method="post">
                            @csrf 
                            <div class="mb-3">
                                <label for="noppm">No</label>
                                <input type="text" name="noppm" class="form-control" id="noppm" required>
                            </div>
                            <div class="mb-3">
                                <label for="namappm">PPM</label>
                                <input type="text" name="namappm" class="form-control" id="namappm" required>
                            </div>
                            <div class="mb-3">
                                <label for="descppm">Description</label>
                                <input type="text" name="descppm" class="form-control" id="descppm" required>
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