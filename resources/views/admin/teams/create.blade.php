@include('admin.header')

<h2 class="text-center"> Add New Member</h2>

<form action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data" class="m-5">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
    </div>
    
    <div class="mb-3">
        <label for="role" class="form-label">Role</label>
        <input type="text" name="role" id="role" class="form-control" placeholder="Role" required>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" name="image" id="image" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Add Team Member</button>
</form>





@include('admin.footer')
