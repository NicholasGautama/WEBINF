@extends('layouts.app1')

@section('content')
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Edit Visi Misi Page</h3>
    </div>
        <div class="bootstrap-table bootstrap4 m-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="/adminvisimisi/{{$visimisi->id}}" style="height: auto;" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="isivisiumn"><b>{{ $visimisi->judulvisiumn }}</b></label>
                            <textarea name="isivisiumn" class="form-control" id="isivisiumn" rows="4" required>{{ $visimisi->isivisiumn }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="isimisiumn"><b>{{ $visimisi->judulmisiumn }}</b></label>
                            <textarea name="isimisiumn" class="form-control" id="isimisiumn" rows="4" required>{{ $visimisi->isimisiumn }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="isivisifti"><b>{{ $visimisi->judulvisifti }}</b></label>
                            <textarea name="isivisifti" class="form-control" id="isivisifti" rows="4" required>{{ $visimisi->isivisifti }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="isimisifti"><b>{{ $visimisi->judulmisifti }}</b></label>
                            <textarea name="isimisifti" class="form-control" id="isimisifti" rows="4" required>{{ $visimisi->isimisifti }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="isivisiinf"><b>{{ $visimisi->judulvisiinf }}</b></label>
                            <textarea name="isivisiinf" class="form-control" id="isivisiinf" rows="4" required>{{ $visimisi->isivisiinf }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="isimisiinf"><b>{{ $visimisi->judulmisiinf }}</b></label>
                            <textarea name="isimisiinf" class="form-control" id="judulmisiinf" rows="4" required>{{ $visimisi->isimisiinf }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="isiobjektif"><b>{{ $visimisi->judulobjektif }}</b></label>
                            <textarea name="isiobjektif" class="form-control" id="isiobjektif" rows="4" required>{{ $visimisi->isiobjektif }}</textarea>
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