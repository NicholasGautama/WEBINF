@extends('layouts.main')

@section('container')
<style>

 .carousel-image {
    max-width: 150px; /* Adjust this value as per your requirement */
    max-height: 150px;
    margin-left: 25% ;
    margin-right: 25% ; /* Centers the image horizontally */
    }
    .carousel-item{
        
        justify-content: center;
        transition: transform 0.5 ease;
    }
    .carousel-caption h5{
      font-weight: bold;
      text-transform: uppercase;
    }

    .preload-carousel {
        visibility: hidden;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .preload-carousel.loaded {
        visibility: visible;
        opacity: 1;
    }

    .preload-image {
        display: none;
    }

    .container-custom-1{
        max-width: 350px;
        margin: 0 auto;
            
    }
    .carousel-control-prev,
    .carousel-control-next {
        background-color: rgba(0, 0, 0, 0.5); /* Background color of arrows */
        color: white; /* Color of arrow icon */
        border: none;
        margin-top: 25%;
        height: 50px;
        border-radius: 100%; /* Make the buttons circular */
        font-size: 4px; /* Size of arrow icon */
        cursor: pointer;
        padding: 5px;
        transition: background-color 0.3s ease; /* Smooth transition for hover effect */
    }
    .nav-item{
        width: 25%;
        margin: auto;
        text-align:center;
    }
    .carousel-control-prev:hover,
    .carousel-control-next:hover {
        background-color: rgba(0, 0, 0, 0.8); /* Darken background color on hover */
    }
    .divider {
    border: none;
    height: 1px; /* Adjust thickness as needed */
    background-color: #000; /* Adjust color as needed */
    margin: 20px 0; /* Adjust margin spacing as needed */
    }
    .tab-fane{
        text-align:justify;
    }
    table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
            text-align: center; /* Teks di seluruh tabel menjadi pusat */
        }

        th, td {
            padding: 12px;
        }

        th {
            background-color: #f2f2f2;
        }
    .btn{
        max-width: auto;
        margin: auto;
        text-align: left;
        background-color: gray;
    }
    .title-adm{
        color: #4371ba;
        font-size: 25px;
        font-weight: bold;
    }
    .title-adm-2{
        color: #4371ba;
        font-size: 20px;
        font-weight: bold;
    }
    .card-header{
        background-color: white;
    }
    .table-2 {
        border-collapse: collapse; /* This removes the default space between table cells */
        border: none; /* This removes the border around the table */
        background-color:white;
    }
    .thead-2{
        background-color: white;
    }

    /* Optional: To remove borders on individual cells */
    .table-2 td, table th {
        border: none; /* This removes the border from table cells */
    }
    .cbody-2{
        background-color: #e6e6e6;

    }
    .gray{
        color: gray;
    }
</style>
<div class="container-fluid mt-5" style="font-family: 'Geologica', sans-serif; color: black;">
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px; color:#023047;">Admission</h3>
    </div>
