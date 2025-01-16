@extends('layouts.admin')

@section('content')
      <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Internal Research</h3>
      </div>
    <div class="bootstrap-table bootstrap4 m-5">
      <a href="adminadd-penelitian" class="btn btn-primary">Tambah</a>
      <table style="text-align: center;" id="table" data-toggle="table" data-flat="true" data-search="true" data-pagination="true">
        <thead>
          <tr>
            <th data-sortable="true">No</th>
            <th data-sortable="true">Tahun</th>
            <th data-sortable="true">Judul Penelitian</th>
            <th data-sortable="true">Peneliti</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $counter = 1; ?>
          @foreach ($penelitian1 as $item)
          <tr>
            <td style="text-align: center;">{{ $counter }}</td>
            <td style="text-align: center;">{{ $item->tahun }}</td>
            <td style="text-align: justify;">{{ $item->judul_penelitian }}</td>
            <td style="text-align: center; width: 400px;">
            <?php
                $paragraphs = explode('//', $item->peneliti);
                $counter2 = 1;
                foreach ($paragraphs as $paragraph) {
                    if (trim($paragraph) != '') {
                        if (count($paragraphs) > 1) {
                            echo $counter2 . '. ';
                        } else {
                            echo '1. ';
                        }
                        echo $paragraph . '<br>';
                        $counter2++;
                    }
                }
            ?>
            </td>
            <td>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="adminedit-penelitian/{{$item->id }}" class="btn btn-warning">Edit</a>
                <a href="admindelete-penelitian/{{$item->id }}" class="btn btn-danger">Delete</a>
              </div>
            </td>
          </tr>
          <?php $counter++; ?>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="container-fluid">
      <h3 class="text-center" style="font-size: 50px">Research Grants DIKTI</h3>
    </div>
    <div class="bootstrap-table bootstrap4 m-5">
      <a href="adminadd-penelitian2" class="btn btn-primary">Tambah</a>
      <table style="text-align: center;" id="table" data-toggle="table" data-flat="true" data-search="true" data-pagination="true">
        <thead>
          <tr>
            <th data-sortable="true">No</th>
            <th  data-sortable="true">Tahun</th>
            <th data-sortable="true">Skema Penelitian</th>
            <th data-sortable="true">Judul Penelitian</th>
            <th data-sortable="true">Peneliti</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $counter = 1; ?>
          @foreach ($penelitian2 as $item2)
          <tr>
              <td style="text-align: center;">{{ $counter }}</td>
              <td style="text-align: center;">{{ $item2->tahun }}</td>
              <td style="text-align: center;">{{ $item2->skema }}</td>
              <td style="text-align: justify;">{{ $item2->judul_penelitian }}</td>
              <td style="text-align: center; width: 400px;">
              <?php
                $paragraphs = explode('//', $item2->peneliti);
                $counter2 = 1;
                foreach ($paragraphs as $paragraph) {
                    if (trim($paragraph) != '') {
                        if (count($paragraphs) > 1) {
                            echo $counter2 . '. ';
                        } else {
                            echo '1. ';
                        }
                        echo $paragraph . '<br>';
                        $counter2++;
                    }
                }
              ?>
              </td>
              <td>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a href="adminedit-penelitian2/{{$item2->id }}" class="btn btn-warning">Edit</a>
                  <a href="admindelete-penelitian2/{{$item2->id }}" class="btn btn-danger">Delete</a>
                </div>
              </td>
          </tr>
          <?php $counter++; ?>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Independent Research</h3>
      </div>
    <div class="bootstrap-table bootstrap4 m-5">
      <a href="adminadd-penelitian3" class="btn btn-primary">Tambah</a>
      <table style="text-align: center;" id="table" data-toggle="table" data-flat="true" data-search="true" data-pagination="true">
        <thead>
          <tr>
            <th data-sortable="true" >No</th>
            <th data-sortable="true">Tahun</th>
            <th data-sortable="true">Judul Penelitian</th>
            <th data-sortable="true">Peneliti</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $counter = 1; ?>
          @foreach ($penelitian3 as $item3)
          <tr>
            <td style="text-align: center;">{{ $counter }}</td>
            <td style="text-align: center; width: 100px;">{{ $item3->tahun }}</td>
            <td style="text-align: justify; width: 400px;">{{ $item3->judul }}</td>
            <td style="text-align: center; width: 400px;">
            <?php
                $paragraphs = explode('//', $item3->peneliti);
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
            ?>
            </td>
            <td>
              <div style="text-align: center" class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="adminedit-penelitian3/{{$item3->id }}" class="btn btn-warning">Edit</a>
                <a href="admindelete-penelitian3/{{$item3->id }}" class="btn btn-danger">Delete</a>
              </div>
            </td>
          </tr>
          <?php $counter++; ?>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection