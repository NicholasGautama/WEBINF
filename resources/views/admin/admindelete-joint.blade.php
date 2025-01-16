@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Delete Joint</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
          <div class="row">
            <div class="card">
              <div class="card-body">
                    <div class="mb-3">
                        <h3> Apakah Anda yakin ingin menghapus file berikut :</h3>
                    </div>
                    <div class="mb-3">
                        <label for="semester">Semester  : {{$joint->semester}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="code">Code  : {{$joint->code}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="coursename">Course Name  : {{$joint->coursename}}</label>
                    </div>
                    <div class="mb-3">
                        <label for="credits">Credits  : {{$joint->credits}}</label>
                    </div>
                    <div class="mb-3" >
                        <form style="display: inline-block" action="/admindelete-joint/{{$joint->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        <a class="btn btn-primary" href="{{ url('adminjoint') }}">Cancel</a>
                    </div>
              </div>
            </div>
          </div>
        </div>
    
@endsection