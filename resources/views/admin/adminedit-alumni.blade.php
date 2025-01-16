@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Update Alumni Association</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="/adminalumni/{{$alumni->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" class="form-control" id="judul" value="{{$alumni->judul}}" required>
                            </div>
                            <div class="mb-3 d-flex align-items-start">
                                <img src="{{ asset('storage/Sarana/' . $alumni->gambar) }}" class="img-thumbnail rounded-start border-0 me-3" alt="..." style="width: 150px;">
                                <div class="flex-grow-1">
                                    <label for="gambar" class="form-label">Choose an image to upload:</label>
                                    <div class="input-group">
                                    <input type="file" class="form-control" id="gambar" name="gambar">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="isi">Isi</label>
                                <input type="text" name="isi" class="form-control" id="isi" value="{{$alumni->isi}}" required>
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