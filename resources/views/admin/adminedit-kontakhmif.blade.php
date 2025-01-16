@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Edit Contact HMIF</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="/admineditkontakhmif/{{$himpunan2->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                              <label for="kontak1">Akun Instagram</label>
                              <input type="text" name="kontak1" class="form-control" value="{{$himpunan2->kontak1}}">
                            </div>
                            <div class="mb-3">
                                <label for="tautan1">Tautan Instagram</label>
                                <input type="text" name="tautan1" class="form-control" value="{{$himpunan2->tautan1}}">
                            </div>
                            <div class="mb-3">
                              <label for="kontak2">Akun Twitter</label>
                              <input type="text" name="kontak2" class="form-control" value="{{$himpunan2->kontak2}}">
                            </div>
                            <div class="mb-3">
                                <label for="tautan2">Tautan Twitter</label>
                                <input type="text" name="tautan2" class="form-control" value="{{$himpunan2->tautan2}}">
                            </div>
                            <div class="mb-3">
                              <label for="kontak3">Akun Facebook</label>
                              <input type="text" name="kontak3" class="form-control" value="{{$himpunan2->kontak3}}">
                            </div>
                            <div class="mb-3">
                                <label for="tautan3">Tautan Facebook</label>
                                <input type="text" name="tautan3" class="form-control" value="{{$himpunan2->tautan3}}">
                            </div>
                            <div class="mb-3">
                              <label for="kontak4">Akun Line</label>
                              <input type="text" name="kontak4" class="form-control" value="{{$himpunan2->kontak4}}">
                            </div>
                            <div class="mb-3">
                                <label for="tautan4">Tautan Line</label>
                                <input type="text" name="tautan4" class="form-control" value="{{$himpunan2->tautan4}}">
                            </div>
                            <div class="mb-3">
                              <label for="kontak5">Website</label>
                              <input type="text" name="kontak5" class="form-control" value="{{$himpunan2->kontak5}}">
                            </div>
                            <div class="mb-3">
                                <label for="tautan5">Tautan Website</label>
                                <input type="text" name="tautan5" class="form-control" value="{{$himpunan2->tautan5}}">
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