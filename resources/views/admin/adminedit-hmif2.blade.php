@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Edit Current Student Association </h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="/adminedithmif2/{{$himpunan2->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                              <label for="judul3">Judul</label>
                              <input type="text" name="judul3" class="form-control" value="{{$himpunan2->judul3}}" required>
                            </div>

                            <div class="mb-3 d-flex align-items-start">
                                <img src="{{ asset('storage/image/' . $himpunan2->image3) }}" class="img-thumbnail rounded-start border-0 me-3" alt="..." style="width: 150px;">
                                <div class="flex-grow-1">
                                    <label for="image3" class="form-label">Choose an image to upload:</label>
                                    <div class="input-group">
                                    <input type="file" class="form-control" id="image3" name="image3">
                                    </div>
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