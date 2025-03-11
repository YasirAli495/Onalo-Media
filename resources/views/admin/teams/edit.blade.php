@include('admin.header')

<div class="container mt-5">
    <h2 class="mb-4">Update Team Member</h2>
    
    <form action="{{ route('teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" value="{{ old('name', $team->name) }}" placeholder="Enter name" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label for="role" class="form-label">Role:</label>
            <input type="text" name="role" value="{{ old('role', $team->role) }}" placeholder="Enter role" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <input type="file" name="image" class="form-control">
            @if($team->image)
                <div class="mt-2">
                    <label>Current Image:</label>
                    <img src="{{ asset($team->image) }}" alt="Current Image" width="100" class="img-thumbnail">
                </div>
            @endif
        </div>
        
        <button type="submit" class="btn btn-primary">Update Team Member</button>
    </form>
</div>

@include('admin.footer')
