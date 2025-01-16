@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Tambah Mata Kuliah Merdeka</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="adminaddmerdeka" method="post">
                            @csrf 
                            <div class="mb-3">
                                <label for="semester">Semester</label>
                                <input type="number" name="semester" class="form-control" id="semester" required>
                            </div>
                            <div class="mb-3">
                                <label for="kodemk">Kode MK</label>
                                <input type="text" name="kodemk" class="form-control" id="kodemk" >
                            </div>
                            <div class="mb-3">
                                <label for="mk">Mata Kuliah</label>
                                <input type="text" name="mk" class="form-control" id="mk" required>
                            </div>
                            <div class="mb-3">
                                <label for="sksteori">Jumlah SKS Teori</label>
                                <input type="number" name="sksteori" class="form-control" id="sksteori">
                            </div>
                            <div class="mb-3">
                                <label for="skspraktek">Jumlah SKS Praktek</label>
                                <input type="number" name="skspraktek" class="form-control" id="skspraktek">
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
    
@endsect
