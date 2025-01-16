
@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Course Plan</h3>
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

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Gaya tambahan untuk tautan */
        td a {
            display: inline-block;
            padding: 6px 12px;
            margin: 2px;
            text-align: center;
            text-decoration: none;
            background-color: #f2f2f2;
            color: #000;
        }

        td a:hover {
            background-color: #e6e6e6;
        }

        /* Gaya untuk membuat sel tidak dapat diklik dan memberikan warna abu-abu */
        td.no-link {
            pointer-events: none; /* Mencegah tautan diklik */
            background-color: #d3d3d3; /* Warna abu-abu */
        }
    </style>
	<style>
    /* Tambahkan gaya ini untuk membuat tautan selalu terlihat */
    td a {
        display: block; /* Membuat tautan menjadi blok */
        color: #000; /* Warna teks tautan */
        text-decoration: none; /* Menghapus dekorasi tautan */
        padding: 5px; /* Spasi di sekitar tautan */
    }

    /* Gaya tambahan untuk efek hover */
    td a:hover {
        background-color: #e6e6e6; /* Warna latar belakang saat dihover */
    }
</style>
</head>
<body>
	<div class="container">
<table border="1">
    <thead style="font-size: 16px; font-weight: bold;">
        <tr>
            <th style="width: 120px;">Course Code</th>
            <th style="width: 300px;">Course Name</th>
            <th style="width: 80px;">Credits</th>
            <th style="width: 200px;">Module Handbook</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>IFD60101</td>
            <td>Introduction to Business Information Systems</td>
            <td>4</td>
            <td><a href="https://multimedianusantara-my.sharepoint.com/:b:/g/personal/reyhan_wijaya_student_umn_ac_id/Ee-DXPWLcRNIm_3IN2z8h_4BIgzMj56t4pJS3E5R9b6jDg" target="_blank">View Module Handbook</a></td>
        </tr>
        <tr>
            <td>IFD60102</td>
            <td>Network Administration</td>
            <td>4</td>
            <td><a href="https://multimedianusantara-my.sharepoint.com/:b:/g/personal/reyhan_wijaya_student_umn_ac_id/EU8L0tv0bqFJtRee3pOAwcEBmBt2kOUtLBPq0C_tV1dofA" target="_blank">View Module Handbook</a></td>
        </tr>
        <tr>
            <td>IFD60103</td>
            <td>Advanced Object Oriented Programming</td>
            <td>4</td>
            <td><a href="https://multimedianusantara-my.sharepoint.com/:b:/g/personal/reyhan_wijaya_student_umn_ac_id/EQ7fxS0TgTJDkR4ODPANgwoBJkyPx26IpWpX9GTG-gcYzQ" target="_blank">View Module Handbook</a></td>
        </tr>
        <tr>
            <td>IFD60104</td>
            <td>Development Project 1 – Tools and Practices</td>
            <td>4</td>
            <td><a href="https://multimedianusantara-my.sharepoint.com/:b:/g/personal/reyhan_wijaya_student_umn_ac_id/EZmKOis0ga9MvpLnTeGU4BcBGEbVUXHTbWz8tm-XBq1HFg" target="_blank">View Module Handbook</a></td>
        </tr>
        <tr>
            <td>IFD70101</td>
            <td>IT Security</td>
            <td>4</td>
            <td><a href="https://multimedianusantara-my.sharepoint.com/:b:/g/personal/reyhan_wijaya_student_umn_ac_id/EZkC1dbs0K5EhvYHoJ6KE40B3BLlgVdRxMhL8e6bm53Yhg" target="_blank">View Module Handbook</a></td>
        </tr>
        <tr>
            <td>IFD70102</td>
            <td>Software Development for Mobile Devices</td>
            <td>4</td>
            <td><a href="https://multimedianusantara-my.sharepoint.com/:b:/g/personal/reyhan_wijaya_student_umn_ac_id/ES3gbJHuIBpOpWnpVV_THEgBYSE3b3ALwfYUm3zc_AlxWg" target="_blank">View Module Handbook</a></td>
        </tr>
<tr>
            <td>IFD70103</td>
            <td>Elective 1</td>
            <td>4</td>
            <td class="no-link">View Module Handbook</td>
        </tr>
        <tr>
            <td>IFD70104</td>
            <td>Elective 2</td>
            <td>4</td>
            <td class="no-link">View Module Handbook</td>
        </tr>
        <tr>
            <td>IFD80101</td>
            <td>Information Technology Project Management</td>
            <td>4</td>
            <td><a href="https://multimedianusantara-my.sharepoint.com/:b:/g/personal/reyhan_wijaya_student_umn_ac_id/EWyK6E60JWxDsxWtjXFYmtkBoj3hq7Mc2ghaYMc4CLvEsA">View Module Handbook</a></td>
        </tr>
        <tr>
            <td>IFD80102</td>
            <td>IoT Programming</td>
            <td>4</td>
            <td><a href="https://multimedianusantara-my.sharepoint.com/:b:/g/personal/reyhan_wijaya_student_umn_ac_id/EdAoFjMtudVPulKQrMAE3HUBo-08m4rGTokSLyP4hIdT-Q" target="_blank">View Module Handbook</a></td>
        </tr>
        <tr>
            <td>IFD80103</td>
            <td>Information Technology Project</td>
            <td>4</td>
            <td><a href="https://multimedianusantara-my.sharepoint.com/:b:/g/personal/reyhan_wijaya_student_umn_ac_id/EZDonUZo-t5FpBg2ELFJYvwBJGxHmMl-RFrm6MeQR9v5hw" target="_blank">View Module Handbook</a></td>
        </tr>
        <tr>
            <td>IFD80104</td>
            <td>Professional Issues in Information Technology</td>
            <td>4</td>
            <td><a href="https://multimedianusantara-my.sharepoint.com/:b:/g/personal/reyhan_wijaya_student_umn_ac_id/EcQAFpz7SUVDowQ29G17udgBYA2teF_HmqfgnTNpsnBaCQ" target="_blank">View Module Handbook</a></td>
        </tr>
    </tbody>
</table>
	</div>
</body>
</html>

@endsection