</div>
<div class="container" style="font-family: 'Geologica', sans-serif; color: black;">
        <ul class="nav nav-pills mb-3" id="myTab" role="tablist" style="font-family: 'Geologica', sans-serif; color: black; background-color: #023047">
            <li class="nav-item">
                <a class="nav-link active" id="akademik-tab" data-toggle="tab" href="#akademik" role="tab" aria-controls="akademik" aria-selected="true" >Academic Pathway</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tesbea-tab" data-toggle="tab" href="#tesbea" role="tab" aria-controls="tesbea" aria-selected="false">Scholarship Test</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="beasiswa-tab" data-toggle="tab" href="#beasiswa" role="tab" aria-controls="beasiswa" aria-selected="false">Scholarship Pathway</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tesreg-tab" data-toggle="tab" href="#tesreg" role="tab" aria-controls="tesreg" aria-selected="false">Reguler Test</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <!-- Tab jalur akademik -->
            <div class="tab-pane fade show active" id="akademik" role="tabpanel" aria-labelledby="akademik-tab">
            <div class="card">
                @foreach ($admission1 as $admis1)
                <div class="card-header">
                    <p class="title-adm">{{$admis1 -> judul1 }}</p>
                </div>
                <div class="card-body">
                        <p>{{$admis1 -> isi1 }}</p>
                        <hr class="divider">
                    <p class="title-adm-2"> {{$admis1 -> judul2}}</p>
                    <p><b>{{$admis1 -> isi2 }}</b></p>
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 33%;">Study Program</th>
                                <th style="width: 33%;">Main Subjects Assessed</th>
                                <th style="width: 34%;">Vocational/High School/Language Major</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($admission1table as $admt1)
                        <tr>
                            <td>{{$admt1 -> study}}</td>
                            <td>{{$admt1 -> main}}</td>
                            <td>{{$admt1 -> major}}</td>    
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <p class="gray">
                        <?php
                        $paragraphs = explode('//', $admis1->isi3);
                        $counter = 1;
                        foreach ($paragraphs as $paragraph) {
                            if (trim($paragraph) != '') {
                                $formattedParagraph = preg_replace('/\*\*(.*?)\*\*/', '<strong style="">$1</strong>', $paragraph);
                                if (count($paragraphs) > 2) {
                                    '.';
                                }
                                echo $formattedParagraph . '<br>';
                                $counter++;
                            }
                            }
                        ?>
                    </p>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Tab Tes Beasiswa -->
            <div class="tab-pane fade" id="tesbea" role="tabpanel" aria-labelledby="tesbea-tab">
            <div class="card">
                @foreach($admission2 as $adm2)
                <div class="card-header">
                    <p class="title-adm">{{$adm2 -> judul1}}</p>
                </div>
                <div class="card-body">
                <p>{{$adm2 -> isi1}}</p>
                <hr class="divider">
                <a href="https://www.umn.ac.id/event/umninfosession/"><img src="{{ asset('storage/Admission/'.$adm2 -> image)}}" style="margin-left:20%; margin-right:20%;"></a>
                <hr class="divider">
                <p  class="title-adm-2"> {{$adm2 -> judul2}} </p>
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 25%;">School Year</th>
                                <th style="width: 25%;">Day</th>
                                <th style="width: 25%;">Date</th>
                                <th style="width: 25%;">Time</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($admission2table as $admt2)
                        <tr data-semester="1">
                            <td>{{$admt2 -> year}}</td>
                            <td>{{$admt2 -> day}}</td>
                            <td>{{$admt2 -> date}}</td>
                            <td>{{$admt2 -> time}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                <p><br>{{$adm2 -> isi2}}</p>
                </div>
            </div>@endforeach
            
            </div>
            <!-- Tab Jalur Beasiswa -->
            <div class="tab-pane fade" id="beasiswa" role="tabpanel" aria-labelledby="beasiswa-tab" style=" margin: auto;">
            <div class="card">
                <div class="card-header">
                <p class="title-adm">Scholarship Pathway</p>
                </div>
                <div class="card-body">
                <p class="title-adm-2">Academic Achievement Scholarship Pathway</p>
                <p>The Academic Achievement scholarship pathway is given to high school students in grade XII who have academic achievements in grade XI. UMN provides a tuition fee waiver based on the rank obtained by the student when the student was in class XI semester 2.</p>
                <!-- Button trigger collapse -->
                <button class="btn btn-primary btn-block mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSatu" aria-expanded="false" aria-controls="collapseSatu">
                <i class="fas fa-plus"></i> &nbsp; Academic Achievement Scholarship Pathway Requirements:
                    </button>

                    <!-- Collapsible content -->
                    <div class="collapse false" id="collapseSatu">
                    <div class="card card-body cbody-2">
                       <b>Scholarship Requirements:</b>
                       <br><p> 1. <a href="/admission" style="color:blue;">General Academic Requirements</a> </p>
                       <p>2. Rating Requirements
                        <br>
                        <table class="table-2">
                            <thead class="thead-2">
                                <tr>
                                    <th colspan="2" style="width: 50%;">Department/School Rank</th>
                                    <th colspan="2" style="width: 50%;">Class Rank</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>I and II </td>
                                <td> 100% </td>
                                <td>I and II </td>
                                <td> 50% </td>
                            </tr>
                            <tr>
                                <td>III,IV,V </td>
                                <td> 75% </td>
                                <td>III, IV, V </td>
                                <td> 30% </td>
                            </tr>
                            <tr>
                                <td>VI,VII,VIII,IX,X </td>
                                <td>60% </td>
                            </tr>
                            </tbody>
                        </table>
                        <br>*) Only applies to majors that have more than 1 parallel class; if only 1 class, the cumulative score will be compared with the cumulative scores of students in other majors.
                        <hr class="divider">
                        <br> <b>Enrollment Procedure:</b>
                        <br><p>1. Fill out the registration form or register online at <a href="https://pmb.umn.ac.id/" style="color:blue;">Registration-form </a>
                            <br>2. Attach: photocopy of grade X and XI report card (Semester 1-4) and Principal's Certificate regarding the rank obtained in grade XI semester 2.</p>
                        
                    </div>
                    </div>
                <hr class="divider">

                <p class="title-adm-2">Sports and Arts Scholarship Pathway</p>
                <p>UMN provides scholarships in the form of reduced tuition fees for students who have sports and arts achievements.</p>
                <!-- Button trigger collapse -->
                <button class="btn btn-primary btn-block mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDua" aria-expanded="false" aria-controls="collapseDua">
                <i class="fas fa-plus"></i> &nbsp; Sports and Arts Scholarship Pathway Requirements
                    </button>

                    <!-- Collapsible content -->
                    <div class="collapse false" id="collapseDua">
                    <div class="card card-body cbody-2">
                    <b>Scholarship Requirements:</b>
                       <br><p> 1. <a href="/admission" style="color:blue;">General Academic Requirements</a> </p>
                       <p>2. Have won a competition, at least third place at the provincial level for individual or group/team sports or arts, as evidenced by a winning certificate.
                       <hr class="divider">
                       <br><br> <b>Enrollment Procedure:</b>
                        <br><p>1. Fill out the registration form or register online at <a href="https://pmb.umn.ac.id/" style="color:blue;">Registration-form </a>
                            <br>2. Send attachments:
                            <p style="margin-left: 2%;">a. Photocopy of report cards of class X, XI and XII (Semester 1)
                            <br>b. Copy of student card / ID card (1 sheet)
                            <br>c. Photocopy of Family Card (1 sheet)
                            <br>d. Statement Letter from the Principal.
                            <br>e. Photocopy of championship certificate.
                            <br>f. Passport photo (4×6) latest color (2 sheets). </p>
                    </div>
                    </div>
                <hr class="divider">

                <p class="title-adm-2">Science Olympiad Scholarship Pathway</p>
                <p>This scholarship is in the form of cutting tuition fees given to high school / vocational high school students who have the achievement of winning medals at the National and International Science Olympiad.</p>
                <!-- Button trigger collapse -->
                <button class="btn btn-primary btn-block mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTiga" aria-expanded="false" aria-controls="collapseTiga">
                <i class="fas fa-plus"></i> &nbsp; Science Olympiad Scholarship Pathway Requirements (OSN):
                    </button>

                    <!-- Collapsible content -->
                    <div class="collapse false" id="collapseTiga">
                    <div class="card card-body cbody-2">
                    <b>Persyaratan Beasiswa:</b>
                       <br><p> 1. <a href="/admission" style="color:blue;">General Academic Requirements</a> 
                       <br> 2. Become OSN participants representing the province of origin in 2022, 2021 and 2020, for the subjects: Biology Physics, Chemistry, Computer and Astronomy.
                        <br> 3. Graduate high school in 2022 (high school accreditation A)
						</p>
						<table class="table-2">
                        <thead class="thead-2">
                            <tr>
                                <th style="width: 50%;">OSN Scholarship awarded by UMN</th>
                                <th style="width: 50%;">Scholarships for International Olympiad participants</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
								1. For OSN participants (no medals): <br>
								a. Accepted without test <br>
								b. Reduction of tuition fee by 50% 
							</td>
                            <td>
								1. For bronze medalists: <br>
								a. Accepted without test <br>
								b. Full tuition fee reduction of 100%
							</td>
                        </tr>
                        <tr>
                            <td>
								2. For bronze medalists: <br>
								a. Accepted without test <br>
								b. Reduction of tuition fee by 75%
							</td>
                            <td>
								2. For silver medalists: <br>
								a. Accepted without test <br>
								b. Full tuition fee reduction of 100%
							</td>
                        </tr>
                        <tr>
                            <td>
								3. For silver medalists: <br>
								a. Accepted without test  <br>
								b. Reduction of tuition fee by 100%
							</td>
                            <td>
								3. For gold medalists: <br>
								a. Accepted without test <br>
								b. Full tuition fee reduction of 100%
							</td>
                        </tr>
						<tr>
							<td>
								4. For gold medalists: <br> 
								a. Accepted without test <br>
								b. Reduction of tuition fee by 100% <br>
								c. Waiver of tuition fee for the first semester
							</td>
							<td>
							</td>
						</tr>
                        </tbody>
                    </table>
                      <hr class="divider">
                       <br><br> <b>Enrollment Procedure:</b>
                        <br><p>1. Fill out the registration form or register online at <a href="https://pmb.umn.ac.id/" style="color:blue;">Registration-form </a>
                            <br>2. Send attachments:
                            <p style="margin-left: 2%;">a. Photocopy of report cards of class X, XI and XII (Semester 1)
                            <br>b. Copy of student card / ID card (1 sheet)
                            <br>c. Photocopy of Family Card (1 sheet)
                            <br>d. Statement Letter from the Principal.
                            <br>e. Copy of certificate of proof of participation / championship in OSN (1 sheet)
                            <br>f. Passport photo (4×6) latest color (2 sheets). </p>
                    </div>
                    </div>
                <hr class="divider">

                <p class="title-adm-2">Scholarship Pathway for Children of Teachers/Principals/Employees/Staff of Schools</p>
                <p>As a form of appreciation for the dedication of teachers and employees/staff in educating the nation's children, UMN provides scholarships in the form of a 50% reduction in tuition fees for children of teachers/principals and a 30% reduction in tuition fees for children of employees/staff in public/private SMA/SMK schools who wish to continue their education at UMN.</p>
                <!-- Button trigger collapse -->
                <button class="btn btn-primary btn-block mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEmpat" aria-expanded="false" aria-controls="collapseEmpat">
                <i class="fas fa-plus"></i> &nbsp; Academic Achievement Scholarship Pathway Requirements:
                    </button>

                    <!-- Collapsible content -->
                    <div class="collapse false" id="collapseEmpat">
                    <div class="card card-body cbody-2">
                    <br><p> 1. <a href="/admission" style="color:blue;">General Academic Requirements</a> </p>
                       <p>2. <b>Teacher/principal's child scholarship requirements:</b>
                        <br>One of the parents (father or mother) is a teacher as evidenced by a letter of appointment / assignment as a teacher from the Foundation or Education Office (for civil servant teachers) who has worked as a teacher / principal for at least 5 years and is still active as a teacher / principal at the time of registration.</p>
                        <p>3. <b>Staff/School employee child scholarship requirements</b>
                        <br>One of the parents (father or mother) is an employee / staff as evidenced by a letter of appointment / assignment as an employee / staff at SMA / SMK Negeri / Private from the Foundation or Education Office (for civil servants) who have worked as employees / staff for at least 5 years and are still active as employees / staff at the time of registration.</p>
                       <hr class="divider">
                       <br> <b>Enrollment Procedure:</b>
                        <br><p>1. Fill out the registration form or register online at <a href="https://pmb.umn.ac.id/" style="color:blue;">Registration-form </a>
                            <br>2. Attach a photocopy: X, XI grade report card, family card, letter of appointment / assignment as a teacher (father or mother) or letter of appointment / assignment as an employee / staff at a public / private high school / vocational school (father or mother).</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <!-- Tab Tes Reguler -->
            <div class="tab-pane fade" id="tesreg" role="tabpanel" aria-labelledby="tesreg-tab">
            <div class="card">
            <div class="card-header">
                <p class="title-adm">Reguler Test Pathway</p>
            </div>
            <div class="card-body">
                @foreach($admission4 as $key4)
                <p>
                <?php
                  $paragraphs = explode('//', $key4->isi);
                  $counter = 1;
                  foreach ($paragraphs as $paragraph) {
                      if (trim($paragraph) != '') {
                          $formattedParagraph = preg_replace('/\*\*(.*?)\*\*/', '<strong style="">$1</strong>', $paragraph);
                          if (count($paragraphs) > 2) {
                              '.';
                          }
                          echo $formattedParagraph . '<br><br>';
                          $counter++;
                      }
                    }
                ?>
              </p>
                            <br>
              <p>
                <?php
                  $paragraphs = explode('//', $key4->alamat);
                  $counter = 1;
                  foreach ($paragraphs as $paragraph) {
                      if (trim($paragraph) != '') {
                          $formattedParagraph = preg_replace('/\*\*(.*?)\*\*/', '<strong style="">$1</strong>', $paragraph);
                          if (count($paragraphs) > 2) {
                              '.';
                          }
                          echo $formattedParagraph . '<br>';
                          $counter++;
                      }
                    }
                ?>
              </p>

                <br><p>Registration: <a style="color:blue;" href="{{$key4 -> link}}">Online Forms</a>
                @endforeach
            </div>
            </div>
            </div>
        </div>
