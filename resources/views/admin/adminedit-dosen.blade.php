@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Edit Lecturer & Staff</h3>
    </div>

    <div class="bootstrap-table bootstrap4 m-5 mb-2">
        <div class="row">
            <div class="card">
                <div class="card-body" style="height: 200px; overflow-y: auto;">
                    <!-- Your content for the first card goes here -->
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

    <div class="bootstrap-table bootstrap4 m-5 mt-3">
        <div class="row">
            <div class="card">
                <div class="card-body" style="height: 500px; overflow-y: auto;">
                    <!-- Your content for the second card goes here -->
                        <form action="/admindosen/{{$dosen->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                              <label for="nama"><b>Nama Lengkap</b></label>
                              <input type="text" name="nama" class="form-control" value="{{$dosen->nama}}" required>
                            </div>
                            <div class="mb-3">
                              <label for="kontak"><b>Kontak</b></label>
                              <input type="text" name="kontak" class="form-control" value="{{$dosen->kontak}}" required>
                            </div>
                            <div class="mb-3">
                              <label for="matkul"><b>Mata Kuliah yang Diampu</b></label>
                              <textarea class="form-control" name="matkul" rows="3">{{ $dosen->matkul }}</textarea>
                            </div>
							<div class="mb-3">
                              <label for="matkul"><b>Research</b></label>
                              <textarea class="form-control" name="research" rows="10">{{ $dosen->research }}</textarea>
                            </div>
                            <div class="mb-3">
                              <label for="nidn"><b>NIDN Dosen</b></label>
                              <input type="text" name="nidn" class="form-control" value="{{$dosen->nidn}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="fakultas"><b>Fakultas</b></label>
                                <select name="fakultas" class="form-control" id="fakultas" required>
                                    <option value="" disabled>Pilih Fakultas</option>
                                    <option value="Teknik & Informatika" {{ $dosen->fakultas == 'Teknik & Informatika' ? 'selected' : '' }}>Teknik & Informatika</option>
                                    <option value="Ilmu Komunikasi" {{ $dosen->fakultas == 'Ilmu Komunikasi' ? 'selected' : '' }}>Ilmu Komunikasi</option>
                                    <option value="Seni Rupa & Design" {{ $dosen->fakultas == 'Seni Rupa & Design' ? 'selected' : '' }}>Seni Rupa & Design</option>
                                    <option value="Bisnis & Perhotelan" {{ $dosen->fakultas == 'Bisnis & Perhotelan' ? 'selected' : '' }}>Bisnis & Perhotelan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="prodi"><b>Program Studi</b></label>
                                <select name="prodi" class="form-control" id="prodi" required>
                                    <option value="" disabled>Pilih Program Studi</option>
                                    <option value="Informatika" {{ $dosen->prodi == 'Informatika' ? 'selected' : '' }}>Informatika</option>
                                    <option value="Sistem Informasi" {{ $dosen->prodi == 'Sistem Informasi' ? 'selected' : '' }}>Sistem Informasi</option>
                                    <option value="Teknik Komputer" {{ $dosen->prodi == 'Teknik Komputer' ? 'selected' : '' }}>Teknik Komputer</option>
                                    <option value="Teknik Fisika" {{ $dosen->prodi == 'Teknik Fisika' ? 'selected' : '' }}>Teknik Fisika</option>
                                    <option value="Teknik Elektro" {{ $dosen->prodi == 'Teknik Elektro' ? 'selected' : '' }}>Teknik Elektro</option>
                                    <option value="Ilmu Komunikasi" {{ $dosen->prodi == 'Ilmu Komunikasi' ? 'selected' : '' }}>Ilmu Komunikasi</option>
                                    <option value="Jurnalistik" {{ $dosen->prodi == 'Jurnalistik' ? 'selected' : '' }}>Jurnalistik</option>
                                    <option value="Desain Komunikasi Visual" {{ $dosen->prodi == 'Desain Komunikasi Visual' ? 'selected' : '' }}>Desain Komunikasi Visual</option>
                                    <option value="Arsitektur" {{ $dosen->prodi == 'Arsitektur' ? 'selected' : '' }}>Arsitektur</option>
                                    <option value="Film & Animasi" {{ $dosen->prodi == 'Film & Animasi' ? 'selected' : '' }}>Film & Animasi</option>
                                    <option value="Manajemen" {{ $dosen->prodi == 'Manajemen' ? 'selected' : '' }}>Manajemen</option>
                                    <option value="Akuntansi" {{ $dosen->prodi == 'Akuntansi' ? 'selected' : '' }}>Akuntansi</option>
                                    <option value="Perhotelan" {{ $dosen->prodi == 'Perhotelan' ? 'selected' : '' }}>Perhotelan</option>
                              </select>
                            </div>
                            <div class="mb-3">
                                <label for="sinta"><b>ID SINTA</b></label>
                                <input type="text" name="sinta" class="form-control" value="{{$dosen->sinta}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="tautan"><b>Tautan Sinta</b></label>
                                <input type="text" name="tautan_sinta" class="form-control" value="{{$dosen->tautan_sinta}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="sinta"><b>Scopus</b></label>
                                <input type="text" name="scopus" class="form-control" value="{{$dosen->scopus}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="tautan"><b>Tautan Scopus</b></label>
                                <input type="text" name="tautan_scopus" class="form-control" value="{{$dosen->tautan_scopus}}" required>
                            </div>
                            <div class="mb-3">
								<label for="staff_handbook">Staff Handbook</label>
								@if ($dosen->staff_handbook)
									<a href="{{ asset('storage/StaffHandbook/' . $dosen->staff_handbook) }}" class="btn" target="_blank">
										{{ basename($dosen->staff_handbook) }}
									</a>
								@else
									<p>No file uploaded</p>
								@endif
								<input type="file" name="staff_handbook" class="form-control" accept=".pdf">
								<small class="form-text text-muted">Accepted file types: PDF. Max size: 5MB.</small>
							</div>

                            <div class="mb-3 d-flex align-items-start">
                                <img src="{{ asset('storage/Lecturer/' . $dosen->image) }}" class="img-thumbnail rounded-start border-0 me-3" alt="..." style="width: 150px;">
                                <div class="flex-grow-1">
                                    <label for="image" class="form-label"><b>Choose an image to upload:</b></label>
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
@endsection
