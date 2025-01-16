@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Edit Previous Student Association </h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="/adminedithmif1/{{$himpunan2->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                              <label for="judul2">Judul</label>
                              <input type="text" name="judul2" class="form-control" value="{{$himpunan2->judul2}}" required>
                            </div>

                            <div class="mb-3 d-flex align-items-start">
                                <img src="{{ asset('storage/image/' . $himpunan2->image2) }}" class="img-thumbnail rounded-start border-0 me-3" alt="..." style="width: 150px;">
                                <div class="flex-grow-1">
                                    <label for="image2" class="form-label">Choose an image to upload:</label>
                                    <div class="input-group">
                                    <input type="file" class="form-control" id="image2" name="image2">
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