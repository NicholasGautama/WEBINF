@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Edit Award</h3>
    </div>
      <div class="bootstrap-table bootstrap4 m-5">
        <div class="row">
          <div class="card">
            <div class="card-body">
              <form action="/admineditaward/{{$award->id}}" method="post" enctype="multipart/form-data">
                  @csrf 
                  @method('PUT')
                            <div class="mb-3">
                                <label for="isi">Pre-requisite:</label>
                                <input type="text" name="isi" class="form-control" id="isi" value="{{$award->isi}}" >
                            </div>
              <div class="mb-3">
                  <button class="btn btn-primary" type="submit">Upload</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


    @endsection