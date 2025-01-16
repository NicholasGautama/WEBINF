@extends('layouts.main')

@section('container')
<!-- End Navigation -->
<div class="container-fluid my-5">
    <h3 class="text-center" style="font-size: 50px; font-family: 'Geologica', sans-serif; color: black;">Laboratories</h3>
</div>

<div class="container my-5">
    @foreach ($laboratorium as $lab)
        <div class="lab-item mb-4">
            <h4 style="font-size: 30px;"><strong>{{ $lab['name'] }}</strong></h4>
            <p style="font-size: 20px; text-align: justify;">{{ $lab['description'] }}</p>
            <p style="font-size: 20px; text-align: justify;">
                Contact: <a href="mailto:{{ $lab['contact'] }}" style="color: blue">{{ $lab['contact'] }}</a>
                <br>
                More info: <a href="{{ $lab['link'] }}" style="color: blue">{{ $lab['link'] }}</a>
            </p>
        </div>
    @endforeach
</div>
@endsection
