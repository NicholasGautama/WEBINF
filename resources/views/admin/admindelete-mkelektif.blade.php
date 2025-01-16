@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Delete Mata Kuliah Elektif</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
          <div class="row">
            <div class="card">
              <div class="card-body">
                    <div class="mb-3">
                        <h3> Apakah Anda yakin ingin menghapus file berikut :</h3>
                    </div>
                    <div class="mb-3">
                        <label for="kurikulum">Kurikulum       : {{$mkelektif->kurikulum}}</label>
                    </div>
                    <div class="mb-3">
                    <label for="kodemk">Kode MK       : {{$mkelektif->kodemk}}</label>
                    </div>
                    <div class="mb-3">
                    <label for="mk">Mata Kuliah      : {{$mkelektif->mk}}</label>
                    </div>
                    <div class="mb-3">
                    <label for="sksteori">SKS Teori       : {{$mkelektif->sksteori}}</label>
                    </div>
                    <div class="mb-3">
                    <label for="skspraktek">SKS Praktek       : {{$mkelektif->skspraktek}}</label>
                    </div class="mb-3">
                    <div>
                    <label for="deskripsimk">Deskripsi MK       : 
                      @if($mkelektif->deskripsimk)
                          <a href="{{ asset('storage/ModuleHandbook/' . $mkelektif->deskripsimk) }}" class="btn" target="_blank">{{ basename($mkelektif->deskripsimk) }}</a>
                      @else
                          <p>No file uploaded</p>
                      @endif
                    </label>
                    </div>
                    <div class="mb-3" >
                        <form style="display: inline-block" action="/admindelete-mkelektif/{{$mkelektif->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        <a class="btn btn-primary" href="{{ url('adminkurikulum') }}">Cancel</a>
                    </div>
              </div>
            </div>
          </div>
        </div>
    
@endsection