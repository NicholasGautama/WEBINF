<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="https://www.umn.ac.id/wp-content/uploads/2020/07/favicon-umn.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="https://sp-ao.shortpixel.ai/client/to_auto,q_glossy,ret_img,w_180,h_180/https://www.umn.ac.id/wp-content/uploads/2020/07/favicon-umn.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <style>
        .dropdown-toggle::after {
            content: none;
        }
    </style>
    <title>Informatika - Universitas Multimedia Nusantara</title>
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar" style="background-color: #014983;">
      <div class="container px-5">
          <a href="{{ url('/') }}"><img class="img-fluid navbar-brand" src="{{ asset('images/UMN.png') }}" height="64" width="100"/></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('/') }}">HOME</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    ABOUT
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ url('sekilas') }}">About Informatics UMN</a></li>
                    <li><a class="dropdown-item" href="{{ url('visimisi') }}">Vision and Mission</a></li>
                    <li><a class="dropdown-item" href="{{ url('pl') }}">Graduate Profile</a></li>
                    <li><a class="dropdown-item" href="{{ url('cpl') }}">Expected Learning Outcomes</a></li>
                  </ul>
                </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  ACADEMIC
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ url('kalender') }}">Academic Calendar</a></li>
                  <li><a class="dropdown-item" href="{{ url('kurikulum') }}">Curriculum</a></li>
                  <li><a class="dropdown-item" href="{{ url('dosen') }}">Lecturer & Staff</a></li>
                  <li><a class="dropdown-item" href="{{ url('sarana') }}">Infrastructure</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    RESEARCH & SERVICE
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ url('penelitian') }}">Research</a></li>
                    <li><a class="dropdown-item" href="{{ url('pengabdian') }}">Community Dedication</a></li>
                    <li><a class="dropdown-item" href="{{ url('inovasi') }}">Innovation</a></li>
                    <li><a class="dropdown-item" href="{{ url('sertifikasi') }}">Certification</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    STUDENT
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ url('himpunan-mahasiswa') }}">Informatics Student Association</a></li>
                    <li><a class="dropdown-item" href="{{ url('prestasi') }}">Achievement</a></li>
                    <li><a class="dropdown-item" href="{{ url('alumni') }}">Alumni Association</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    NEWS
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ url('berita') }}">News</a></li>
                    <li><a class="dropdown-item" href="{{ url('pengumuman') }}">Announcement</a></li>
                  </ul>
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ url('kontak') }}">CONTACT</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="#">DUAL DEGREE</a>
                    </li>
            </ul>
        </div>
      </div>
  </nav>
  <!-- End Navigation -->
      <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Tambah Pengabdian</h3>
        </div>
      <div class="bootstrap-table bootstrap4 m-5">
        <div class="row">
          <div class="card">
            <div class="card-body">
            
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIDN</label>
    <input type="number" name="nidn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Dosen</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kegiatan PKM</label>
    <input type="text" name="namakegiatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Keterangan</label>
    <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
          </div>

      
  </table>
        </div>
        <footer class="bd-footer py-5 mt-5" style="background-color: #014983;">
          <div class="container py-5">
            <div class="row">
              <div class="col-lg-3 mb-3">
                <h2>UNIVERSITAS MULTIMEDIA NUSANTARA</h2>
                <ul class="list-unstyled small text-muted">
                  <li class="mb-2"><p style="color: white">Jl. Boulevard, Gading Serpong, Kel. Curug Sangereng, Kec. Kelapa Dua, Kab. Tangerang, Prop. Banten, Indonesia<br> (T)+62-21.5422.0808 (F)+62-21.5422.0800<br> e-mail: marketing@umn.ac.id</p></li>
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
                  <li class="mb-2"> <a href="https://lppm.umn.ac.id/">LPPM UMN</a></li>
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
                  
      
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>

  </body>
</html>