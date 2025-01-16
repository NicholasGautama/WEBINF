@extends('layouts.app1')

@section('content')
    <div class="bootstrap-table bootstrap4 m-5">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                        <img src="{{ asset('storage/Sarana/' . $sarana->image) }}" class="img-thumbnail rounded-start border-0 me-3" alt="..." style="width: 400px;">
                        <div>
                            <div class="mb-3">
                                <h3>Apakah Anda yakin ingin menghapus data berikut :</h3>
                            </div>
                            <div class="mb-3">
                                <label for="nama">Nama Fasilitas     : {{$sarana->fasilitas}}</label>
                            </div>

                        </div>
                    </div>
                    <div class="mb-3">
                        <form style="display: inline-block" action="/admindelete-sarana/{{$sarana->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        <a class="btn btn-primary" href="{{ url('adminsarana') }}">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection