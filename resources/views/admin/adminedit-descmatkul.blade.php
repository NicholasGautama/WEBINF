@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Update Subject Description</h3>
    </div>
	<div class="bootstrap-table bootstrap4 m-5 mb-2">
        <div class="row">
            <div class="card">
                <div class="card-body">

                    <h5>Keterangan:</h5>
                    <ul>
                        <li>Pada bagian subject anda dapat menggunakan "//" untuk membuat poin baru.</li>
                    </ul>
                    <p>Mohon untuk mengisi seluruh kolom dengan sesuai. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="bootstrap-table bootstrap4 m-5">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="/adminmatkul/{{$matkuldesc->id}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="judul">Title</label>
                            <input type="text" name="judul" class="form-control" id="judul" value="{{$matkuldesc->judul}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="isi">Description</label>
                            <input type="text" name="isi" class="form-control" id="isi" value="{{$matkuldesc->isi}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="matkul">Subject</label>
                            <textarea name="matkul" class="form-control" id="matkul" rows="10" required>{{$matkuldesc->matkul}}</textarea>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