</div>



        <div class="container-fluid mt-5" style="font-family: 'Geologica', sans-serif; color: #023047;" >
            <div class="container-fluid my-5">
                <p class="text-center" style="font-size: 35px; color: #023047;">Online Registration Procedure</p>
            </div>
        </div>
        <div class="container-custom-1" style="font-family: 'Geologica', sans-serif; color: black;">
            <script>
                // JavaScript to remove 'preload-carousel' class after all images are loaded
                window.addEventListener('load', function() {
                    document.querySelector('.preload-carousel').classList.add('loaded');
                });

                // JavaScript to remove 'loaded' class from images after they are loaded
                document.addEventListener('DOMContentLoaded', function() {
                    const images = document.querySelectorAll('.carousel-item img');
                    images.forEach(function(img) {
                        img.onload = function() {
                            img.classList.add('loaded');
                        };
                    });
                });
            </script>
            
            <div id="carouselExampleControls" class="carousel slide preload-carousel">

                <div class="carousel-inner">
                    @foreach($images as $key => $image)
                    
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <a href="{{ $links[$key] }}" >
                          <img src="{{ asset('storage/images/' . $image) }}" class="d-block w-100 carousel-image" alt="...">
                        </a>
                          <div class="caption">
                            <p class="text-justify">{{$caption[$key]}}</p>
                          </div>

                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


<script>
    var carousel = document.getElementById('carouselExampleControls');
    var items = carousel.querySelectorAll('.carousel-item');
    var currentIndex = 0;

    function showItem(index) {
        items[currentIndex].classList.remove('active');
        items[index].classList.add('active');
        currentIndex = index;

        // Hide or show prev and next buttons based on current index
        var prevButton = carousel.querySelector('.carousel-control-prev');
        var nextButton = carousel.querySelector('.carousel-control-next');

        if (currentIndex === 0) {
            prevButton.style.display = 'none';
        } else {
            prevButton.style.display = 'block';
        }

        if (currentIndex === items.length - 1) {
            nextButton.style.display = 'none';
        } else {
            nextButton.style.display = 'block';
        }
    }

    document.querySelector('.carousel-control-prev').addEventListener('click', function() {
        var newIndex = currentIndex === 0 ? items.length - 1 : currentIndex - 1;
        showItem(newIndex);
    });

    document.querySelector('.carousel-control-next').addEventListener('click', function() {
        var newIndex = currentIndex === items.length - 1 ? 0 : currentIndex + 1;
        showItem(newIndex);
    });

    // Initially show or hide prev and next buttons
    showItem(currentIndex);
</script>

@endsection