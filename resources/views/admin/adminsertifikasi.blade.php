@extends('layouts.admin')

@section('content')
<div class="container-fluid my-5">
  <h3 class="text-center" style="font-size: 50px">Certification</h3>
    <div class="container my-5">
        <div class="tab-pane fade show active table-responsive" >
            <table class="table table-bordered table-striped">
            @php 
            $no = 1; 
            @endphp
            @foreach ($sertifikasi as $item)
            @if ($item->sertifikasi == 'Information Literacy')
                <thead>
                    <h3 class="text-center" style="font-size: 30px">Sertifikasi & Spesialisasi <p>{{$item->sertifikasi}} </h3>
                    <tr>
                        <th style="width: 100px; text-align: center;">Sertifikasi</th>
                        <th style="text-align: center;">Penjelasan</th>
                        <th style="text-align: center;">Spesialisasi</th>
                        <th style="text-align: center;">Kontak</th>
                            <th style="text-align: center;">Tautan Kontak</th>
                        <th style="width: 100px; text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td style="text-align: center;">{{ $item->sertifikasi }}</td>
                      <td style="width: 400px; text-align: center;">{{ $item->penjelasan }}</td>
                      <td style="width: 400px; text-align: center;">{{ $item->spesialisasi }}</td>
                      <td style="text-align: center;">{{ $item->kontak }}</td>
                      <td style=" text-align: center;">{{ $item->tautan }}</td>
                      <td>
                          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                              <a href="adminedit-sertifikasi/{{$item->id }}" class="btn btn-primary">Edit</a>
                          </div>
                      </td>
                    </tr>
                </tbody>
            </table>
            @endif
            @endforeach  
        </div>

        <div class="tab-pane fade show active table-responsive" >
            @php 
            $no = 1; 
            @endphp
            @foreach ($sertifikasi as $item)
            @if ($item->sertifikasi == 'Sertifikasi MTA')
                <table class="table table-bordered table-striped">
                    <thead>
                        <h3 class="text-center" style="font-size: 30px">Sertifikasi & Spesialisasi <p>{{$item->sertifikasi}} </h3>
                        <tr>
                            <th style="width: 100px; text-align: center;">Sertifikasi</th>
                            <th style="text-align: center;">Penjelasan</th>
                            <th style="text-align: center;">Spesialisasi</th>
                            <th style="text-align: center;">Kontak</th>
                            <th style="text-align: center;">Tautan Kontak</th>
                            <th style="width: 100px; text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($item->sertifikasi))
                        <tr>
                            <td style="text-align: center;">{{ $item->sertifikasi }}</td>
                            <td style="width: 400px; text-align: center;">{{ $item->penjelasan }}</td>
                            <td style="width: 400px; text-align: center;">{{ $item->spesialisasi }}</td>
                            <td style="text-align: center;">{{ $item->kontak }}</td>
                            <td style="text-align: center;">{{ $item->tautan }}</td>
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="adminedit-sertifikasi/{{$item->id }}" class="btn btn-primary">Edit</a>
                                </div>
                            </td>
                        </tr>
                        @endif
                    </tbody>     
                </table>
            @endif
            @endforeach
        </div>

        <div class="tab-pane fade show active table-responsive" >
            @php 
            $no = 1; 
            @endphp
            @foreach ($sertifikasi as $item)
            @if ($item->sertifikasi == 'Sertifikasi IT Specialist')
                <table class="table table-bordered table-striped">
                    <thead>
                        <h3 class="text-center" style="font-size: 30px">Sertifikasi & Spesialisasi <p>{{$item->sertifikasi}} </h3>
                        <tr>
                            <th style="width: 100px; text-align: center;">Sertifikasi</th>
                            <th style="text-align: center;">Penjelasan</th>
                            <th style="text-align: center;">Spesialisasi</th>
                            <th style="text-align: center;">Kontak</th>
                            <th style="text-align: center;">Tautan Kontak</th>
                            <th style="width: 100px; text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($item->sertifikasi))
                        <tr>
                            <td style="text-align: center;">{{ $item->sertifikasi }}</td>
                            <td style="width: 400px; text-align: center;">{{ $item->penjelasan }}</td>
                            <td style="width: 400px; text-align: center;">
                                <?php
                                $paragraphs = explode('.', $item->spesialisasi);
                                $counter = 1;
                                foreach ($paragraphs as $paragraph) {
                                    if (trim($paragraph) != '') {
                                        if (count($paragraphs) > 2) {
                                            echo '- ';
                                        }
                                        echo $paragraph . '.<br>';
                                        $counter++;
                                    }
                                }?>
                            </td>
                            <td style="text-align: center;">{{ $item->kontak }}</td>
                            <td style=" text-align: center;">{{ $item->tautan }}</td>
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="adminedit-sertifikasi/{{$item->id }}" class="btn btn-primary">Edit</a>
                                </div>
                            </td>
                        </tr>
                        @endif
                    </tbody>     
                </table>
            @endif
        @endforeach
        </div>
    </div> 
</div>

@endsection