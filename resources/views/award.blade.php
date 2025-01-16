@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Awards Qualification</h3>
    </div>
    <style>
        .card-header{
        background-color: white;
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
    <div class="card-header" style="margin-left:20%; margin-right:20%;">
		<hr class="divider">
    <table>
        <thead>
            <tr>
                <th style="width: 300px;">Pre-requisite</th>
            </tr>
        </thead>
            <tbody>
            @foreach($award as $item)
            <tr data-semester='{{$item->isi}}'>
                    <td>{{ $item->isi}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
		<br>

    </head>
    <body>
@endsection