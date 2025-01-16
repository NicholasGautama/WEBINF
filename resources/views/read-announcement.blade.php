@extends('layouts.app1')

@section('content')
<style>
  .background-image-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
  }

  .background-image {
    min-width: 100%;
    height: 100%;
    display: block;
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100% auto;
    opacity: 0.1;
    transition: transform 0.3s;
  }

  @media (max-width: 768px) {
    .background-image {
      transform-origin: center;
    }
  }

  @media (max-width: 768px) {
    .background-image:hover {
      transform: scale(1.2);
    }
  }

  .btn-primary {
    background-color: #023407;
    color: #FFFFFF;
  }

  .btn-primary:hover {
  background-color: #ffb703;
  color: #023407;
  transition: background-color 0.3s ease, color 0.3s ease;
}

</style>




<div class="position-relative">

<div class="background-image-container">
  <img src="{{ asset('images/GedungUMN.png') }}" alt="Gedung UMN" class="background-image">
</div>
<!-- Page content-->
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px;font-family: 'Geologica', sans-serif;">Pengumuman</h3>
    </div>
    <!-- notice details -->
    <section class="section" style="font-size: 20px;text-align: justify;">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="text-center">
                        <div class="p-4 text-white" style="background-color: #ffb703; color: #ffffff; max-width: 300px;font-family: 'Geologica', sans-serif;">
                            <span class="h1 d-block" >{{ \Carbon\Carbon::parse($announcement->tanggal)->format('d') }}</span>{{ \Carbon\Carbon::parse($announcement->tanggal)->format('F Y') }}
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div>
                        <p class="h4 mt-0 mb-3" style="font-family: 'Geologica', sans-serif;">{{ $announcement->judul }}</p>
                        <p style="font-family: 'Open Sans', sans-serif; font-size: 15px;">
                            @php
                                $isi = str_replace('///', '<br><br>', $announcement->isi); 
                                $isi = str_replace('//', '<br>', $isi); 
                                $isi = str_replace('--', '<br> -', $isi); 
                            
                                echo $isi;
                            @endphp
                        </p>
                        <br>
                        <p style="font-family: 'Open Sans', sans-serif; font-size: 15px;">
                            @php
                                $isi = str_replace('///', '<br><br>', $announcement->keterangan); 
                                $isi = str_replace('//', '<br>', $isi); 
                                $isi = str_replace('--', '<br> -', $isi); 
                            
                                echo $isi;
                            @endphp
                        </p>
                        <p style="font-family: 'Open Sans', sans-serif; font-size: 15px;">Atau kamu bisa kunjungi tautan berikut : <a href="https://certiport.pearsonvue.com/Certifications/ITSpecialist/Certification/Certify" style="color: blue">Click Here</a><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection