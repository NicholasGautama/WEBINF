@extends('layouts.app1')

@section('content')

<div class="container">
    <div class="container-fluid my-5">
    <h3 class="text-center" style="font-size: 50px">Edit Administrator Access</h3>
  </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="/alladmin/{{$user->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        
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

                            <div class="row mb-3">
                                <label for="admin-access" class="col-md-4 col-form-label text-md-end">{{ __('Admin Access') }}</label>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        @foreach ($userAccesses as $userAccess)
                                            @if ($user->id === $userAccess->user_id)
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="home" name="home" {{ $userAccess->home === 1 ? 'checked' : '' }}>
                                                        <label class="form-check-label" id="home">Home</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="about" name="about" {{ $userAccess->about === 1 ? 'checked' : '' }}>
                                                        <label class="form-check-label" id="about">About</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="academic" name="academic" {{ $userAccess->academic === 1 ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="academic">Academic</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="research" name="research" {{ $userAccess->research === 1 ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="research">Research</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="student" name="student" {{ $userAccess->student === 1 ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="student">Student</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="news" name="news" {{ $userAccess->news === 1 ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="news">News</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="contact" name="contact" {{ $userAccess->contact === 1 ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="contact">Contact</label>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12 text-md-end">
                                    <button class="btn btn-primary" type="submit">Save Changes</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection