@extends('layouts.admin')

@section('content')
      <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Copyright Innovation</h3>
        </div>
      <div class="bootstrap-table bootstrap4 m-5">
      <a href="adminadd-inovasi" class="btn btn-primary">Tambah</a>
      <table id="table" data-toggle="table" data-flat="true" data-search="true" data-pagination="true">
  <thead>
    <tr>
      <th  data-sortable="true">Tahun</th>
      <th data-sortable="true">Penulis 1</th>
      <th data-sortable="true">Judul</th>
      <th data-sortable="true">No Pendaftaran</th>
      <th data-sortable="true">No HKI</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data1 as $item)
    <tr>
        <td style="text-align: center;">{{ $item->tahun }}</td>
        <td style="text-align: center;">{!! preg_replace('/^/m', '- ', nl2br(str_replace('//', "<br>-", $item->namap))) !!}</td>
        <td style="text-align: justify;">{{ $item->judul_penelitian }}</td>
        <td style="text-align: center;">{{ $item->nodaftar }}</td>
        <td style="text-align: center;">{{ $item->nohki }}</td>
        <td>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="adminedit-inovasi/{{$item->id }}" class="btn btn-warning">Edit</a>
            <a href="admindelete-inovasi/{{$item->id }}" class="btn btn-danger">Delete</a>
          </div>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
      </div>
      <div class="container-fluid">
        <h3 class="text-center" style="font-size: 50px">Brand Innovation</h3>
        </div>
      <div class="bootstrap-table bootstrap4 m-5">
        <a href="adminadd-inovasi2" class="btn btn-primary">Tambah</a>
        <table id="table" data-toggle="table" data-flat="true" data-search="true" data-pagination="true">
    <thead>
      <tr>
        <th  data-sortable="true">No</th>
        <th data-sortable="true">Semester</th>
        <th data-sortable="true">Tahun</th>
        <th data-sortable="true">Penulis 1</th>
        <th data-sortable="true">NIDN <br>Penulis 1</th>
        <th data-sortable="true">Program Studi</th>
        <th data-sortable="true">Penulis 2</th>
        <th data-sortable="true">NIDN Penulis 2</th>
        <th data-sortable="true">Penulis 3</th>
        <th data-sortable="true">NIDN Penulis 3</th>
        <th data-sortable="true">Penulis 4</th>
        <th data-sortable="true">NIDN Penulis 4</th>
        <th data-sortable="true">Judul</th>
        <th data-sortable="true">No Pendaftaran</th>
        <th data-sortable="true">No HKI</th>
        <th data-sortable="true">Tanggal</th>
        <th data-sortable="true">Hibah dari Kemenristekdikti(Ya/Tidak)</th>
        <th data-sortable="true">Jenis (Terdaftar/Granted)</th>
        <th data-sortable="true">URL</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data2 as $item2)
      <tr>
          <td style="text-align: center;">{{ $loop->iteration }}</td> 
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
          <td style="text-align: center;"><a href="{{ $item2->tautan }}" style="color: blue">{{ $item2->tautan }}</a></td>
          <td>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="adminedit-inovasi2/{{$item2->id }}" class="btn btn-warnning">Edit</a>
                <a href="admindelete-inovasi2/{{$item2->id }}" class="btn btn-danger">Delete</a>
              </div>
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
        </div>
@endsection