@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Course Plan</h3>
    </div>
    <style>
        .yellow-background {
            background-color: #FEC24D;
        }
        .hidden-text {
            visibility: hidden;
            color: yellow;
        }
		 .elo-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .elo-explanation {
            width: 100%;
            max-width: 600px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .elo-column {
            width: 48%; /* Set to your desired width */
            text-align: justify;
            margin-bottom: 20px;
        }

        .elo-column h3 {
            text-align: justify;
        }

        .elo-column p {
            margin-bottom: 10px;
        }
        body {
            font-family: Arial, sans-serif;
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

        /* Add style for the cell that contains ELO explanations */
        td.elo-explanation {
            padding: 12px;
            text-align: left;
            vertical-align: top; /* Align explanations to the top */
        }

        /* Add style for green cells */
        td.green-cell {
            background-color: #FEC24D; /* Light green color */
        }

        /* Add style for hiding rows */
        .hide-row {
            display: none;
        }
    </style>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
		
        $(document).ready(function () {
            // Inisialisasi semester aktif
            var currentSemester = 1;
            showSemester(currentSemester);
			$('td:contains(" v ")').addClass('green-cell');
            // Tombol next semester
            $('#next-semester').click(function () {
                if (currentSemester < 8) { // Ganti 4 dengan jumlah semester yang ada
                    currentSemester++;
                    showSemester(currentSemester);
                }
            });

            // Tombol prev semester
            $('#prev-semester').click(function () {
                if (currentSemester > 1) {
                    currentSemester--;
                    showSemester(currentSemester);
                }
            });

            // Fungsi untuk menampilkan semester tertentu
            function showSemester(semester) {
                // Semua baris direset untuk disembunyikan
                $('tbody tr').addClass('hide-row');

                // Baris yang sesuai dengan semester ditampilkan
                $('tbody tr[data-semester="' + semester + '"]').removeClass('hide-row');
            }
        });
    </script>
    <div class="card" style="margin-left:10%; margin-right:10%;">
    <div class="container">
          <div class="bootstrap-table bootstrap4 mb-3">
            <a href="adminadd-joint" class="btn btn-primary">Tambah</a>
          </div>
        </div>
    <table>
        <thead>
            <tr>
                <th style="width: 20px;">Semester</th>
                <th style="width: 100px;">Code</th>
                <th style="width: 250px;">Course Name</th>
                <th style="width: 20px;">Credits</th>
                <th style="width: 50px;">ELO 1</th>
                <th style="width: 50px;">ELO 2</th>
                <th style="width: 50px;">ELO 3</th>
                <th style="width: 50px;">ELO 4</th>
                <th style="width: 50px;">ELO 5</th>
                <th style="width: 50px;">ELO 6</th>
                <th style="width: 50px;">ELO 7</th>
                <th style="width: 50px;">ELO 8</th>
                <th style="width: 50px;">ELO 9</th>
                <th style="width: 100px;">ACTIONS</th>
            </tr>
        </thead>
            <tbody>
            @foreach($joint as $item)
            <tr data-semester='{{$item->semester}}'>
                    <td>{{ $item->semester}}</td>
                    <td>{{ $item->code }}</td>
                    <td>{{ $item->coursename }}</td>
                    <td>{{ $item->credits }}</td>
                    <td @if($item->elo1 != null) class="yellow-background" @endif> {{$item->elo1}} </td>
                    <td @if($item->elo2 != null) class="yellow-background" @endif> {{$item->elo2}} </td>
                    <td @if($item->elo3 != null) class="yellow-background" @endif> {{$item->elo3}}</td>
                    <td @if($item->elo4 != null) class="yellow-background" @endif> {{$item->elo4}}</td>
                    <td @if($item->elo5 != null) class="yellow-background" @endif> {{$item->elo5}}</td>
                    <td @if($item->elo6 != null) class="yellow-background" @endif> {{$item->elo6}}</td>
                    <td @if($item->elo7 != null) class="yellow-background" @endif> {{$item->elo7}}</td>
                    <td @if($item->elo8 != null) class="yellow-background" @endif> {{$item->elo8}}</td>
                    <td @if($item->elo9 != null) class="yellow-background" @endif> {{$item->elo9}}</td>
                    <td>
                        <div class="btn-group">
                        <a href="adminedit-joint/{{$item-> id}}" class="btn btn-warning" >Edit</a> 
                        <a href="admindelete-joint/{{$item-> id}}" class="btn btn-danger" >Delete</a>
                        </div>
                    </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-4">
            <!-- Tombol Prev Semester -->
            <button id="prev-semester" class="btn btn-primary btn-block">Prev Semester</button>
            </div>
            <div class="col-md-4">
            <!-- Tombol Next Semester -->
            <button id="next-semester" class="btn btn-primary btn-block float-md-right">Next Semester</button>
            </div>
        </div>
        </div>

        
        <div class="elo-container">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title text-center">ELO Explanations</h5>
                    <div class="elo-explanation">
                        <div class="elo-column">
                            <p><strong>ELO 1 </strong>- Ethical and Religiosity Skill</p>
                            <p><strong>ELO 2 </strong>- Analytical Thinking</p>
                            <p><strong>ELO 3</strong> - Communication Skill</p>
                            <p><strong>ELO 4 </strong>- Professional Skill</p>
                            <p><strong>ELO 5</strong> - Technopreneur Skill</p>
                        </div>

                        <div class="elo-column">
                            <p><strong>ELO 6 </strong>- Software Developing Skill</p>
                            <p><strong>ELO 7 </strong>- System Administrator</p>
                            <p><strong>ELO 8 </strong>- Research Skill</p>
                            <p><strong>ELO 9 </strong>- Long Life Learning</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 <!-- <div class="elo-container">
            <div class="card mt-3">
                <div class="card-body">
                <div class="bootstrap-table bootstrap4 mb-3">
                    <a href="adminadd-joint2" class="btn btn-primary">Tambah</a>
                </div>
                    <h5 class="card-title text-center">ELO Explanations</h5>
                    <div class="elo-explanation">
                    <table>
                    <thead>
                        <tr>
                            <th style="width: 100px;">Judul</th>
                            <th style="width: 100px;">Isi</th>
                            <th style="width: 100px;">Action</th>
                        </tr>
                    </thead>
                        <tbody>
                        @foreach($joint2 as $items2)
                        <tr>
                                <td>{{$items2 -> judul}}</td>
                                <td>{{$items2 -> isi}}</td>
                                <td>
                                    <div class="btn-group">
                                    <a href="adminedit-joint2/{{$item-> id}}" class="btn btn-warning" >Edit</a> 
                                    <a href="admindelete-joint2/{{$item-> id}}" class="btn btn-danger" >Delete</a>
                                    </div>
                                </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</head>
<body>


@endsection