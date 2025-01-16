@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Tambah Mata Kuliah Elektif</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="adminaddmkelektif" method="post" enctype="multipart/form-data">
                            @csrf 
                            <div class="mb-3">
                                <label for="kurikulum">Kurikulum</label>
                                <select name="kurikulum" id="kurikulum" class="form-control" required>
                                    <option value="">Select One</option>
                                    <option value="2018">Kurikulum 2018</option>
                                    <option value="merdeka">Kurikulum Merdeka</option>
                                </select>
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
								<label for="deskripsimk" class="form-label"><b>Choose a file to upload:</b></label>
								<div class="input-group">
									<input 
										type="file" 
										class="form-control" 
										id="deskripsimk" 
										name="deskripsimk" 
										accept=".pdf">
								</div>
								<small class="form-text text-muted">Accepted file types: PDF. Max size: 5MB.</small>
							</div>
                            <div class="mb-3">
                                <label for="prasyarat">Prasyarat</label>
                                <input type="text" name="prasyarat" class="form-control" id="prasyarat">
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