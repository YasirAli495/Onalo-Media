@include('admin.header')


<div class="container">
    <h2>Edit Contact Details</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('admin.contact.update') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control" value="{{ $contact->phone ?? '' }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" value="{{ $contact->email ?? '' }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Location</label>
            <textarea name="location" class="form-control">{{ $contact->location ?? '' }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>



@include('admin.footer')