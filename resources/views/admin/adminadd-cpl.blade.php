@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Tambah Expected Learning Outcomes</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="adminaddcpl" method="post">
                            @csrf 
                            <div class="mb-3">
                                <label for="kodecpl">ID</label>
                                <input type="text" name="kodecpl" class="form-control" id="kodecpl" required>
                            </div>
                            <div class="mb-3">
                                <label for="namacpl">Expected Learning Outcomes</label>
                                <input type="text" name="namacpl" class="form-control" id="namacpl" required>
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