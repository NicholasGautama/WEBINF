@extends('layouts.app1')

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
</head>
<body>

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
    </tr>
</thead>

    <tbody>
<!-- Semester 1 -->
<tr data-semester="1">
    <td rowspan="8">1</td>
    <td>IF130</td>
    <td>Programming Fundamentals</td>
    <td>3</td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr data-semester="1">
    <td>IF120</td>
    <td>Discrete Mathematics</td>
    <td>3</td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr data-semester="1">
    <td>CE121</td>
    <td>Linear Algebra</td>
    <td>3</td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr data-semester="1">
    <td>CE232</td>
    <td>Digital System</td>
    <td>3</td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr data-semester="1">
    <td>UM162</td>
    <td>Pancasila</td>
    <td>2</td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr data-semester="1">
    <td>UM152</td>
    <td>Religion</td>
    <td>2</td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr data-semester="1">
    <td>UM163</td>
    <td>Civics</td>
    <td>2</td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr data-semester="1">
    <td>UM122</td>
    <td>English 1: Composition</td>
    <td>2</td>
    <td></td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
        <!-- ... (Data Semester 1) ... -->

        <!-- Semester 2 -->
        <tr data-semester="2">
            <td rowspan="7">2</td>
            <td>IF260</td>
            <td>Operating System</td>
            <td>3</td>
            <td></td>
            <td> v </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td> v </td>
            <td></td>
            <td></td>
        </tr>
        <tr data-semester="2">
			<td>IF232</td>
			<td>Algorithm & Data Structure</td>
			<td>4</td>
			<td></td>
			<td> v </td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
				<tr data-semester="2">
			<td>IF231</td>
			<td>Introduction to Internet Technology</td>
			<td>3</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td> v </td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
				<tr data-semester="2">
			<td>CE332</td>
			<td>Computer Architecture and Organization</td>
			<td>3</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td> v </td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
				<tr data-semester="2">
			<td>UM223</td>
			<td>English 2: Speaking</td>
			<td>2</td>
			<td></td>
			<td></td>
			<td> v </td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
				<tr data-semester="2">
			<td>MSC1003</td>
			<td>Communication and Personal Relationships</td>
			<td>2</td>
			<td></td>
			<td></td>
			<td> v </td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
				<tr data-semester="2">
			<td>EPM101</td>
			<td>Calculus</td>
			<td>4</td>
			<td></td>
			<td> v </td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
        <!-- Semester 3 -->
		<!-- Semester 3 -->
<tr data-semester="3">
    <td rowspan="7">3</td>
    <td>IF350</td>
    <td>Software Engineering and Project Management</td>
    <td>3</td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td> v </td>
    <td> v </td>
    <td></td>
    <td></td>
	<td></td>	

</tr>
<tr data-semester="3">
    <td>IF330</td>
    <td>Web Programming</td>
    <td>3</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td> v </td>
    <td> v </td>
    <td></td>
    <td></td>
			<td></td>
</tr>
<tr data-semester="3">
    <td>IF331</td>
    <td>Declarative Programming</td>
    <td>3</td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
			<td></td>
</tr>
<tr data-semester="3">
    <td>IF332</td>
    <td>Language Theory and Automata</td>
    <td>3</td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
			<td></td>
</tr>
<tr data-semester="3">
    <td>IF351</td>
    <td>Database System</td>
    <td>3</td>
    <td></td>
    <td></td>
    <td></td>
    <td> v </td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
			<td></td>
</tr>
<tr data-semester="3">
    <td>UM142</td>
    <td>Bahasa Indonesia</td>
    <td>2</td>
    <td></td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td> v </td>
			<td></td>
</tr>
<tr data-semester="3">
    <td>CE319</td>
    <td>Probability and Statistics</td>
    <td>3</td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>

</tr>
<!-- ... (Tambahkan baris lainnya jika diperlukan) ... -->

        <!-- ... (Data Semester 3) ... -->

