@extends('layouts.admin')

@section('content')
    <div class="container-fluid my-5">
      <h3 class="text-center" style="font-size: 50px">Edit About Page </h3>
    </div>
    <div class="table-responsive-sm m-5">
      <table d="table" data-toggle="table" data-flat="true" data-search="true" data-pagination="true" class="table table-bordered table-striped" >
          <thead>
              <tr>
              <th data-sortable="true">Judul</th>
              <th data-sortable="true">Isi 1</th>
              <th data-sortable="true">Isi 2</th>
              <th data-sortable="true">Isi 3</th>
              <th>Action</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($about as $item)
              <tr>
                  <td style="text-align: center;">{{ $item->judul }}</td>
                  <td style="text-align: center;">{{ $item->isi1 }}</td>
                  <td style="text-align: center;">{{ $item->isi2 }}</td>
                  <td style="text-align: center;">{{ $item->isi3 }}</td>
                  <td>
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <a href="adminedit-sekilas/{{$item->id }}" class="btn btn-primary">Edit</a>
                      </div>
                  </td>
              </tr>
          @endforeach
          </tbody>
      </table>
    </div>
    
@endsection