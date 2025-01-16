@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Add Facilities</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="adminaddsarana" method="post" enctype="multipart/form-data">
                            @csrf 
                            <div class="mb-3">
                              <label for="fasilitas">Fasilitas</label>
                              <input type="text" name="fasilitas" class="form-control" id="fasilitas" required>
                            </div>
                            <div class="mb-3">
                                <label for="penjelasan">Deskripsi</label>
                                <input type="text" name="penjelasan" class="form-control" id="penjelasan" required>
                            </div>
                            <div class="mb-3">
                                <label for="image">Choose an image to upload:</label>
                                <div class="input-group">
                                <input type="file" class="form-control" id="image" name="image">
                              </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection