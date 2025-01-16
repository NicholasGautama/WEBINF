@extends('layouts.main')

@section('container')
<!-- End Navigation -->
<div class="container-fluid my-5">
  <h3 class="text-center" style="font-size: 50px;font-family: 'Geologica', sans-serif; color: black;">Copyright Innovation</h3>
</div>
<div class="bootstrap-table bootstrap4 m-5">
  <table style="text-align: center;" id="table" data-toggle="table" data-flat="true" data-search="true" data-pagination="true">
    <thead>
		<tr>
		  <th data-sortable="true">No</th>
		  <th data-sortable="true">Year</th>
		  <th data-sortable="true">Author</th>
		  <th data-sortable="true">Title</th>
		  <th data-sortable="true">Registration Number</th>
		  <th data-sortable="true">Intellectual Property Number</th>
		</tr>
    </thead>
    <tbody>
	  @php
		$counter = 1;
	  @endphp
	  @foreach ($data1 as $item)
	  <?php
		$namaPenelitiArray = explode('//', $item->namap);
	  ?>
	  <tr>
		<td style="text-align: center;">{{ $counter }}</td>
		<td style="text-align: center;">{{ $item->tahun }}</td>
		<td class="namap" style="text-align: center;">
		  @foreach ($namaPenelitiArray as $key => $namaPeneliti)
			@if ($key > 0) {{-- Skip the first element (before the first "//") --}}
			  {{ $key }}. {{ $namaPeneliti }}<br>
			@endif
		  @endforeach
		</td>
		<td style="text-align: justify;">{{ $item->judul_penelitian }}</td>
		<td style="text-align: center;">{{ $item->nodaftar }}</td>
		<td style="text-align: center;">{{ $item->nohki }}</td>
	  </tr>
	  @php
		$counter++;
	  @endphp
	  @endforeach
	</tbody>
  </table>
</div>
<div class="container-fluid">
  <h3 class="text-center" style="font-size: 50px">Brand Innovation</h3>
</div>
<div class="bootstrap-table bootstrap4 m-5">
  <table style="text-align: center;" id="table" data-toggle="table" data-flat="true" data-search="true" data-pagination="true">
    <thead>
<tr>
  <th data-sortable="true">No</th>
  <th data-sortable="true">Semester</th>
  <th data-sortable="true">Year</th>
  <th data-sortable="true">Author 1</th>
  <th data-sortable="true">Author 1 NIDN</th>
  <th data-sortable="true">Study Program</th>
  <th data-sortable="true">Author 2</th>
  <th data-sortable="true">Author 2 NIDN</th>
  <th data-sortable="true">Author 3</th>
  <th data-sortable="true">Author 3 NIDN</th>
  <th data-sortable="true">Author 4</th>
  <th data-sortable="true">Author 4 NIDN</th>
  <th data-sortable="true">Title</th>
  <th data-sortable="true">Registration Number</th>
  <th data-sortable="true">Intellectual Property Number</th>
  <th data-sortable="true">Date</th>
  <th data-sortable="true">Grant from Ministry of Research and Technology (Yes/No)</th>
  <th data-sortable="true">Type (Registered/Granted)</th>
  <th data-sortable="true">URL</th>
</tr>
    </thead>
    <tbody>
      <?php $counter = 1; ?>
      @foreach ($data2 as $item2)
      <tr>
        <td style="text-align: center;">{{ $counter }}</td>
        <td style="text-align: center;">{{ $item2->semester }}</td>
        <td style="text-align: center;">{{ $item2->tahun }}</td>
        <td style="text-align: center;">{{ $item2->namap1 }}</td>
        <td style="text-align: center;">{{ $item2->nidn1 }}</td>
        <td style="text-align: center;">{{ $item2->programstud }}</td>
        <td style="text-align: center;">{{ $item2->namap2 }}</td>
        <td style="text-align: center;">{{ $item2->nidn2 }}</td>
        <td style="text-align: center;">{{ $item2->namap3 }}</td>
        <td style="text-align: center;">{{ $item2->nidn3 }}</td>
        <td style="text-align: center;">{{ $item2->namap4 }}</td>
        <td style="text-align: center;">{{ $item2->nidn4 }}</td>
        <td style="text-align: justify;">{{ $item2->judul_penelitian }}</td>
        <td style="text-align: center;">{{ $item2->nodaftar }}</td>
        <td style="text-align: center;">{{ $item2->nohki }}</td>
        <td style="text-align: center;">{{ $item2->tanggal }}</td>
        <td style="text-align: center;">{{ $item2->hibah }}</td>
        <td style="text-align: center;">{{ $item2->jenis }}</td>
        <td style="text-align: center;"><a href="https://merek.dgip.go.id/sertifikat-merek" style="color: blue">https://merek.dgip.go.id/sertifikat-merek</a></td>
      </tr>
      <?php $counter++; ?>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
