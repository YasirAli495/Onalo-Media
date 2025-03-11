@include('admin.header')

<div class="container">
    <h2>Add New Contact Details</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.contact.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Location</label>
            <textarea name="location" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>

@include('admin.footer')
