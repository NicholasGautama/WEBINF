@extends('layouts.main')

@section('container')

<div class="container-fluid my-5">
    <h3 class="text-center" style="font-size: 50px; font-family: 'Geologica', sans-serif; color: black">Graduate Profile</h3>
</div>
<div class="table-responsive-sm m-5">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th rowspan="2" style="width: 100px; text-align: center;">No</th>
                <th rowspan="2" style="width: 100px; text-align: center;">PPM</th>
				<th rowspan="2" style="width: 600px; text-align: center;">Description</th>
				<th style="width: 100px; text-align: center;">ELO 1</th>
				<th style="width: 100px; text-align: center;">ELO 2</th>
				<th style="width: 100px; text-align: center;">ELO 3</th>
				<th style="width: 100px; text-align: center;">ELO 4</th>
				<th style="width: 100px; text-align: center;">ELO 5</th>
				<th style="width: 100px; text-align: center;">ELO 6</th>
				<th style="width: 100px; text-align: center;">ELO 7</th>
				<th style="width: 100px; text-align: center;">ELO 8</th>
				<th style="width: 100px; text-align: center;">ELO 9</th>
            </tr>
            <tr>
                <th style="text-align: center; font-size: 12px; vertical-align: top;">Ethical and Religiosity Skill</th>
                <th style="text-align: center; font-size: 12px; vertical-align: top;">Analytical Thinking</th>
                <th style="text-align: center; font-size: 12px; vertical-align: top;">Communication Skill</th>
                <th style="text-align: center; font-size: 12px; vertical-align: top;">Professional Skill</th>
                <th style="text-align: center; font-size: 12px; vertical-align: top;">Technopreneur Skill</th>
                <th style="text-align: center; font-size: 12px; vertical-align: top;">Software Developing</th>
                <th style="text-align: center; font-size: 12px; vertical-align: top;">System Administrator Skill</th>
                <th style="text-align: center; font-size: 12px; vertical-align: top;">Research Skill</th>
                <th style="text-align: center; font-size: 12px; vertical-align: top;">Long Life Learning</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($plulusans as $item)
            <tr>
                <td style="text-align: center; vertical-align: middle;">{{ $item->noppm }}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $item->namappm }}</td>
                <td style="text-align: left; ">{{ $item->descppm }}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $item->elo1 == 1 ? '✓' : '' }}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $item->elo2 == 1 ? '✓' : '' }}</td>
				<td style="text-align: center; vertical-align: middle;">{{ $item->elo3 == 1 ? '✓' : '' }}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $item->elo4 == 1 ? '✓' : '' }}</td>
				<td style="text-align: center; vertical-align: middle;">{{ $item->elo5 == 1 ? '✓' : '' }}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $item->elo6 == 1 ? '✓' : '' }}</td>
				<td style="text-align: center; vertical-align: middle;">{{ $item->elo7 == 1 ? '✓' : '' }}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $item->elo8 == 1 ? '✓' : '' }}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $item->elo9 == 1 ? '✓' : '' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="collider"></div>
@endsection
