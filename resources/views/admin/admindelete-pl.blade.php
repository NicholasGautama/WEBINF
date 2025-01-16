@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Delete Community Dedication</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
          <div class="row">
            <div class="card">
              <div class="card-body">
                    <div class="mb-3">
                        <h3> Apakah Anda yakin ingin menghapus file berikut :</h3>
                    </div>
                    <div class="mb-3">
                        <label for="noppm">No       : {{$plulusans->noppm}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="namappm">PPM     : {{$plulusans->namappm}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="descppm">Description   : {{$plulusans->descppm}}</label>
                    </div>
                    <div class="mb-3" >
                        <form style="display: inline-block" action="/admindelete-pl/{{$plulusans->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        <a class="btn btn-primary" href="{{ url('adminpl') }}">Cancel</a>
                    </div>
              </div>
            </div>
          </div>
        </div>
    
@endsection