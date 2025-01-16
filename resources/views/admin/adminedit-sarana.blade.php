@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Edit sarana </h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="/admineditsarana/{{$sarana->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="fasilitas" class="form-label">Fasilitas</label>
                                <input type="text" class="form-control" name="fasilitas" value="{{$sarana->fasilitas}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="penjelasan" class="form-label">Penjelasan</label>
                                <textarea class="form-control" name="penjelasan" rows="3">{{ $sarana->penjelasan }}</textarea>
                            </div>

                            <div class="mb-3 d-flex align-items-start">
                                <img src="{{ asset('storage/Sarana/' . $sarana->image) }}" class="img-thumbnail rounded-start border-0 me-3" alt="..." style="width: 150px;">
                                <div class="flex-grow-1">
                                    <label for="image" class="form-label">Choose an image to upload:</label>
                                    <div class="input-group">
                                    <input type="file" class="form-control" id="image" name="image">
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