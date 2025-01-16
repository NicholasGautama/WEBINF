@extends('layouts.main')

@section('container')

<!-- End Navigation -->
<div class="container-fluid my-5">
  <h3 class="text-center" style="font-size: 50px; font-family: 'Geologica', sans-serif; color: black;">Community Dedication</h3>
</div>
<div class="bootstrap-table bootstrap4 m-5">
  <table style="text-align: center;" id="table" data-toggle="table" data-flat="true" data-search="true" data-pagination="true">
    <thead>
		<tr>
		  <th data-sortable="true">No</th>
		  <th data-sortable="true">Lecturer Name</th>
		  <th data-sortable="true">NIDN</th>
		  <th data-sortable="true">Community Service Activity (PKM)</th>
		  <th data-sortable="true">Description</th>
		</tr>
    </thead>
    <tbody>
      <?php $counter = 1; ?>
      @foreach ($pengabdian as $item)
      <tr>
        <td style="text-align: center;">{{ $counter }}</td>
        <td style="text-align: justify; width: 350px;">
          <?php
            $paragraphs = explode('//', $item->nama);
            $counter2 = 1;
            foreach ($paragraphs as $paragraph) {
              if (trim($paragraph) != '') {
                if (count($paragraphs) > 1) {
                  echo $counter2 . '. ';
                }
                echo $paragraph . '<br>';
                $counter2++;
              }
            }
          ?>
        </td>
        <td style="text-align: center; width: 200px;">
          <?php
            $paragraphs = explode('//', $item->nidn);
            $counter2 = 1;
            foreach ($paragraphs as $paragraph) {
              if (trim($paragraph) != '') {
                if (count($paragraphs) > 1) {
                  echo $counter2 . '. ';
                }
                echo $paragraph . '<br>';
                $counter2++;
              }
            }
          ?>
        </td>
        <td style="text-align: center;">{{ $item->namakegiatan }}</td>
        <td style="text-align: center;">{{ $item->keterangan }}</td>
      </tr>
      <?php $counter++; ?>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
