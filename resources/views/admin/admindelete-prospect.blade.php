@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Delete Prospect</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
          <div class="row">
            <div class="card">
              <div class="card-body">
                    <div class="mb-3">
                        <h3> Apakah Anda yakin ingin menghapus file berikut :</h3>
                    </div>
                    <div class="mb-3">
                        <label for="title">Title  : {{$prospect->title}}</label>
                    </div>
                    <div class="mb-3">
                                <p class="fs-5 mb-4" style="text-align: justify"><?php
                                    $paragraphs = explode('//', $prospect->isi);
                                    $counter = 1;
                                    foreach ($paragraphs as $paragraph) {
                                        if (trim($paragraph) != '') {
                                            if (count($paragraphs) > 2) {
                                                '.';
                                            }
                                            echo $paragraph . '<br> <br>';
                                            $counter++;
                                        }
                                    }?>
                                </p>
                    </div>
                    <div class="mb-3" >
                        <form style="display: inline-block" action="/admindelete-prospect/{{$prospect->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        <a class="btn btn-primary" href="{{ url('adminprospect') }}">Cancel</a>
                    </div>
              </div>
            </div>
          </div>
        </div>
    
@endsection