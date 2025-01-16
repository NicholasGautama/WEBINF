@extends('layouts.main')

@section('container')
  <!-- End Navigation -->
      <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px;font-family: 'Geologica', sans-serif; color: black;">Achievement</h3>
        </div>
      <div class="bootstrap-table bootstrap4 mx-5">
        <table style="text-align: center;" id="table" data-toggle="table" data-flat="true" data-search="true" data-pagination="true">
          <thead>
			<tr>
			  <th data-sortable="true">Year</th>
			  <th data-sortable="true">Student Name</th>
			  <th data-sortable="true">Competition/Activity</th>
			  <th data-sortable="true">Level</th>
			  <th data-sortable="true">Achievement</th>
			  <th data-sortable="true">Description</th>
			</tr>
          </thead>
          <tbody>
          @foreach ($prestasi as $item)
            <tr>
                <td style="text-align: center;">{{ $item->tahun }}</td>
                <td style="text-align: center;">{{ $item->nama_mahasiswa }}</td>
                <td style="text-align: center;">{{ $item->lomba_kegiatan }}</td>
                <td style="text-align: center;">{{ $item->tingkat	}}</td>
                <td style="text-align: center;">{{ $item->prestasi }}</td>
                <td style="text-align: center;">{{ $item->keterangan }}</td>
            </tr>
          @endforeach
            <!-- <tr>
                <td style="text-align: center;">2021</td>
                <td style="text-align: center;">Veronica Ng</td>
                <td style="text-align: center;">Duta Bahasa Provinsi Banten</td>
                <td style="text-align: center;">Nasional</td>
                <td style="text-align: center;">Juara I</td>
                <td style="text-align: center;"></td>
            </tr>
            <tr>
                <td style="text-align: center;">2021</td>
                <td style="text-align: center;">Juaneta Abigail dan Darlene Calista Wijaya</td>
                <td style="text-align: center;">Kompetisi Kreasi Pangan Lokal Nusantara</td>
                <td style="text-align: center;">Nasional</td>
                <td style="text-align: center;">Pemenang Favorit</td>
                <td style="text-align: center;"></td>
            </tr>
            <tr>
              <td style="text-align: center;">2021</td>
              <td style="text-align: center;">Fedora Annabella</td>
              <td style="text-align: center;">Putri Pariwisata Provinsi Jambi</td>
              <td style="text-align: center;">Nasional</td>
              <td style="text-align: center;">Juara I</td>
              <td style="text-align: center;"></td> -->
          <!-- </tr> -->
        </table>
      </div>
      <div class="collider"></div>
      <div class="collider"></div>
@endsection