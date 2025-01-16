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
                                    <h1 class="fw-bolder mb-1">{{$carousel->judul}}</h1>
                                </header>
                                <figure class="mb-4">
                                <img class="img-fluid rounded img-shdw" src="{{ asset('storage/Carousel/'.$carousel->image) }}" alt="..." />
                                </figure>
                                <!-- Post content-->
                                <section class="mb-5">
                                
                                </section>
                            </article>
                        </div>
                    </div>
                    <div class="mb-3">
                        <form style="display: inline-block" action="/admindelete-carousel/{{$carousel->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        <a class="btn btn-primary" href="{{ url('adminedit-carousel') }}">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection