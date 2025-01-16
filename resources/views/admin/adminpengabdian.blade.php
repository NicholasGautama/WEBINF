@extends('layouts.admin')

@section('content')
      <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Community Dedication</h3>
        </div>
      <div class="bootstrap-table bootstrap4 m-5">
      <a href="adminadd-pengabdian" class="btn btn-primary">Tambah</a>
      <table style="text-align: center;"  id="table" data-toggle="table" data-flat="true" data-search="true" data-pagination="true">
    <thead>
      <tr>
        <th data-sortable="true">No</th>
        <th data-sortable="true">Nama Dosen</th>
        <th data-sortable="true">NIDN</th>
        <th data-sortable="true">Kegiatan PKM</th>
        <th data-sortable="true">Keterangan</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $counter = 1; ?>
      @foreach ($pengabdian as $item)
      <tr>
          <td style="text-align: center;">{{ $counter }}</td>
          <td style="text-align: justify; width: 350px;"><?php
                  $paragraphs = explode('//', $item->nama);
                  $counter2 = 1;
                  foreach ($paragraphs as $paragraph) {
                      if (trim($paragraph) != '') {
                          if (count($paragraphs) > 1) {
                              echo $counter2 . '. ';
                          } else {
                              echo '';
                          }
                          echo $paragraph . '<br>';
                          $counter2++;
                      }
                  }
              ?></td>
          <td style="text-align: center; width: 200px;"><?php
                  $paragraphs = explode('//', $item->nidn);
                  $counter2 = 1;
                  foreach ($paragraphs as $paragraph) {
                      if (trim($paragraph) != '') {
                          if (count($paragraphs) > 1) {
                              echo $counter2 . '. ';
                          } else {
                              echo '';
                          }
                          echo $paragraph . '<br>';
                          $counter2++;
                      }
                  }
              ?></td>
          <td style="text-align: center;">{{ $item->namakegiatan }}</td>
          <td style="text-align: center;">{{ $item->keterangan }}</td>
          <td>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a href="adminedit-pengabdian/{{$item->id }}" class="btn btn-warning">Edit</a>
              <a href="admindelete-pengabdian/{{$item->id }}" class="btn btn-danger">Delete</a>
            </div>
          </td>
      </tr>
      <?php $counter++; ?>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection