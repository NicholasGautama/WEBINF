@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Add Prospect</h3>
    </div>
      <div class="bootstrap-table bootstrap4 m-5">
        <div class="row">
          <div class="card">
            <div class="card-body">
            <form action="adminaddprospect" method="post" enctype="multipart/form-data">
              @csrf
                            <div class="mb-3">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title" >
                            </div>
                            <div class="mb-3">
                                <label for="isi" class="form-label">Description</label>
                                <textarea class="form-control" id="isi" rows="3" name="isi"></textarea>
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