@extends('layouts.admin')

@section('content')
  <div class="container">
    @foreach ($ukm2 as $item)
    <div class="container-fluid my-5">
      <h3 class="text-center" style="font-size: 50px">Student Association</h3>
      <a href="adminedit-logoukm/{{$item->id}}" class="btn btn-warning">Edit</a>
    </div>
    <div class="container-fluid text-center">
      <a href="https://uscope.umn.ac.id/activities">
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
        <a class="nav-link" id="pills-program-tab" data-toggle="pill" href="#pills-program" role="tab" aria-controls="pills-program" aria-selected="false">Programs</a>
      </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">

      <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <!-- <a href="adminadd-profileukm" class="btn btn-primary">Tambah</a> -->
        @foreach ($ukm as $item1)
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="adminedit-profileukm/{{$item1->id }}" class="btn btn-warning">Edit</a>
            <!-- <a href="admindelete-profileukm/{{$item1->id }}" class="btn btn-danger">Delete</a> -->
        </div>
        <div>
            <p><strong style="font-size: 30px;">{{$item1->judul}}</strong></p>
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
      <!-- Details -->
      <div class="tab-pane fade" id="pills-program" role="tabpanel" aria-labelledby="pills-program-tab">
        <div class="container">
          <div class="bootstrap-table bootstrap4 mb-3">
            <a href="adminadd-programsukm" class="btn btn-primary">Tambah</a>
          </div>
        </div>
        <div class="container">
          <!-- Blog entries-->
          <div class="row">
            @foreach ($programsukm as $item)
            <div class="col-lg-4 d-flex align-items-stretch">
              <!-- Blog post-->
              <div class="card mb-4 w-100">
              <a href="read-programsukm/{{$item->id }}"><img class="card-img-top"style="max-height:250px;" src="{{ asset('storage/ProgramsUkm/'.$item->image) }}" alt="..." /></a>
                <div class="card-body">
                  <h2 class="card-title h4">{{$item->judul}}</h2>
                  <p class="card-text overflow-hidden" style="text-overflow: ellipsis; white-space: nowrap;">{{$item->narasi}}</p>
                </div>
                <div class="mt-auto border-top">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="adminedit-programsukm/{{$item->id }}" class="btn btn-sm btn-warning me-2">Edit</a>
                      <a href="admindelete-programsukm/{{$item->id }}" class="btn btn-sm btn-danger">Delete</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End of Blog post-->
            </div>
            @endforeach
          </div>
        </div>  
      </div>
    </div>
</div>

@endsection