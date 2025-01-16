@extends('layouts.main')

@section('container')
  <!-- End Navigation -->
  <div class="container"  style="font-family: 'Geologica', sans-serif; color: black;">
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Announcements</h3>
    </div>
</div>
<!-- notice -->
<section class="section" style="font-family: 'Geologica', sans-serif; color: black;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="list-unstyled">
                    <!-- notice item -->
                    @foreach ($announcement as $item)
                      <li class="d-md-table mb-4 mt-4 w-100 border-bottom hover-shadow">
                      <div class="d-md-table-cell text-center p-4 text-white mb-md-0" style="background-color: #ffb703; color: #ffffff; width: 150px;">
                            <span class="h1 d-block">{{ \Carbon\Carbon::parse($item->tanggal)->format('d') }}</span>{{ \Carbon\Carbon::parse($item->tanggal)->format('F Y') }}
                        </div>

                          <div class="d-md-table-cell px-4 vertical-align-middle mb-5 mb-md-5">
                              <p class="h4 mt-0 mb-3 ">{{ $item->judul }}</p>
                              <p class="mb-9" style="font-family: 'Open Sans', sans-serif;">
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
                          </div>
                          <div class="d-md-table-cell text-center pr-0 pr-md-4 rounded-pill">
                              <a href="read-announcement/{{$item->id }}" class="btn btn-primary rounded-pill" style="background-color: #023047; color: #FFFFFF; display: inline-block; width: 200px;">Read More</a>
                          </div>
                      </li>
                  @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
        
@endsection