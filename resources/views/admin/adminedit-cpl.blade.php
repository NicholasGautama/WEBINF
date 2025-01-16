@extends('layouts.app1')

@section('content')
  <!-- End Navigation -->
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Update Expected Learning Outcomes</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="/admincpl/{{$datacpl1->id}}" method="post">
                        @csrf
                        @method('PUT')
                            <div class="mb-3">
                                <label for="kodecpl">ID</label>
                                <input type="text" name="kodecpl" class="form-control" id="kodecpl" value="{{$datacpl1->kodecpl}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="namacpl">Expected Learning Outcomes</label>
                                <input type="text" name="namacpl" class="form-control" id="namacpl" value="{{$datacpl1->namacpl}}" required>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-success" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection