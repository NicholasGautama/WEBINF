@extends('layouts.main')

@section('container')
    <div class="container-fluid my-5">
    <h3 class="text-center" style="font-size: 50px; font-family: 'Geologica', sans-serif; color: black">Expected Learning Outcomes</h3>
    </div>
    <div class="table-responsive-sm m-5">
    <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th style="width: 100px; text-align: center;">ID</th>
        <th style="text-align: center;">Expected Learning Outcomes</th>
      </tr>
    </thead>
      <tbody>
        @foreach ($datacpl1 as $item)
          <tr>
              <td style="text-align: center;">{{ $item->kodecpl }}</td>
              <td style="text-align: justify;">{{ $item->namacpl }}</td>
          </tr>
        @endforeach
      </tbody>
		      </table>


  </div>
  @endsection