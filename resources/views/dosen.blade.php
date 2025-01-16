@extends('layouts.main')

@section('container')
  <!-- End Navigation -->
  <div class="container-fluid my-5" style="font-family: 'Geologica', sans-serif; color: black">
    <h3 class="text-center" style="font-size: 50px">Lecturer & Staff</h3>
  </div>

  <div class="container">
    <form action="{{ url('dosen') }}" method="GET" class="d-flex mb-4">
        <input name="query" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="{{ request('query') }}" style="height: 50px;">
        <button class="btn btn-primary" type="submit" style="background-color: #023047; color: #FFFFFF; height: 50px; line-height: 0; padding: 10 10px;">
            Search
        </button>
    </form>
  </div>

  <style>
    .iframe-container {
      border: 1px solid #ddd;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }
  
    .card-body {
      max-height: {{ request()->has('query') && request('query') != '' ? '500px' : '300px' }};
      overflow-y: auto;
      overflow-x: hidden;
    }
  
    .btn-custom {
      background-color: #023047;
      color: #FFFFFF;
      border: none;
      border-radius: 20px;
      padding: 5px 10px;
      font-size: 14px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      margin-top: 5px;
    }
  </style>

  <!-- Lecturer and Staff Content -->
  <div class="container my-5" style="font-family: 'Geologica', sans-serif; color: black">
    <div class="container">
      @foreach ($dosen->chunk(2) as $chunk)
      <div class="row">
        @foreach ($chunk as $item)
        <div class="col">
          <div class="card mb-3 border-1 rounded-3 shadow-sm" style="height: auto;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ asset('storage/Lecturer/' . $item->image) }}" class="img-thumbnail rounded-start border-0" alt="Lecturer Image" style="width: 100%; height: 100%; object-fit: cover;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 style="width: 250px; word-wrap: break-word">{{$item->nama}}</h5>
                  <p class="card-text">Email: {{$item->kontak}}</p>
                  <p class="card-text">Scientific Field:</p>
                  @if (strpos($item->matkul, '*') !== false)
                    <ul>
                      @foreach (explode('*', $item->matkul) as $point)
                        @if (trim($point) !== '')
                          <li>{{ trim($point) }}</li>
                        @endif
                      @endforeach
                    </ul>
                  @else
                    <p>{{$item->matkul}}</p>
                  @endif
					
				  <p class="card-text">Research:</p>
					@if (!empty($item->research))
						@if (strpos($item->research, '*') !== false)
							<ul>
								@foreach (array_filter(explode('*', $item->research)) as $point)
									<li>{!! nl2br(e(str_replace('//', "\n", trim($point)))) !!}</li>
								@endforeach
							</ul>
						@else
							<p>{!! nl2br(e(str_replace('//', "\n", $item->research))) !!}</p>
						@endif
					@endif

                  <p class="card-text">Lecture National ID: {{$item->nidn}}</p>
                  <a href="{{$item->tautan_sinta}}" class="btn btn-custom">Sinta</a>
                  <a href="{{$item->tautan_scopus}}" class="btn btn-custom">Scopus</a>
                  <a href="#" class="btn btn-custom view-pdf-link" data-pdf-url="{{ asset('storage/StaffHandbook/' . $item->staff_handbook) }}">
                    Staff Handbook
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      @endforeach
    </div>

    <!-- Modal for PDF Display -->
    <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pdfModalLabel">Staff Handbook</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <embed id="pdfViewer" src="" type="application/pdf" width="100%" height="500px">
                </div>
            </div>
        </div>
    </div>
  </div>

  <!-- jQuery & Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- JavaScript to Handle Modal Opening -->
  <script>
  $(document).ready(function () {
      $('.view-pdf-link').on('click', function (e) {
          e.preventDefault();

          // Retrieve the PDF URL from the data attribute
          var pdfUrl = $(this).data('pdf-url');
          $('#pdfViewer').attr('src', pdfUrl);

          // Display the modal
          $('#pdfModal').modal('show');
      });

      // Close the modal
      $('.close').on('click', function () {
          $('#pdfModal').modal('hide');
      });
  });
  </script>

  
@endsection
