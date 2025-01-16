@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="container-fluid my-5">
    <h3 class="text-center" style="font-size: 50px">Announcement</h3>
  </div>
  <div class="bootstrap-table bootstrap4 mb-3">
    <a href="adminadd-announcement" class="btn btn-primary">Add</a>
  </div>
</div>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="list-unstyled">
                    <!-- notice item -->
                    @foreach ($announcement as $item)
                      <li class="d-md-table mb-4 mt-4 w-100 border-bottom hover-shadow">
                          <div class="d-md-table-cell text-center p-4 bg-primary text-white mb- mb-md-0">
                              <span class="h1 d-block">{{ \Carbon\Carbon::parse($item->tanggal)->format('d') }}</span>{{ \Carbon\Carbon::parse($item->tanggal)->format('F Y') }}
                          </div>
                          <div class="d-md-table-cell px-4 vertical-align-middle mb-5 mb-md-5">
                              <p class="h4 mt-0 mb-3 ">{{ $item->judul }}</p>
                              <p class="mb-9">
                                  @php
                                      $isi = str_replace('///', '<br><br>', $item->isi); 
                                      $isi = str_replace('//', '<br>', $isi); 
                                      $isi = str_replace('--', '<br> -', $isi); 
                                      
                                      // batasi hingga 250
                                      if (strlen($isi) > 250) {
                                          $isi = substr($isi, 0, 250) . '...';
                                      }
                                      
                                      echo $isi;
                                  @endphp
                              </p>

                              <div class="mt-auto border-top">
                                  <div class="d-flex justify-content-between align-items-center">
                                      <div class="btn-group">
                                          <a href="{{ url('adminedit-announcement/'.$item->id) }}" class="btn btn-sm btn-warning me-2 ">Edit</a>
                                          <a href="{{ url('admindelete-announcement/'.$item->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                      </div>
                                      <small class="text-muted" style="margin-left: 1em; margin-right: 1em;">Last updated {{$item->updated_at->diffForHumans()}}</small>
                                  </div>
                              </div>
                          </div>
                          <div class="d-md-table-cell text-center pr-0 pr-md-4">
                              <a href="read-announcement/{{$item->id }}" class="btn btn-primary">Selengkapnya</a>
                          </div>
                      </li>
                  @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection