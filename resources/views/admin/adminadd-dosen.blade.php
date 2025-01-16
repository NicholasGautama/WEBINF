@extends('layouts.app1')

@section('content')
  <!-- End Navigation -->
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Add Lecturer & Staff</h3>
    </div>
    <div class="bootstrap-table bootstrap4 m-5 mb-2">
        <div class="row">
            <div class="card">
                <div class="card-body">

                    <h5>Keterangan:</h5>
                    <ul>
                        <li>Pastikan seluruh bagian dalam form terisi dengan benar.</li>
                        <li>Apabila ingin mengosongkan isi pada bagian tertentu dapat mengisinya dengan "-".</li>
                        <li>Pada bagian Mata Kuliah Anda dapat memberikan * pada awal setiap mata kuliah. Contoh: *IF231 - Intro to Internet Technology.</li>
                        <li>Format gambar yang dapat digunakan adalah JPEG/PNG dengan resolusi maksimal 1728 x 2040 px. </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="adminadddosen" method="post" enctype="multipart/form-data">
                            @csrf 
                            <div class="mb-3">
                              <label for="nama"><b>Nama Lengkap</b></label>
                              <input type="text" name="nama" class="form-control" id="nama" required>
                            </div>
                            <div class="mb-3">
                              <label for="kontak"><b>Kontak</b></label>
                              <input type="text" name="kontak" class="form-control" id="kontak" required>
                            </div>
                            <div class="mb-3">
                              <label for="matkul"><b>Mata Kuliah yang Diampu</b></label>
                              <textarea class="form-control" id="matkul" rows="3" name="matkul"></textarea>
                            </div>
							<div class="mb-3">
                              <label for="research"><b>Research</b></label>
                              <textarea class="form-control" id="research" rows="10" name="research"></textarea>
                            </div>
                            <div class="mb-3">
                              <label for="nidn"><b>NIDN Dosen</b></label>
                              <input type="text" name="nidn" class="form-control" id="nidn" required>
                            </div>
                            <div class="mb-3">
                              <label for="fakultas"><b>Fakultas</b></label>
                              <select name="fakultas" class="form-control" id="fakultas" required>
                                <option value="" disabled selected>Pilih Fakultas</option>
                                <option value="Teknik & Informatika">Teknik & Informatika</option>
                                <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                                <option value="Seni Rupa & Design">Seni Rupa & Design</option>
                                <option value="Bisnis & Perhotelan">Bisnis & Perhotelan</option>
                              </select>
                            </div>
                            <div class="mb-3">
                              <label for="prodi"><b>Program Studi</b></label>
                              <select name="prodi" class="form-control" id="prodi" required>
                                <option value="" disabled selected>Pilih Program Studi</option>
                                <option value="Informatika">Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknik Komputer">Teknik Komputer</option>
                                <option value="Teknik Fisika">Teknik Fisika</option>
                                <option value="Teknik Elektro">Teknik Elektro</option>
                                <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                                <option value="Jurnalistik">Jurnalistik</option>
                                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                                <option value="Arsitektur">Arsitektur</option>
                                <option value="Film & Animasi">Film & Animasi</option>
                                <option value="Manajemen">Manajemen</option>
                                <option value="Akuntansi">Akuntansi</option>
                                <option value="Perhotelan">Perhotelan</option>
                              </select>
                            </div>
                            <div class="mb-3">
                                <label for="sinta"><b>ID SINTA</b></label>
                                <input type="text" name="sinta" class="form-control" id="sinta" required>
                            </div>
                            <div class="mb-3">
                                <label for="tautan_sinta"><b>Tautan Sinta</b></label>
                                <input type="text" name="tautan_sinta" class="form-control" id="tautan_sinta" required>
                            </div>
                            <div class="mb-3">
                                <label for="scopus"><b>Scopus</b></label>
                                <input type="text" name="scopus" class="form-control" id="scopus" required>
                            </div>
                            <div class="mb-3">
                                <label for="tautan_scopus"><b>Tautan Scopus</b></label>
                                <input type="text" name="tautan_scopus" class="form-control" id="tautan_scopus" required>
                            </div>
                            
                            <div class="mb-3">
								<label for="staff_handbook"><b>Staff Handbook</b></label>
								<input type="file" name="staff_handbook" class="form-control" id="staff_handbook" accept=".pdf" required>
																<small class="form-text text-muted">Accepted file types: PDF. Max size: 5MB.</small>
							</div>

                            <div class="mb-3">
                                <label for="image"><b>Choose an image to upload:</b></label>
                                <div class="input-group">
                                  <input type="file" class="form-control" id="image" name="image">
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

    @endsection