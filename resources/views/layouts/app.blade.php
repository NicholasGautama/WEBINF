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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100;400&family=Lato:wght@900&display=swap" rel="stylesheet">
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
<nav class="navbar navbar-expand-lg navbar" style="background-color: #023047; font-family: 'Geologica', sans-serif;">
    <div class="container px-5">
        <a href="{{ url('/') }}"><img class="img-fluid navbar-brand mr-0" src="{{ asset('images/LogoUMN-IF.png') }}" style="height: 100%; max-height: 90px; object-fit: cover;"/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ url('/adminpage') }}">HOME</a>
        </li>
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
              Hello, {{ Auth::user()->name }}!
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>

    <div style="min-height: 400px;">  
        <main class="container mt-4">
            @yield('content')
        </main>
    </div>

    <footer class="bd-footer py-5 mt-5" style="background-color: #023047; font-family: 'Geologica', sans-serif;">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-3 mb-3">
            <img class="img-fluid" src="{{ asset('images/LogoIF.png') }}" alt="Logo UMN-IF">
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


    <div class="row" style="background-color: #FAB500; align-items: center; font-family: 'Geologica', sans-serif;">
        <div class="col-lg-12">
            <p class="text-center" style="margin-top: 5px; margin-bottom: 5px; ">© 2023 Program Studi Informatika, Universitas Multimedia Nusantara</p>
        </div>
    </div>
        
      
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>

    
  </body>

  </html>