@extends('layouts.app1')

@section('content')


    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Edit Berita </h3>
    </div>
    <div class="bootstrap-table bootstrap4 m-5 mb-2">
        <div class="row">
            <div class="card">
                <div class="card-body">

                    <h5>Keterangan:</h5>
                    <ul>
                        <li>Anda dapat menggunakan "//" untuk membuat paragraf baru.</li>
                        <li>Untuk membuat sub-judul anda dapat mengapit kalimat menggunakan "** **"". </li>
                        <li>Format gambar yang dapat digunakan adalah: JPEG/PNG. </li>
                    </ul>
                    <p>Mohon untuk mengisi seluruh kolom dengan sesuai. </p>
                </div>
            </div>
        </div>
    </div>
        <div class="bootstrap-table bootstrap4 m-5 mt-3">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="/admineditberita/{{$berita->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="judul" class="form-label"><b>Judul</b></label>
                                <input type="text" class="form-control" name="judul" value="{{$berita->judul}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="penulis" class="form-label"><b>Penulis</b></label>
                                <input type="text" class="form-control" name="penulis" value="{{$berita->penulis}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="tanggal" class="form-label"><b>Tanggal</b></label>
                                <input type="date" class="form-control" name="tanggal" value="{{$berita->tanggal}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="kategori" class="form-label"><b>Kategori</b></label>
                                <input type="text" class="form-control" name="kategori" value="{{$berita->kategori}}" required>
                            </div>

                            <div class="mb-3 d-flex align-items-start">
                                <img src="{{ asset('storage/Berita/'.$berita->image) }}" class="img-thumbnail rounded-start border-0 me-3" alt="..." style="width: 150px;">
                                <div class="flex-grow-1">
                                    <label for="image" class="form-label"><b>Choose an image to upload:</b></label>
                                    <div class="input-group">
                                    <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="kota" class="form-label"><b>Kota</b></label>
                                <input type="text" class="form-control" name="kota" value="{{$berita->kota}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="narasi" class="form-label"><b>Narasi Berita</b></label>
                                <textarea class="form-control" name="narasi" rows="3">{{ $berita->narasi }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="konten" class="form-label"><b>Isi Berita</b></label>
                                <textarea class="form-control" name="konten" rows="20">{{ $berita->konten }}</textarea>
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