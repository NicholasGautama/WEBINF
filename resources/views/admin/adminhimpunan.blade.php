@extends('layouts.admin')

@section('content')
  <div class="container">
    @foreach ($himpunan2 as $item)
    <div class="container-fluid my-5">
      <h3 class="text-center" style="font-size: 50px">Student Association</h3>
      <a href="adminedit-logohmif/{{$item->id}}" class="btn btn-warning">Edit</a>
    </div>
    <div class="container-fluid text-center">
      <a href="{{$item->tautan5}}">
        <img class="img-fluid mb-4" src="{{ asset('storage/Program/' . $item->image1) }}" alt="" width="450">
      </a>
    </div>
    <div class="container-fluid mb-5">
      <h6 class="text-center" style="font-size: 50px">{{$item->nama}}</h6>
    </div>
    @endforeach
  </div>
  <div class="container">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="background-color: #023047">
      <li class="nav-item">
        <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="true">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-program-tab" data-toggle="pill" href="#pills-program" role="tab" aria-controls="pills-program" aria-selected="false">Program</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
      </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">

      <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <a href="adminadd-profilehimpunan" class="btn btn-primary">Tambah</a>
        @foreach ($himpunan as $item1)
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="adminedit-profilehimpunan/{{$item1->id }}" class="btn btn-warning">Edit</a>
            <a href="admindelete-profilehimpunan/{{$item1->id }}" class="btn btn-danger">Delete</a>
        </div>
        <div>
            <p><strong style="font-size: 20px;">{{$item1->judul}}</strong></p>
            <p style="text-align: justify; font-size: 15px">
            <?php
            $paragraphs = explode('\n', $item1->isi);
            $counter = 1;
            foreach ($paragraphs as $paragraph) {
                if (trim($paragraph) != '') {
                    if (count($paragraphs) > 2) {
                        echo '';
                    }
                    echo $paragraph . '. <br><br>';
                    $counter++;
                }
            }?></p>
        </div>
        @endforeach
      </div>

      <div class="tab-pane fade" id="pills-program" role="tabpanel" aria-labelledby="pills-program-tab">
        <a href="adminadd-program" class="btn btn-primary">Tambah</a>
        <div id="accordion">
            @foreach ($program as $item)
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center" id="heading{{$item->id}}" style="background: #023047">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$item->id}}" aria-expanded="true" aria-controls="collapse{{$item->id}}" style="text-decoration: none;color: white">
                        {{$item->judul}}
                    </button>
                    <div class="ml-auto">
                        <a href="adminedit-program/{{$item->id}}" class="btn btn-warning">Edit</a>
                        <a href="admindelete-program/{{$item->id}}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
                <div id="collapse{{$item->id}}" class="collapse show" aria-labelledby="heading{{$item->id}}" data-parent="#accordion">
                    <div class="card-body">
                        <?php
                        $paragraphs = explode("\n", $item->isi);
                        $counter = 1;
                        foreach ($paragraphs as $paragraph) {
                            if (trim($paragraph) != '') {
                                if (count($paragraphs) > 2) {
                                    echo " ";
                                }
                                echo $paragraph . "<br><br>";
                                $counter++;
                            }
                        }?>
                        <div class="container-fluid">
                          <div class="row justify-content-center mt-3">
                            @if($item->gambar1)
                              <div class="col-{{ $item->gambar2 ? '4' : '6' }}">
                                <img class="img-fluid w-100" src="{{ asset('storage/Program/' . $item->gambar1) }}">
                              </div>
                            @endif
                            @if($item->gambar2)
                              <div class="col-{{ $item->gambar1 ? '4' : '6' }}">
                                <img class="img-fluid w-100" src="{{ asset('storage/Program/' . $item->gambar2) }}">
                              </div>
                            @endif
                            @if($item->gambar3)
                              <div class="col-{{ $item->gambar1 || $item->gambar2 ? '4' : '6' }}">
                                <img class="img-fluid w-100" src="{{ asset('storage/Program/' . $item->gambar3) }}">
                              </div>
                            @endif
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
      </div>

      <div class="tab-pane fade" id="pills-bph" role="tabpanel" aria-labelledby="pills-bph-tab">
        <div class="container text-center px-5">
          @foreach ($himpunan2 as $item)
          <div class="position-relative">
            <a href="adminedit-hmif1/{{$item->id}}" class="btn btn-warning position-absolute top-0 end-0">Edit</a>
            <img class="img-fluid" src="{{ asset('storage/image/' . $item->image2) }}">
          </div>
          @endforeach
        </div>
      </div>

      <div class="tab-pane fade" id="pills-bph2" role="tabpanel" aria-labelledby="pills-bph2-tab">
        <div class="container text-center px-5">
          @foreach ($himpunan2 as $item)
          <div class="position-relative">
            <a href="adminedit-hmif2/{{$item->id}}" class="btn btn-warning position-absolute top-0 end-0">Edit</a>
            <img class="img-fluid" src="{{ asset('storage/image/' . $item->image3) }}">
          </div>
          @endforeach
        </div>
      </div>

      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div class="card">
        @foreach ($himpunan2 as $item)
          <div class="card-header">
            <h5 class="card-title">Kontak Himpunan</h5>
          </div>
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <p>Instagram : <a href="{{$item->tautan1}}"style="color: blue">{{$item->kontak1}}</a></p>
              <p>Twitter : <a href="{{$item->tautan2}}"style="color: blue">{{$item->kontak2}}</a></p>
              <p>Facebook : <a href="{{$item->tautan3}}"style="color: blue">{{$item->kontak3}}</a></p>
              <p>Line : <a href="{{$item->tautan4}}"style="color: blue">{{$item->kontak4}}</a></p>
              <p>Website : <a href="{{$item->tautan5}}"style="color: blue">{{$item->kontak5}}</a></p>
            </div>
            <a href="adminedit-kontakhmif/{{$item->id}}" class="btn btn-warning">Edit</a>
          </div>
          @endforeach
        </div>
      </div>

    </div>
  </div>

@endsection