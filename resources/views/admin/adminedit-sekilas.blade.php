@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Edit About Page</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="/adminsekilas/{{$about->id}}" method="post">
                        @csrf
                        @method('PUT')
                            <div class="mb-3">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" class="form-control" id="judul" value="{{$about->judul}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="isi1">Paragraf 1</label>
                                <input type="text" name="isi1"  class="form-control" id="isi1" value="{{$about->isi1}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="isi2">Paragraf 2</label>
                                <input type="text" name="isi2" class="form-control" id="isi2" value="{{$about->isi2}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="isi3">Paragraf 3</label>
                                <input type="text" name="isi3" class="form-control" id="isi3" value="{{$about->isi2}}" required>
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