<!-- Semester 4 -->
<tr data-semester="4">
    <td rowspan="7">4</td>
    <td>IF433</td>
    <td>Object Oriented Programming</td>
    <td>3</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr data-semester="4">
    <td>IF470</td>
    <td>Computer Security</td>
    <td>3</td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr data-semester="4">
    <td>IF420</td>
    <td>Numerical Analysis</td>
    <td>3</td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr data-semester="4">
    <td>IF450</td>
    <td>Human and Computer Interaction</td>
    <td>3</td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr data-semester="4">
    <td>IF432</td>
    <td>Algorithm Design and Analysis</td>
    <td>3</td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr data-semester="4">
    <td>IF440</td>
    <td>Artificial Intelligence</td>
    <td>3</td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td> v </td>
</tr>
<tr data-semester="4">
    <td>CE449</td>
    <td>Computer Network</td>
    <td>2</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
</tr>
<!-- ... (Tambahkan baris lainnya jika diperlukan) ... -->

<!-- Semester 5 -->
<tr data-semester="5">
    <td rowspan="7">5</td>
    <td>IF580</td>
    <td>Computer Graphics and Animation</td>
    <td>3</td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr data-semester="5">
    <td>IF540</td>
    <td>Machine Learning</td>
    <td>3</td>
    <td></td>
    <td> v </td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td> v </td>
</tr>
<tr data-semester="5">
    <td>IF570</td>
    <td>Mobile App Programming</td>
    <td>3</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td> v </td>
    <td> v </td>
    <td></td>
    <td></td>
</tr>
<tr data-semester="5">
    <td>IF541</td>
    <td>Expert System</td>
    <td>3</td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr data-semester="5">
    <td>IF590</td>
    <td>Information Technology Research</td>
    <td>2</td>
    <td></td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td> v </td>
    <td></td>
</tr>
<tr data-semester="5">
    <td>UM321</td>
    <td>English 3: Academic Writing</td>
    <td>2</td>
    <td></td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr data-semester="5">
    <td>EM604</td>
    <td>Technopreneurship</td>
    <td>2</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td> v </td>
    <td></td>
    <td></td>
    <td></td>
    <td> v </td>
</tr>

<tr data-semester="6">
    <td rowspan="4">6</td>
    <td>IND60101</td>
    <td>Taken At Swinburne University of Technology</td>
    <td>4</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>		
<tr data-semester="6">
    <td>IND60102</td>
    <td>Taken At Swinburne University of Technology</td>
    <td>4</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
		<tr data-semester="6">
    <td>IND60103</td>
    <td>Taken At Swinburne University of Technology</td>
    <td>4</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
		<tr data-semester="6">
    <td>IND60104</td>
    <td>Taken At Swinburne University of Technology</td>
    <td>4</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
		
		<tr data-semester="7">
    <td rowspan="4">7</td>
    <td>IND70101</td>
    <td>Taken At Swinburne University of Technology</td>
    <td>4</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>		
<tr data-semester="7">
    <td>IND70102</td>
    <td>Taken At Swinburne University of Technology</td>
    <td>4</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
		<tr data-semester="7">
    <td>IND70103</td>
    <td>Taken At Swinburne University of Technology</td>
    <td>4</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
		<tr data-semester="7">
    <td>IND70104</td>
    <td>Taken At Swinburne University of Technology</td>
    <td>4</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
				<tr data-semester="8">
    <td rowspan="4">8</td>
    <td>IND80101</td>
    <td>Taken At Swinburne University of Technology</td>
    <td>4</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>		
<tr data-semester="8">
    <td>IND80102</td>
    <td>Taken At Swinburne University of Technology</td>
    <td>4</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
		<tr data-semester="8">
    <td>IND80103</td>
    <td>Taken At Swinburne University of Technology</td>
    <td>4</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
		<tr data-semester="8">
    <td>IND80104</td>
    <td>Taken At Swinburne University of Technology</td>
    <td>4</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<!-- ... (Tambahkan baris lainnya jika diperlukan) ... -->

    </tbody>
</table>

<!-- ... (Your existing HTML code) ... -->

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

<!-- ... (Your existing HTML code) ... -->



<!-- ... (Your existing HTML code) ... -->

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

<!-- ... (Your existing HTML code) ... -->

</body>
</html>

@endsection
