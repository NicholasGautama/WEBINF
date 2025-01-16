@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Delete</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
          <div class="row">
            <div class="card">
              <div class="card-body">
                    <div class="mb-3">
                        <h3> Apakah Anda yakin ingin menghapus file berikut :</h3>
                    </div>
                    <div class="mb-3">
                        <label for="judul">Judul  : {{$mobility3->judul}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="narasi">Isi  : {{$mobility3->isi}}</label>
                    </div>
                    <div class="mb-3">
                      <label for="image">Gambar  :</label>
                        <div class="row mt-3">
                          <div class="container-fluid">
                            <div class="row justify-content-center mt-3">
                              @if($mobility3->image)
                                <div class="col-{{ $mobility3->image ? '4' : '6' }}">
                                  <img class="img-fluid w-100" src="{{ asset('storage/ProgramsUkm/' . $mobility3->image) }}">
                                </div>
                              @endif
                            </div>
                          </div>
                          </div>
                        </div>
                    </div>
                    <div class="mb-3" >
                        <form style="display: inline-block" action="/admindelete-mobility3/{{$mobility3->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        <a class="btn btn-primary" href="{{ url('adminmobility') }}">Cancel</a>
                    </div>
              </div>
            </div>
          </div>
        </div>
    
@endsection