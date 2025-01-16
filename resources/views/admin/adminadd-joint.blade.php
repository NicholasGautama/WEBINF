@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Tambah Joint</h3>
    </div>
      <div class="bootstrap-table bootstrap4 m-5">
        <div class="row">
          <div class="card">
            <div class="card-body">
            <form action="adminaddjoint" method="post" enctype="multipart/form-data">
              @csrf
                            <div class="mb-3">
                                <label for="semester">Semester</label>
                                <input type="number" name="semester" class="form-control" id="semester" >
                            </div>
                            <div class="mb-3">
                                <label for="code">Code</label>
                                <input type="text" name="code" class="form-control" id="code" >
                            </div>
                            <div class="mb-3">
                                <label for="coursename">Course Name</label>
                                <input type="text" name="coursename" class="form-control" id="coursename" >
                            </div>
                            <div class="mb-3">
                                <label for="credits">Credits</label>
                                <input type="number" name="credits" class="form-control" id="credits" >
                            </div>
                            <div class="mb-3">
                                <label for="credits">ELO</label>

                                <br><input type="checkbox" id="elo1" name="elo1" value="V">
                                <label for="elo1"> ELO1</label><br>

                                <input type="checkbox" id="elo2" name="elo2" value="V">
                                <label for="elo2"> ELO2</label><br>

                                <input type="checkbox" id="elo3" name="elo3" value="V">
                                <label for="elo3"> ELO3</label><br>

                                <input type="checkbox" id="elo4" name="elo4" value="V">
                                <label for="elo1"> ELO4</label><br>

                                <input type="checkbox" id="elo5" name="elo5" value="V">
                                <label for="elo5"> ELO5</label><br>

                                <input type="checkbox" id="elo6" name="elo6" value="V">
                                <label for="elo6"> ELO6</label><br>

                                <input type="checkbox" id="elo7" name="elo7" value="V">
                                <label for="elo7"> ELO7</label><br>

                                <input type="checkbox" id="elo8" name="elo8" value="V">
                                <label for="elo8"> ELO8</label><br>

                                <input type="checkbox" id="elo9" name="elo9" value="V">
                                <label for="elo9"> ELO9</label><br>
                                
                            </div>
              <div class="mb-3">
                  <button class="btn btn-primary" type="submit">Upload</button>
              </div>
          </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection