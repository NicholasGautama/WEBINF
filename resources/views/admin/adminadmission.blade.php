@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Admission</h3>
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
<div class="card" style="margin-left:10%; margin-right:10%;">
    <table>
        <thead>
            <tr>
                <th style="width: 100px;">JUDUL 1</th>
                <th style="width: 100px;">ISI 1</th>
                <th style="width: 100px;">JUDUL 2</th>
                <th style="width: 100px;">ISI 2</th>
                <th style="width: 100px;">ISI 3</th>
                <th style="width: 100px;">ACTIONS</th>
            </tr>
        </thead>
            <tbody>
            @foreach($admission1 as $item)
            <tr>
                    <td>{{ $item->judul1}}</td>
                    <td>{{ $item->isi1}}</td>
                    <td>{{ $item->judul2}}</td>
                    <td>{{ $item->isi2}}</td>
                    <td>{{ $item->isi3}}</td>
                    <td>
                        <div class="btn-group">
                        <a href="adminedit-admission1/{{$item-> id}}" class="btn btn-warning" >Edit</a> 
                        </div>
                    </td>
            </tr>
            @endforeach
            </tbody>
        </table>
</div>

<div class="card" style="margin-left:10%; margin-right:10%;">
    <br>
<div class="bootstrap-table bootstrap4 mb-3">
            <a href="adminadd-admission1table" class="btn btn-primary">Tambah Admission Table</a>
          </div>
    <table>
        <thead>
            <tr>
                <th style="width: 100px;">STUDY</th>
                <th style="width: 100px;">MAIN</th>
                <th style="width: 100px;">MAJOR</th>
                <th style="width: 100px;">ACTIONS</th>
            </tr>
        </thead>
            <tbody>
            @foreach($admission1table as $item)
            <tr>
                    <td>{{ $item->study}}</td>
                    <td>{{ $item->main}}</td>
                    <td>{{ $item->major}}</td>
                    <td>
                        <div class="btn-group">
                        <a href="adminedit-admission1table/{{$item-> id}}" class="btn btn-warning" >Edit</a> 
                        </div>
                        <div class="btn-group">
                        <a href="admindelete-admission1table/{{$item-> id}}" class="btn btn-danger" >Delete</a> 
                        </div>
                    </td>
            </tr>
            @endforeach
            </tbody>
        </table>
</div>

<div class="card" style="margin-left:10%; margin-right:10%;">
    <table>
        <thead>
            <tr>
                <th style="width: 20px;">Judul 1</th>
                <th style="width: 100px;">Isi 1</th>
                <th style="width: 100px;">Judul 2</th>
                <th style="width: 100px;">Isi 2</th>
                <th style="width: 100px;">ACTIONS</th>
                
            </tr>
        </thead>
            <tbody>
            @foreach($admission2 as $items)
            <tr>
                    <td>{{ $items->judul1}}</td>
                    <td>{{ $items->isi1}}</td>
                    <td>{{ $items->judul2}}</td>
                    <td>{{ $items->isi2}}</td>
                    <td>
                        <div class="btn-group">
                        <a href="adminedit-mobility2/{{$items-> id}}" class="btn btn-warning" >Edit</a> 
                        </div>
                    </td>
            </tr>
            @endforeach
            </tbody>
        </table>
</div>
<div class="card" style="margin-left:10%; margin-right:10%;">
<br><br>
<div class="bootstrap-table bootstrap4 mb-3">
          </div>
    <table>
        <thead>
            <tr>
                <th style="width: 20px;">Isi</th>
                <th style="width: 100px;">Alamat</th>
                <th style="width: 100px;">Link</th>
                <th style="width: 100px;">ACTIONS</th>
                
            </tr>
        </thead>
            <tbody>
            @foreach($admission4 as $items2)
            <tr>
                    <td>{{ $items2->isi}}</td>
                    <td>{{ $items2->alamat}}</td>
                    <td>{{ $items2->link}}</td>
                    <td>
                        <div class="btn-group">
                        <a href="adminedit-mobility3/{{$items2-> id}}" class="btn btn-warning" >Edit</a>
                        </div>
                    </td>
            </tr>
            @endforeach
            </tbody>
        </table>
</div>

    </head>

@endsection