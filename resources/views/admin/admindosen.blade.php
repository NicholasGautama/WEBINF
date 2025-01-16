@extends('layouts.admin')

@section('content')
    <style>
        .iframe-container {
            border: 1px solid #ddd;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
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

    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Lecturer & Staff</h3>

        @if (Auth::user()->role_id == 1 && $dosen->isEmpty())
            <div class="container">
                <div class="alert alert-info mt-3 d-flex justify-content-between align-items-center" role="alert">
                    <span>Data Anda belum lengkap. Mohon lengkapi data Anda untuk melanjutkan. Mohon isi bagian data kontak Anda sesuai email yang Anda daftarkan.</span>
                    <a href="adminadd-dosen" class="btn btn-primary">Tambah</a>
                </div>
            </div>
        @elseif (Auth::user()->role_id != 1)
            <div class="container">
                <div class="bootstrap-table bootstrap4 m-5">
                    <a href="adminadd-dosen" class="btn btn-primary">Tambah</a>
                </div>
                <form action="{{ url('admindosen') }}" method="GET" class="d-flex mb-4 align-items-center">
                    <input name="query" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="{{ request('query') }}" style="height: 50px;">
                    <button class="btn btn-primary" type="submit" style="background-color: #023047; color: #FFFFFF; height: 50px; line-height: 1;">
                        Search
                    </button>
                </form>
            </div>
        @endif
    </div>

    <div class="container my-5">
        <div class="container">
            @foreach ($dosen->chunk(2) as $chunk)
                <div class="row">
                    @foreach ($chunk as $item)
                        <div class="col">
                            <div class="card mb-3 border-1 rounded-3 shadow-sm" style="height: auto;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('storage/Lecturer/' . $item->image) }}" class="img-thumbnail rounded-start border-0" alt="..." style="padding: 1.5em">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 style="word-wrap: break-word">{{ $item->nama }}</h5>
                                            <p class="card-text">Kontak : {{ $item->kontak }}</p>
                                            <p class="card-text">Mata Kuliah yang Diampu:</p>
                                            @if (strpos($item->matkul, '*') !== false)
                                                <ul>
                                                    @foreach (explode('*', $item->matkul) as $point)
                                                        @if (trim($point) !== '')
                                                            <li>{{ trim($point) }}</li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            @else
                                                <p>{{ $item->matkul }}</p>
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

                                            <p>NIDN Dosen : {{ $item->nidn }}</p>
                                            <p>ID SINTA : <a href="{{ $item->tautan_sinta }}" style="color:black">{{ $item->sinta }}</a></p>
                                            <p>Scopus : <a href="{{ $item->tautan_scopus }}" style="color:black">{{ $item->scopus }}</a></p>
                                            <p>Staff Handbook: 
                                                <a href="#" class="view-pdf-link" data-pdf-url="{{ asset('storage/StaffHandbook/' . $item->staff_handbook) }}" style="color:black">
                                                    {{ $item->staff_handbook }}
                                                </a>
                                            </p>
                                        </div>
										<div class="mt-auto border-top">
										  <div class="d-flex justify-content-between align-items-center">
											<div class="btn-group">
											  <a href="adminedit-dosen/{{$item->id }}" class="btn btn-sm btn-warning me-2">Edit</a>
											  <a href="admindelete-dosen/{{$item->id }}" class="btn btn-sm btn-danger">Delete</a>
											</div>
											<small class="text-muted" style="margin-left: 1em; margin-right: 1em;">
											  Last updated {{ $item->updated_at ? $item->updated_at->diffForHumans() : '-' }}
											</small>     
										  </div>
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
        <div class="modal fade" id="pdfModal" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="pdfModalLabel">Staff Handbook</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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

    <!-- jQuery and Bootstrap JS (Bootstrap 4 Compatible) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JavaScript to Handle Modal Opening -->
    <script>
        $('.view-pdf-link').on('click', function (e) {
            e.preventDefault();

            // Ambil URL PDF dari data atribut
            var pdfUrl = $(this).data('pdf-url');
            $('#pdfViewer').attr('src', pdfUrl);

            // Tampilkan modal
            $('#pdfModal').modal('show');
        });

        // Menutup modal dengan tombol "close"
        $('.close').on('click', function () {
            $('#pdfModal').modal('hide');
        });
    </script>
@endsection
