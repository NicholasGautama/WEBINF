@extends('layouts.app1')

@section('content')
  <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Delete Expected Learning Outcomes</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
          <div class="row">
            <div class="card">
              <div class="card-body">
                    <div class="mb-3">
                        <h3> Apakah Anda yakin ingin menghapus file berikut :</h3>
                    </div>
                    <div class="mb-3">
                        <label for="tahun">ID       : {{$datacpl1->kodecpl}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="namap">Expected Learning Outcomes     : {{$datacpl1->namacpl}}</label>
                    </div>
                    <div class="mb-3" >
                        <form style="display: inline-block" action="/admindelete-cpl/{{$datacpl1->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        <a class="btn btn-primary" href="{{ url('admincpl') }}">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection