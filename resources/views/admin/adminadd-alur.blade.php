@extends('layouts.app1')

@section('content')
  <!-- End Navigation -->
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Tambah Alur Kurikulum</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="adminaddalur" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="kurikulum">Kurikulum</label>
                                <select name="kurikulum" id="kurikulum" class="form-control" required>
                                    <option value="">Select One</option>
                                    <option value="2018">Kurikulum 2018</option>
                                    <option value="merdeka">Kurikulum Merdeka</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" class="form-control" id="judul" required>
                            </div>
                            <div class="mb-3">
                                <label for="image">Choose an image to upload:</label>
                                <div class="input-group">
                                <input type="file" class="form-control" id="image" name="image">
                              </div>
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