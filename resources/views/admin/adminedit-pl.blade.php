@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Edit Graduate Profile</h3>
    </div>
    <div class="bootstrap-table bootstrap4 m-5">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="/adminpl/{{$plulusans->id}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="noppm">No</label>
                            <input type="text" name="noppm" class="form-control" id="noppm" value="{{$plulusans->noppm}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="namappm">PPM</label>
                            <input type="text" name="namappm" class="form-control" id="namappm" value="{{$plulusans->namappm}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="descppm">Description</label>
                            <input type="text" name="descppm" class="form-control" id="descppm" value="{{$plulusans->descppm}}" required>
                        </div>
                        <div class="mb-3">
                            <label>ELOs:</label><br>
                            @foreach(range(1, 9) as $eloNumber)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="elo{{$eloNumber}}" id="elo{{$eloNumber}}" value="1" {{ $plulusans["elo{$eloNumber}"] ? 'checked' : '' }}>
                                    <label class="form-check-label" for="elo{{$eloNumber}}">ELO {{$eloNumber}}</label>
                                </div>
                            @endforeach
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
