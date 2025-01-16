@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Edit Mobility</h3>
    </div>
      <div class="bootstrap-table bootstrap4 m-5">
        <div class="row">
          <div class="card">
            <div class="card-body">
              <form action="/admineditmobility2/{{$mobility2->id}}" method="post" enctype="multipart/form-data">
                  @csrf 
                  @method('PUT')
                  <div class="mb-3">
                      <label for="judul1">Judul 1</label>
                      <input type="text" name="judul1" class="form-control" id="judul1" value="{{$mobility2->judul1}}"required>
                  </div>
                  <div class="mb-3">
                                <label for="isi1" class="form-label">Isi 1</label>
                                <textarea class="form-control" name="isi1" rows="3">{{ $mobility2->isi1 }}</textarea>
                            </div>
                  <div class="mb-3">
                      <label for="judul2">Judul 2</label>
                      <input type="text" name="judul2" class="form-control" id="judul2" value="{{$mobility2->judul2}}"required>
                  </div>
                  <div class="mb-3">
                                <label for="isi2" class="form-label">Isi 2</label>
                                <textarea class="form-control" name="isi2" rows="3">{{ $mobility2->isi2 }}</textarea>
                            </div>
                  <div class="mb-3">
                      <button class="btn btn-primary" type="submit">Update</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    @endsection