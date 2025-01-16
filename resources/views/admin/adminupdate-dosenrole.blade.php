{{-- @extends('layouts.admin')

@section('content')
<div class="container">
    <div class="container-fluid my-5">
        <h3 class="text-center" style="font-size: 50px">Update Dosen Role</h3>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Current Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dosenusers as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role_id == 1 ? 'Dosen as Admin' : 'Dosen' }}</td>
                                <td>
                                    <form class="update-role-form" method="POST">
                                        @csrf
                                        <select name="role_id" class="form-control">
                                            <option value="1" {{ $user->role_id == 1 ? 'selected' : '' }}>Dosen as Admin</option>
                                            <option value="4" {{ $user->role_id == 4 ? 'selected' : '' }}>Dosen</option>
                                        </select>
                                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                                        <button type="submit" class="btn btn-primary mt-2">Update Role</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const forms = document.querySelectorAll('.update-role-form');
        forms.forEach(form => {
            form.addEventListener('submit', function (event) {
                event.preventDefault();

                const formData = new FormData(this);
                const userId = formData.get('user_id');

                fetch(`/updatedosenrole/${userId}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                    },
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Role updated successfully!');
                        window.location.reload();  // Reload the page to see the changes
                    } else {
                        alert('Failed to update role. Please try again.');
                    }
                })
                .catch(error => console.error('Error:', error));
            });
        });
    });
</script>
@endsection --}}
