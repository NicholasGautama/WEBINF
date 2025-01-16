@extends('layouts.admin')

@section('content')
      <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Graduate Profile</h3>
        </div>
        <div class="table-responsive-sm m-5">
        <div class="bootstrap-table bootstrap4 m-5">
            <a href="adminadd-pl" class="btn btn-primary">Tambah</a>
        </div>
        
        <div class="bootstrap-table bootstrap4 m-5">
            <table class="table table-bordered table-striped">

            <table style="text-align: center;"d="table" data-toggle="table" data-flat="true" data-search="true" data-pagination="true" class="table table-bordered table-striped" >
                <thead>
                <tr>
                    <th style="width: 100px; text-align: center;">No</th>
                    <th style="width: 100px; text-align: center;">PPM</th>
                    <th style="text-align: center;">Description</th>
                    <th style="text-align: center;">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($plulusans as $item)
                    <tr>
                        <td style="text-align: center;">{{ $item->noppm }}</td>
                        <td style="text-align: center;">{{ $item->namappm }}</td>
                        <td style="text-align: justify;">{{ $item->descppm }}</td>
                        <td>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="adminedit-pl/{{$item->id }}" class="btn btn-primary">Edit</a>
                            <a href="admindelete-pl/{{$item->id }}" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="collider"></div>
@endsection