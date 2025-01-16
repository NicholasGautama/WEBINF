@extends('layouts.main')

@section('container')
  <!-- End Navigation -->
  <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px;font-family: 'Geologica', sans-serif; color: black;">Internal Research</h3>
      </div>
    <div class="bootstrap-table bootstrap4 m-5">
    <table style="text-align: center;" id="table" data-toggle="table" data-flat="true" data-search="true" data-pagination="true">
        <thead>
			<tr>
			  <th data-sortable="true">No</th>
			  <th data-sortable="true">Year</th>
			  <th data-sortable="true">Research Title</th>
			  <th data-sortable="true">Researchers</th>
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
    <table style="text-align: center;" id="table" data-toggle="table" data-flat="true" data-search="true" data-pagination="true">
        <thead>
			<tr>
			  <th data-sortable="true">No</th>
			  <th data-sortable="true">Year</th>
			  <th data-sortable="true">Research Scheme</th>
			  <th data-sortable="true">Research Title</th>
			  <th data-sortable="true">Researchers</th>
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
				$counter3 = 1;
                foreach ($paragraphs as $paragraph) {
                    if (trim($paragraph) != '') {
                        if (count($paragraphs) > 1) {
                            echo $counter3 . '. ';
                        } else {
                            echo '1. ';
                        }
                        echo $paragraph . '<br>';
                        $counter3++;
                    }
                }
              ?>
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
      <table style="text-align: center;" id="table" data-toggle="table" data-flat="true" data-search="true" data-pagination="true">
        <thead>
			<tr>
			  <th data-sortable="true">No</th>
			  <th data-sortable="true">Year</th>
			  <th data-sortable="true">Research Title</th>
			  <th data-sortable="true">Researchers</th>
			</tr>
        </thead>
        <tbody>
          <?php $counter = 1; ?>
          @foreach ($penelitian3 as $item3)
          <tr>
            <td style="text-align: center; ">{{ $counter }}</td>
            <td style="text-align: center; width:">{{ $item3->tahun }}</td>
            <td style="text-align: justify; width:">{{ $item3->judul }}</td>
            <td style="text-align: center; width:">
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
          </tr>
          <?php $counter++; ?>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection
