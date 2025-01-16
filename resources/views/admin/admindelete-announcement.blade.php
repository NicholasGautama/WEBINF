@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Delete Announcement</h3>
    </div>
    <div class="bootstrap-table bootstrap4 m-5">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <h3>Apakah Anda yakin ingin menghapus file berikut :</h3>
                    </div>
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-2">{{$announcement->judul}}</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">{{ date('d F Y', strtotime($announcement->tanggal)) }} </strong></div>
                            <!-- Post categories-->
                            <section class="mb-5">
                                <p class="h4 mt-0 mb-3 ">{{ $announcement->judul }}</p>
                                <p class="mb-9">
                                    @php
                                        $isi = str_replace('///', '<br><br>', $announcement->isi); 
                                        $isi = str_replace('//', '<br>', $isi); 
                                        $isi = str_replace('--', '<br> -', $isi); 
                                        
                                        // batasi hingga 250
                                        if (strlen($isi) > 250) {
                                            $isi = substr($isi, 0, 250) . '...';
                                        }
                                        
                                        echo $isi;
                                    @endphp
                                </p>
                            </section>
                            <form style="display: inline-block" action="/admindelete-announcement/{{$announcement->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        <a class="btn btn-primary" href="{{ url('adminannouncement') }}">Cancel</a>
                    </article>
                </div>
            </div> 
        </div>
    </div>
@endsection