@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Edit JOINT</h3>
    </div>
      <div class="bootstrap-table bootstrap4 m-5">
        <div class="row">
          <div class="card">
            <div class="card-body">
              <form action="/admineditjoint/{{$joint->id}}" method="post" enctype="multipart/form-data">
                  @csrf 
                  @method('PUT')
                  <div class="mb-3">
                                <label for="semester">Semester</label>
                                <input type="number" name="semester" class="form-control" id="semester" value="{{$joint->semester}}" >
                            </div>
                            <div class="mb-3">
                                <label for="code">Code</label>
                                <input type="text" name="code" class="form-control" id="code" value="{{$joint->code}}" >
                            </div>
                            <div class="mb-3">
                                <label for="coursename">Course Name</label>
                                <input type="text" name="coursename" class="form-control" id="coursename" value="{{$joint->coursename}}" >
                            </div>
                            <div class="mb-3">
                                <label for="credits">Credits</label>
                                <input type="number" name="credits" class="form-control" id="credits" value="{{$joint->credits}}">
                            </div>
                            <div class="mb-3">
                                <label for="credits">ELO</label>

                                <br>
                                <input type="hidden" name="elo1" value="">
                                <input type="checkbox" id="elo1" name="elo1" value="V" {{ $joint->elo1 == 'V' ? 'checked' : '' }}>
                                <label for="elo1"> ELO1</label><br>

                                <input type="hidden" name="elo2" value="">
                                <input type="checkbox" id="elo2" name="elo2" value="V" {{ $joint->elo2 == 'V' ? 'checked' : '' }}>
                                <label for="elo2"> ELO2</label><br>

                                <input type="hidden" name="elo3" value="">
                                <input type="checkbox" id="elo3" name="elo3" value="V" {{ $joint->elo3 == 'V' ? 'checked' : '' }}>
                                <label for="elo3"> ELO3</label><br>

                                <input type="hidden" name="elo4" value="">
                                <input type="checkbox" id="elo4" name="elo4" value="V" {{ $joint->elo4 == 'V' ? 'checked' : '' }}>
                                <label for="elo1"> ELO4</label><br>

                                <input type="hidden" name="elo5" value="">
                                <input type="checkbox" id="elo5" name="elo5" value="V" {{ $joint->elo5 == 'V' ? 'checked' : '' }}>
                                <label for="elo5"> ELO5</label><br>

                                <input type="hidden" name="elo6" value="">
                                <input type="checkbox" id="elo6" name="elo6" value="V" {{ $joint->elo6 == 'V' ? 'checked' : '' }}>
                                <label for="elo6"> ELO6</label><br>

                                <input type="hidden" name="elo7" value="">
                                <input type="checkbox" id="elo7" name="elo7" value="V" {{ $joint->elo7 == 'V' ? 'checked' : '' }}>
                                <label for="elo7"> ELO7</label><br>

                                <input type="hidden" name="elo8" value="">
                                <input type="checkbox" id="elo8" name="elo8" value="V" {{ $joint->elo8 == 'V' ? 'checked' : '' }}>
                                <label for="elo8"> ELO8</label><br>

                                <input type="hidden" name="elo9" value="">
                                <input type="checkbox" id="elo9" name="elo9" value="V" {{ $joint->elo9 == 'V' ? 'checked' : '' }}>
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
    <script>
    // Set the value of unchecked checkboxes to null before form submission
    document.querySelector('form').addEventListener('submit', function() {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(function(checkbox) {
            if (!checkbox.checked) {
                checkbox.value = null;
            }
        });
    });
    </script>
    @endsection