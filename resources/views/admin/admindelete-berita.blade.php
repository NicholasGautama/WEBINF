@extends('layouts.app1')

@section('content')
    <div class="bootstrap-table bootstrap4 m-5">
        <div class="row">
            <div class="card">
                <div class="card-body">
                <div class="bootstrap-table bootstrap4 m-5" style="margin: 0 50px;">

                        <div>
                            <div class="mb-3">
                                <h3>Apakah Anda yakin ingin menghapus file berikut :</h3>
                            </div>
                            <article>
                                <!-- Post header-->
                                <header class="mb-4">
                                    <!-- Post title-->
                                    <h1 class="fw-bolder mb-1">{{$berita->judul}}</h1>
                                    <!-- Post meta content-->
                                    <div class="text-muted fst-italic mb-2">{{ date('d F Y', strtotime($berita->tanggal)) }} by {{ $berita->penulis }}</strong></div>
                                    <!-- Post categories-->
                                    <div class="badge bg-secondary text-decoration-none link-light">{{$berita->kategori}}</div>
                                </header>
                                <!-- Preview image figure-->
                                <figure class="mb-4">
                                <img class="img-fluid rounded img-shdw" src="{{ asset('storage/Berita/'.$berita->image) }}" alt="..." />
                                </figure>
                                <!-- Post content-->
                                <section class="mb-5">
                                <p class="fs-5 mb-4" style="text-align: justify"><strong>{{strtoupper($berita->kota)}} – {{$berita->narasi}}</strong></p>
                                <p class="fs-5 mb-4" style="text-align: justify"><?php
                                    $paragraphs = explode('//', $berita->konten);
                                    $counter = 1;
                                    foreach ($paragraphs as $paragraph) {
                                        if (trim($paragraph) != '') {
                                            if (count($paragraphs) > 2) {
                                                '.';
                                            }
                                            echo $paragraph . '<br> <br>';
                                            $counter++;
                                        }
                                    }?>
                                </p>
                                </section>
                            </article>
                        </div>
                    </div>
                    <div class="mb-3">
                        <form style="display: inline-block" action="/admindelete-berita/{{$berita->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        <a class="btn btn-primary" href="{{ url('adminberita') }}">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection