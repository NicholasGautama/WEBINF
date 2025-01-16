@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Edit Mata Kuliah Kurikulum Merdeka</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="/adminkurikulum/{{$merdeka->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="mb-3">
                                <label for="semester">Semester</label>
                                <input type="number" name="semester" class="form-control" value="{{$merdeka->semester}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="kodemk">Kode MK</label>
                                <input type="text" name="kodemk" class="form-control" value="{{$merdeka->kodemk}}" >
                            </div>
                            <div class="mb-3">
                                <label for="mk">Mata Kuliah</label>
                                <input type="text" name="mk" class="form-control" value="{{$merdeka->mk}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="sksteori">Jumlah SKS Teori</label>
                                <input type="number" name="sksteori" class="form-control" value="{{$merdeka->sksteori}}">
                            </div>
                            <div class="mb-3">
                                <label for="skspraktek">Jumlah SKS Praktek</label>
                                <input type="number" name="skspraktek" class="form-control" value="{{$merdeka->skspraktek}}">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsimk">Deskripsi MK</label>
                                @if($merdeka->deskripsimk)
                                    <a href="{{ asset('storage/ModuleHandbook/' . $merdeka->deskripsimk) }}" class="btn" target="_blank">{{ basename($merdeka->deskripsimk) }}</a>
                                @else
                                    <p>No file uploaded</p>
                                @endif
                                <input type="file" name="deskripsimk" class="form-control" accept=".pdf">
								<small class="form-text text-muted">Accepted file types: PDF. Max size: 5MB.</small>
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