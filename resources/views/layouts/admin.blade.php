<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="https://www.umn.ac.id/wp-content/uploads/2020/07/favicon-umn.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="https://sp-ao.shortpixel.ai/client/to_auto,q_glossy,ret_img,w_180,h_180/https://www.umn.ac.id/wp-content/uploads/2020/07/favicon-umn.png" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica&family=Golos+Text&family=Nunito:wght@200&family=Poppins&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>
      .dropdown-toggle::after {
        content: none;
      }

      .fixed-top {
        position: fixed;
        top: -100px;
        width: 100%;
        z-index: 1000;
        opacity: 0;
        box-shadow: none;
        transition: top 0.5s ease-in-out, opacity 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
      }

      .fixed-top.fade-in {
        top: 0;
        opacity: 1;
        transition-delay: 0.5s;
        transition-duration: 1s;
        box-shadow: 0 4px 8px rgba(0, 1, 1, 1);
      }

      body {
        padding-top: 0;
      }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function() {
        // Menambahkan atau menghapus kelas "fixed-top" saat di-scroll
        $(window).scroll(function() {
          var navbar = $('.navbar');
          var scrollTop = $(this).scrollTop();

          if (scrollTop > navbar.outerHeight()) {
            navbar.addClass('fixed-top');
            setTimeout(function() {
              navbar.addClass('fade-in');
            }, 100);
          } else {
            navbar.removeClass('fixed-top fade-in');
          }
        });
      });
    </script>
     
     <title>Informatika - Universitas Multimedia Nusantara</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar" style="background-color: #023047;  font-family: 'Geologica', sans-serif;">
    <div class="container px-5">
        <a href="{{ url('/') }}"><img class="img-fluid navbar-brand mr-0" src="{{ asset('images/LogoUMN-IF.png') }}" style="height: 100%; max-height: 90px; max-width: 125px; object-fit: cover;"/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          @php
              $userAccesses = Auth::user()->userAccesses()->first();
          @endphp

          @if ($userAccesses->home == 1)
              <a class="nav-link" aria-current="page" href="{{ url('/adminpage') }}">HOME</a>
          @endif
          @if ($userAccesses->about == 1)
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAbout" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      ABOUT
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownAbout">
                      <li><a class="dropdown-item" href="{{ url('adminsekilas') }}">About Informatics UMN</a></li>
                      <li><a class="dropdown-item" href="{{ url('adminvisimisi') }}">Vision and Mission</a></li>
                      <li><a class="dropdown-item" href="{{ url('admincpl') }}">Expected Learning Outcomes</a></li>
                      <li><a class="dropdown-item" href="{{ url('adminpl') }}">Graduate Profile</a></li>
                  </ul>
              </li>

          @endif
          @if ($userAccesses->academic == 1)
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAcademic" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      ACADEMIC
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownAcademic">
                      <li><a class="dropdown-item" href="{{ url('adminkalender') }}">Academic Calendar</a></li>
                      <li><a class="dropdown-item" href="{{ url('adminkurikulum') }}">Curriculum</a></li>
                      <li><a class="dropdown-item" href="{{ url('adminsarana') }}">Infrastructure</a></li>
                      <li><a class="dropdown-item" href="{{ url('adminprospect') }}">Current Prospect</a></li>
                      <li><a class="dropdown-item" href="{{ url('adminaward') }}">Awards Qualification</a></li>
                      <li><a class="dropdown-item" href="{{ url('adminmobility') }}">Mobility Program</a></li>
					  <li><a class="dropdown-item" href="{{ url('adminadmission') }}">Admission</a></li>
                  </ul>
              </li>
          @endif
          @if ($userAccesses->research == 1)
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownResearch" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      RESEARCH & SERVICE
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownResearch">
                      <li><a class="dropdown-item" href="{{ url('adminresearch')}}">Research</a></li>
                      <li><a class="dropdown-item" href="{{ url('adminpengabdian')}}">Community Dedication</a></li>
                      <li><a class="dropdown-item" href="{{ url('admininovasi')}}">Innovation</a></li>
                      <li><a class="dropdown-item" href="{{ url('adminsertifikasi')}}">Certification</a></li>
                  </ul>
              </li>
          @endif

          <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ url('admindosen') }}">LECTURE & STAFF</a>
          </li>
          
          
          @if ($userAccesses->student == 1)
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownStudent" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      STUDENT
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownStudent">
                      <li><a class="dropdown-item" href="adminhimpunan">Informatics Student Association</a></li>
                      <li><a class="dropdown-item" href="adminprestasi">Achievement</a></li>
                      <li><a class="dropdown-item" href="adminalumni">Alumni Association</a></li>
                      <li><a class="dropdown-item" href="adminukm">Student Activity Units</a></li>
                  </ul>
              </li>
          @endif
          @if(Auth::user()->role_id != 1)
          <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownJoint" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      JOINT DEGREE
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownJoint">
                      <li><a class="dropdown-item" href="adminjoint">Informatics Student Association</a></li>
                      <li><a class="dropdown-item" href="adminjointcoursedegree">Course in Joint Degree Program</a></li>
                  </ul>
              </li>
          @endif
          @if ($userAccesses->news == 1)
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownNews" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      NEWS
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownNews">
                      <li><a class="dropdown-item" href="adminberita">News</a></li>
                      <li><a class="dropdown-item" href="adminannouncement">Announcement</a></li>
                  </ul>
              </li>
          @endif
          @if ($userAccesses->contact == 1)
              <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="adminkontak">CONTACT</a>
              </li>
          @endif
                <li class="nav-item">
                    <span class="nav-link" style="border-right: 1px solid white; padding: 0 0px; height: 100%; margin: 0 10px;"></span>
                </li>

                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}!
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown5">
                            @if(Auth::user()->role_id == 2)
                                <li>
                                    <a class="dropdown-item" href="{{ route('alladmin') }}">Manage Admin Access</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('addadmin') }}">Add Administrator</a>
                                </li>
                                {{-- <li>
                                  <a class="dropdown-item" href="{{ route('updatedosenrole') }}">Update Dosen Role</a>
                                </li> --}}
                            @endif
                            <li>
                                
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endguest
                </ul>
            </div>
        </div>
    </nav>


    <div style="min-height: 600px;">  
            @yield('content')
    </div>

    <footer class="bd-footer py-5 mt-5" style="background-color: #023047; font-family: 'Geologica', sans-serif;">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-3 mb-3">
            <img class="img-fluid" src="{{ asset('images/LogoIF.png') }}" alt="LogoUMN-IF">
            <ul class="list-unstyled small text-muted">
              <li class="mb-2">
                <p style="color: white">
                  Jl. Boulevard, Gading Serpong, Kel. Curug Sangereng, Kec. Kelapa Dua, Kab. Tangerang, Prop. Banten, Indonesia<br>
                  (T)+62-21.5422.0808 (F)+62-21.5422.0800<br>
                  e-mail: marketing@umn.ac.id
                </p>
              </li>
            </ul>
          </div>
          <div class="col-6 col-lg-2 offset-lg-1 mb-3">
            <ul class="list-unstyled">
              <li class="mb-2"><a href="https://www.umn.ac.id/">UMN</a></li>
              <li class="mb-2"><a href="https://my.umn.ac.id/">MY UMN</a></li>
              <li class="mb-2"><a href="https://gapura.umn.ac.id/">GAPURA</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2 mb-3">
            <ul class="list-unstyled">
              <li class="mb-2"><a href="https://library.umn.ac.id/umnlibrary/">LIBRARY UMN</a></li>
              <li class="mb-2"><a href="https://ejournals.umn.ac.id/">JOURNAL UMN</a></li>
              <li class="mb-2"><a href="https://lppm.umn.ac.id/">LPPM UMN</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2 mb-3">
            <ul class="list-unstyled">
              <li class="mb-2"><a href="https://elearning.umn.ac.id/">E-LEARNING</a></li>
              <li class="mb-2"><a href="https://alumni.umn.ac.id/">KAMI UMN</a></li>
              <li class="mb-2"><a href="https://cdc.umn.ac.id/">CDC UMN</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <div class="row" style="background-color: #FAB500; align-items: center; font-family: 'Geologica', sans-serif; margin: auto;">
        <div class="col-lg-12">
            <p class="text-center" style="margin:auto; ">© 2024 Program Studi Informatika, Universitas Multimedia Nusantara</p>
        </div>
    </div>
 
 
      
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>

    
  </body>

  </html>