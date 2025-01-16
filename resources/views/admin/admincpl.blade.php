@extends('layouts.admin')

@section('content')
       <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Expected Learning Outcomes</h3>
        </div>
        <div class="table-responsive-sm m-5">
        <div class="bootstrap-table bootstrap4 m-5">
            <a href="adminadd-cpl" class="btn btn-primary">Tambah</a>
        </div>
        
        <div class="bootstrap-table bootstrap4 m-5">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th style="width: 100px; text-align: center;">ID</th>
                    <th style="text-align: center;">Expected Learning Outcomes</th>
                    <th style="text-align: center;"> Action </th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($datacpl1 as $item)
                    <tr>
                        <td style="text-align: center;">{{ $item->kodecpl }}</td>
                        <td style="text-align: justify;">{{ $item->namacpl }}</td>
                        <td>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="adminedit-cpl/{{$item->id }}" class="btn btn-primary">Edit</a>
                                <a href="admindelete-cpl/{{$item->id }}" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
          </div>

          <table class="table table-bordered table-striped">
            
          <div class="bootstrap-table bootstrap4 m-5">
          <h3 class="text-center" style="font-size: 50px">Informatics Subjects</h3>
            <a href="adminadd-cpl2" class="btn btn-primary">Tambah</a>
          </div>
            <thead>
              <tr>
                <th style="width: 100px; text-align: center;">Kode</th>
                <th style="text-align: center;">Subject</th>
                <th style="width: 150px; text-align: center;">CPL-Theory</th>
                <th style="width: 150px; text-align: center;">CPL-Practice</th>
                <th style="width: 150px; text-align: center;">Prerequisite Course</th>
                <th style="width: 150px; text-align: center;">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($datacpl2 as $item)
              <tr> 
                <td style="text-align: center;">{{ $item->kodemk }}</td>
                <td style="text-align: center;">{{ $item->namamk }}</td>
                <td style="text-align: center;">{{ $item->teori }}</td>
                <td style="text-align: center;">{{ $item->praktikum }}</td>
                <td style="text-align: center;">{{ $item->mksyarat }}</td>
                <td>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <a href="adminedit-cpl2/{{$item->id }}" class="btn btn-primary">Edit</a>
                      <a href="admindelete-cpl2/{{$item->id }}" class="btn btn-danger">Delete</a>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
    </div>
@endsection