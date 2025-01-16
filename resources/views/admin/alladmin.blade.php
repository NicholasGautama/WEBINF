@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Manage Admin</h3>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th style="text-align: center;">Nama</th>
                <th style="text-align: center;">Email</th>
                <th style="text-align: center;">Access</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $admin)
                <tr>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>

                    <td>
                        <div class="col-md-12">
                            <div class="form-check">
                            @foreach ($userAccesses as $userAccess)
                                            @if ($admin->id === $userAccess->user_id)
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="home" name="home" {{ $userAccess->home === 1 ? 'checked' : '' }} disabled>
                                                        <label class="form-check-label" id="home">Home</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="about" name="about" {{ $userAccess->about === 1 ? 'checked' : '' }} disabled>
                                                        <label class="form-check-label" id="about">About</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="academic" name="academic" {{ $userAccess->academic === 1 ? 'checked' : '' }} disabled>
                                                        <label class="form-check-label" for="academic">Academic</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="research" name="research" {{ $userAccess->research === 1 ? 'checked' : '' }} disabled>
                                                        <label class="form-check-label" for="research">Research</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="student" name="student" {{ $userAccess->student === 1 ? 'checked' : '' }} disabled>
                                                        <label class="form-check-label" for="student">Student</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="news" name="news" {{ $userAccess->news === 1 ? 'checked' : '' }} disabled>
                                                        <label class="form-check-label" for="news">News</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="contact" name="contact" {{ $userAccess->contact === 1 ? 'checked' : '' }} disabled>
                                                        <label class="form-check-label" for="contact">Contact</label>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        @endforeach
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Edit button -->
                        <a href="adminedit-alladmin/{{$admin->id}}" class="btn btn-warning">Edit</a>
                        <!-- Delete form -->
                        <a href="admindelete-admin/{{$admin->id }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>

<script>
    // Menangani klik tombol "Save Changes"
$('#saveChangesBtn').on('click', function() {
    var formData = [];

    // Mengumpulkan data perubahan checkbox
    $('input[type="checkbox"]').each(function() {
        var userId = $(this).data('user-id');
        var accessType = $(this).data('access-type');
        var isChecked = $(this).is(':checked') ? 1 : 0;

        formData.push({
            userId: userId,
            accessType: accessType,
            isChecked: isChecked
        });
    });

    // Lakukan permintaan Ajax untuk menyimpan perubahan ke sisi server
    $.ajax({
        url: '/save-changes',
        type: 'POST',
        data: { formData: formData },
        success: function(response) {
            // Tangani respons dari permintaan Ajax (jika diperlukan)
            alert('Changes saved successfully!');
        },
        error: function(xhr) {
            // Tangani kesalahan yang terjadi selama permintaan Ajax (jika diperlukan)
            alert('An error occurred while saving changes.');
        }
    });
});

</script>

    
@endsection
