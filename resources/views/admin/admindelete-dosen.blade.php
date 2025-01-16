@extends('layouts.app1')

@section('content')
    <div class="bootstrap-table bootstrap4 m-5">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                        <img src="{{ asset('storage/Lecturer/' . $dosen->image) }}" class="img-thumbnail rounded-start border-0 me-3" alt="..." style="width: 300px;">
                        <div>
                            <div class="mb-3">
                                <h3>Apakah Anda yakin ingin menghapus data berikut :</h3>
                            </div>
                            <div class="mb-3">
                                <label for="nama">Nama      : {{$dosen->nama}}</label>
                            </div>
                            <div class="mb-3">
                              <label for="kontak">Kontak  :  {{$dosen->kontak}}</label>
                            </div>
                            <div class="mb-3">
                              <label for="matkul">Mata Kuliah yang Diampu :  {{$dosen->matkul}}</label>
                            </div>
                            <div class="mb-3">
                              <label for="nidn">NIDN Dosen  :  {{$dosen->nidn}}</label>
                            </div>
                            <div class="mb-3">
                                <label for="fakultas">Fakultas     : {{$dosen->fakultas}}</label>
                            </div>
                            <div class="mb-3">
                                <label for="prodi">Program Studi  : {{$dosen->prodi}}</label>
                            </div>
                            <div class="mb-3">
                                <label for="sinta">ID SINTA    : {{$dosen->sinta}}</label>
                            </div>
							<div class="mb-3">
                                <label for="sinta">Scopus   : {{$dosen->scopus}}</label>
                            </div>
                            <div class="mb-3">
								<label for="staff_handbook">Staff Handbook:</label>
								@if (!empty($dosen->staff_handbook))
									<a href="{{ asset('storage/StaffHandbook/' . $dosen->staff_handbook) }}" target="_blank" style="color:black">
										{{ $dosen->staff_handbook }}
									</a>
								@else
									<span>No staff handbook uploaded</span>
								@endif
							</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <form style="display: inline-block" action="/admindelete-dosen/{{$dosen->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        <a class="btn btn-primary" href="{{ url('admindosen') }}">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection