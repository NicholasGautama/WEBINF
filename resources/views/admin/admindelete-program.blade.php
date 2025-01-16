@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Delete Program Himpunan</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
          <div class="row">
            <div class="card">
              <div class="card-body">
                    <div class="mb-3">
                        <h3> Apakah Anda yakin ingin menghapus file berikut :</h3>
                    </div>
                    <div class="mb-3">
                        <label for="judul">Judul  : {{$program->judul}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="isi">Isi  : {{$program->isi}}</label>
                    </div>
                    <div class="mb-3">
                      <label for="isi">Gambar  :</label>
                        <div class="row mt-3">
                          <div class="container-fluid">
                            <div class="row justify-content-center mt-3">
                              @if($program->gambar1)
                                <div class="col-{{ $program->gambar2 ? '4' : '6' }}">
                                  <img class="img-fluid w-100" src="{{ asset('storage/image/' . $program->gambar1) }}">
                                </div>
                              @endif
                              @if($program->gambar2)
                                <div class="col-{{ $program->gambar1 ? '4' : '6' }}">
                                  <img class="img-fluid w-100" src="{{ asset('storage/image/' . $prohram->gambar2) }}">
                                </div>
                              @endif
                              @if($program->gambar3)
                                <div class="col-{{ $program->gambar1 || $program->gambar2 ? '4' : '6' }}">
                                  <img class="img-fluid w-100" src="{{ asset('storage/image/' . $program->gambar3) }}">
                                </div>
                              @endif
                            </div>
                          </div>
                          </div>
                        </div>
                    </div>
                    <div class="mb-3" >
                        <form style="display: inline-block" action="/admindelete-program/{{$program->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        <a class="btn btn-primary" href="{{ url('adminhimpunan') }}">Cancel</a>
                    </div>
              </div>
            </div>
          </div>
        </div>
    
@endsection