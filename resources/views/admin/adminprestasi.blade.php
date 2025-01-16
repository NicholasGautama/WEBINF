@extends('layouts.admin')

@section('content')
      <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Achievement</h3>
    </div>
      <div class="bootstrap-table bootstrap4 mx-5">
        <a href="adminadd-prestasi" class="btn btn-primary">Tambah</a>
        <table id="table" data-toggle="table" data-flat="true" data-search="true" data-pagination="true">
            <thead>
                <tr>
                    <th data-sortable="true">No</th>
                    <th data-sortable="true">Tahun</th>
                    <th data-sortable="true">Nama Mahasiswa</th>
                    <th data-sortable="true">Lomba/Kegiatan</th>
                    <th data-sortable="true">Tingkat</th>
                    <th data-sortable="true">Prestasi</th>
                    <th data-sortable="true">Keterangan</th>
                    <th data-sortable="true">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prestasi->sortByDesc('tahun') as $i => $item)
                    <tr>
                        <td style="text-align: center;">{{ $i+1 }}</td>
                        <td style="text-align: center;">{{ $item->tahun }}</td>
                        <td style="text-align: center;">{{ $item->nama_mahasiswa }}</td>
                        <td style="text-align: center;">{{ $item->lomba_kegiatan }}</td>
                        <td style="text-align: center;">{{ $item->tingkat	}}</td>
                        <td style="text-align: center;">{{ $item->prestasi }}</td>
                        <td style="text-align: center;">{{ $item->keterangan }}</td>
                        <td>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="adminedit-prestasi/{{$item->id }}" class="btn btn-primary">Edit</a>
                                <a href="admindelete-prestasi/{{$item->id }}" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      </div>
      <div class="collider"></div>
      <div class="collider"></div>
@endsection