@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Edit Mata Kuliah Elektif</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="/adminmkelektif/{{$mkelektif->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="mb-3">
                                <label for="kurikulum">Kurikulum</label>
                                <select name="kurikulum" id="kurikulum" class="form-control" required>
                                    <option value="{{$mkelektif->kurikulum}}">{{$mkelektif->kurikulum}}</option>
                                    @if($mkelektif->kurikulum == '2018')
                                        <option value="merdeka">Kurikulum Merdeka</option>
                                    @else
                                        <option value="2018">Kurikulum 2018</option>
                                    @endif   
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="kodemk">Kode MK</label>
                                <input type="text" name="kodemk" class="form-control" value="{{$mkelektif->kodemk}}" >
                            </div>
                            <div class="mb-3">
                                <label for="mk">Mata Kuliah</label>
                                <input type="text" name="mk" class="form-control" value="{{$mkelektif->mk}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="sksteori">Jumlah SKS Teori</label>
                                <input type="number" name="sksteori" class="form-control" value="{{$mkelektif->sksteori}}">
                            </div>
                            <div class="mb-3">
                                <label for="skspraktek">Jumlah SKS Praktek</label>
                                <input type="number" name="skspraktek" class="form-control" value="{{$mkelektif->skspraktek}}">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsimk">Deskripsi MK</label>
                                @if($mkelektif->deskripsimk)
                                    <a href="{{ asset('storage/ModuleHandbook/' . $mkelektif->deskripsimk) }}" class="btn" target="_blank">{{ basename($mkelektif->deskripsimk) }}</a>
                                @else
                                    <p>No file uploaded</p>
                                @endif
                                <input type="file" name="deskripsimk" class="form-control" value="{{$mkelektif->deskripsimk}}" accept=".pdf">
								<small class="form-text text-muted">Accepted file types: PDF. Max size: 5MB.</small>
                            </div>
                            <div class="mb-3">
                                <label for="prasyarat">Prasyarat</label>
                                <input type="text" name="prasyarat" class="form-control" value="{{$mkelektif->prasyarat}}">
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