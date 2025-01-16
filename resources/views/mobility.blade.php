@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="container-fluid my-5">
    @foreach($mobility as $item1)
    <h3 class="text-center" style="font-size: 50px">{{$item1->judul}}</h3>
    <div class="center">
    <img class="center" src="{{ asset('storage/Mobility/' . $item1->image) }}" alt="..." style="max-width: 1000px;"></img>
    </div>
    @endforeach
    </div>
    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Set height to whatever is appropriate */
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
    .title-adm{
        color: #4371ba;
        font-size: 25px;
        font-weight: bold;
        align-items: center;
        justify-content: center;
        display: flex;
    }
    .title-adm-2{
        color: #4371ba;
        font-size: 20px;
        font-weight: bold;
    }
    .isi{
        text-align: center; font-family: 'Nunito', sans-serif; font-size: 10px;
    }
    .isi2{
        font-family: 'Nunito', sans-serif;
        color:gray;
        font-size:17px;
    }
    .card-header{
        background-color: white;
    }
    .horizontal-card {
    display: flex;
    align-items: center; /* Center vertically */
}

.card-image {
    width: 150px; /* Adjust as needed */
    height: auto; /* Maintain aspect ratio */
    margin-right: 20px; /* Space between image and content */
}

.card-content {
    flex: 1; /* Take remaining space */
}
    
    </style>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <div class="card" style="margin-left:20%; margin-right:20%;">
                @foreach($mobility2 as $item2)
                <div class="card-header">
                    <p class="title-adm">{{$item2 -> judul1}}</p>
                </div>
                <div class="card-body">
                <p class="fs-5 mb-4"style="text-align: center; font-family: 'Nunito', sans-serif; font-size: 10px;" >{{$item2-> isi1}}</p>
                <hr class="divider">
                <p class="title-adm">{{$item2 -> judul2}}</p>
                <p class="fs-5 mb-4" style="text-align: center; font-family: 'Nunito', sans-serif; font-size: 10px;"><?php
                  $paragraphs = explode('//', $item2->isi2);
                  $counter = 1;
                  foreach ($paragraphs as $paragraph) {
                      if (trim($paragraph) != '') {
                          $formattedParagraph = preg_replace('/\*\*(.*?)\*\*/', '<strong style="font-size: larger">$1</strong>', $paragraph);
                          if (count($paragraphs) > 2) {
                              '.';
                          }
                          echo $formattedParagraph . '<br> <br>';
                          $counter++;
                      }
                  }
              ?></p>
                @endforeach
                </div>
                <hr class="divider">
                <div class="row">
                @foreach($mobility3 as $item3)
                <div class="col-md-6 col-sm-12">
                <div class="horizontal-card">
                <a href="https://merdeka.umn.ac.id/web/">
                    <img src="{{ asset('storage/Mobility/' . $item3->image) }}" alt="..." class="card-image"></img>
                </a>
                    <div class="card-content">
						<div class="card-header"><strong>{{$item3->judul}}</strong></div>
                        <br>
                        <p class="isi2"><?php
                        $paragraphs = explode('//', $item3->isi);
                        $counter = 1;
                        foreach ($paragraphs as $paragraph) {
                            if (trim($paragraph) != '') {
                                $formattedParagraph = preg_replace('/\*\*(.*?)\*\*/', '<strong style="font-size: larger">$1</strong>', $paragraph);
                                if (count($paragraphs) > 2) {
                                    '.';
                                }
                                echo $formattedParagraph . '<br>';
                                $counter++;
                            }
                        }?>
                        </p>
                    </div>
                </div>
                    </div>
                @endforeach
                    </div>
    
    </div>
    </head>
    <body>
@endsection