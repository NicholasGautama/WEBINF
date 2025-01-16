@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Delete Mata Kuliah</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
          <div class="row">
            <div class="card">
              <div class="card-body">
                    <div class="mb-3">
                        <h3> Apakah Anda yakin ingin menghapus file berikut :</h3>
                    </div>
                    <div class="mb-3">
                        <label for="semester">Semester       : {{$merdeka->semester}}</label>
                    </div>
                    <div class="mb-3">
                    <label for="kodemk">Kode MK       : {{$merdeka->kodemk}}</label>
                    </div>
                    <div class="mb-3">
                    <label for="mk">Mata Kuliah      : {{$merdeka->mk}}</label>
                    </div>
                    <div class="mb-3">
                    <label for="sksteori">SKS Teori       : {{$merdeka->sksteori}}</label>
                    </div>
                    <div class="mb-3">
                    <label for="skspraktek">SKS Praktek       : {{$merdeka->skspraktek}}</label>
                    </div>
                    <div class="mb-3">
                    <label for="deskripsimk">Deskripsi MK       : 
                      @if($merdeka->deskripsimk)
                          <a href="{{ asset('storage/ModuleHandbook/' . $merdeka->deskripsimk) }}" class="btn" target="_blank">{{ basename($merdeka->deskripsimk) }}</a>
                      @else
                          <p>No file uploaded</p>
                      @endif
                    </label>
                    </div>
                    <div class="mb-3" >
                        <form style="display: inline-block" action="/admindelete-kurikulum/{{$merdeka->id}}" method="post">
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