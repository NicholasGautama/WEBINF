@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Update Subjects</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="/admincpl2/{{$datacpl2->id}}" method="post">
                        @csrf
                        @method('PUT')
                            <div class="mb-3">
                                <label for="kodemk">Kode</label>
                                <input type="text" name="kodemk" class="form-control" id="kodemk" value="{{$datacpl2->kodemk}}"required>
                            </div>
                            <div class="mb-3">
                                <label for="namamk">Subject</label>
                                <input type="text" name="namamk" class="form-control" id="namamk" value="{{$datacpl2->namamk}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="teori">CPL-Theory	</label>
                                <input type="text" name="teori" class="form-control" id="teori" value="{{$datacpl2->teori}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="praktikum">CPL-Practice</label>
                                <input type="text" name="praktikum" class="form-control" id="praktikum" value="{{$datacpl2->praktikum}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="mksyarat">Prerequisite Course</label>
                                <input type="text" name="mksyarat" class="form-control" id="mksyarat" value="{{$datacpl2->mksyarat}}" required>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-success" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection