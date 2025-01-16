@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Current Prospect</h3>
    </div>
    <style>
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

    <div class="card" style="margin-left:10%; margin-right:10%;">
    <div class="container">
          <div class="bootstrap-table bootstrap4 mb-3">
            <a href="adminadd-prospect" class="btn btn-primary">Tambah</a>
          </div>
        </div>
    <table>
        <thead>
            <tr>
                <th style="width: 20px;">Title</th>
                <th style="width: 400px;">Description</th>
                <th style="width: 100px;">ACTIONS</th>
            </tr>
        </thead>
            <tbody>
            @foreach($prospect as $item)
            <tr>
                    <td>{{ $item->title}}</td>
                    <td>{{ $item->isi }}</td>
                    <td>
                        <div class="btn-group">
                        <a href="adminedit-prospect/{{$item-> id}}" class="btn btn-warning" >Edit</a> 
                        <a href="admindelete-prospect/{{$item-> id}}" class="btn btn-danger" >Delete</a>
                        </div>
                    </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</head>
<body>


@endsection