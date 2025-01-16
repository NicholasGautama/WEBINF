@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Tambah Berita</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="adminaddberita" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul" required>
                            </div>

                            <div class="mb-3">
                                <label for="penulis" class="form-label">Penulis</label>
                                <input type="text" class="form-control" id="penulis" name="penulis" required>
                            </div>

                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                            </div>

                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <input type="text" class="form-control" id="kategori" name="kategori" required>
                            </div>

                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="image" name="image" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="kota" class="form-label">Kota</label>
                                <input type="text" class="form-control" id="kota" name="kota" required>
                            </div>

                            <div class="mb-3">
                                <label for="narasi" class="form-label">Narasi Berita</label>
                                <textarea class="form-control" id="narasi" rows="3" name="narasi"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="konten" class="form-label">Isi Berita</label>
                                <textarea class="form-control" id="konten" rows="3" name="konten"></textarea>
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit" id="sumbit">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
      document.getElementById('submit').addEventListener('click', function(event) {
        var image = document.getElementById('image');
        if (image.value == '') {
          event.preventDefault();
          alert('Please insert image.');
        }
      });
    </script>
    </body>

@endsection