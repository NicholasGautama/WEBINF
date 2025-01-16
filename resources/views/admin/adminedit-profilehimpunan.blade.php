@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Edit Profil Himpunan</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="/admineditprofilehimpunan/{{$himpunan->id}}" method="post">
                        @csrf
                        @method('PUT')
                            <div class="mb-3">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" class="form-control" id="judul" value="{{$himpunan->judul}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="isi">Isi</label>
                                <input type="text" name="isi"  class="form-control" id="isi" value="{{$himpunan->isi}}" required>
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