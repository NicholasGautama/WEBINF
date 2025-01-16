@extends('layouts.admin')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Edit Alumni Association </h3>
    </div>
    <div class="table-responsive-sm m-5">
        <table d="table" data-toggle="table" data-flat="true" data-search="true" data-pagination="true" class="table table-bordered table-striped" >
            <thead>
                <tr>
                <th data-sortable="true">Judul</th>
                <th data-sortable="true">Gambar</th>
                <th data-sortable="true">Isi</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumni as $item)
                <tr>
                    <td style="text-align: center;">{{ $item->judul }}</td>
                    <td style="text-align: center;">{{ $item->gambar }}</td>
                    <td style="text-align: center;">{{ $item->isi }}</td>
                    <td>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="adminedit-alumni/{{$item->id }}" class="btn btn-primary">Edit</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection