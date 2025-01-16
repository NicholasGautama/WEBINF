@extends('layouts.app1')

@section('content')

<div class="container">
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Delete Administrator</h3>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <p>Apakah anda yakin untuk menghapus admin berikut:</p>

                    <form action="{{ route('admin.destroy', $user->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('delete')

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}" required readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <div class="col-md-6">
                                <input type="text" name="email" class="form-control" value="{{ $user->email }}" required readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>
                            <div class="col-md-6">
                                @php
                                $roles = [
                                     1 => 'Dosen',
                                     2 => 'Admin',
                                     3 => 'Student',
                                     4 => 'Dosen2'
                                ];
                                @endphp
                                <input type="text" name="role" class="form-control" value="{{ $roles[$user->role_id] }}" required readonly>
                            </div>
                        </div>
                        <div class="mt-3 mb-3 text-end">
                            <form style="display: inline-block" action="{{ route('admin.destroy', $user->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                            <a class="btn btn-primary" href="{{ url('alladmin') }}">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
