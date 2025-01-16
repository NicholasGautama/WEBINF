@extends('layouts.app1')

@section('content')
  <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Delete Subject</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
          <div class="row">
            <div class="card">
              <div class="card-body">
                    <div class="mb-3">
                        <h3> Apakah Anda yakin ingin menghapus file berikut :</h3>
                    </div>
                    <div class="mb-3">
                        <label for="tahun">Kode     : {{$datacpl2->kodemk}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="namap">Subject     : {{$datacpl2->namamk}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="namap">CPL-Theory	: {{$datacpl2->teori}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="namap">CPL-Practice     : {{$datacpl2->praktikum}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="namap">Prerequisite Courses     : {{$datacpl2->mksyarat}}</label>
                    </div>
                    <div class="mb-3" >
                        <form style="display: inline-block" action="/admindelete-cpl2/{{$datacpl2->id}}" method="post">
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