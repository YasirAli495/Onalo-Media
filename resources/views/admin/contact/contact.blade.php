@include('admin.header')

<div class="container">
    <a href="{{ route('admin.contact.create') }}" class="btn btn-success text-light">Add New Contact Details</a>

    <h2>Contact Details</h2>
    
    <div class="card p-3 mb-4">
        <h4>Company Contact Information</h4>
        <table class="table table-bordered">
            <tr>
                <th>Phone Number:</th>
                <td>{{ $contact->phone ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th>Email Address:</th>
                <td>{{ $contact->email ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th>Location:</th>
                <td>{{ $contact->location ?? 'N/A' }}</td>
            </tr>
        </table>
        <a href="{{ route('admin.contact.edit') }}" class="btn btn-primary">Edit Contact Details</a>
    </div>

    
</div>

@include('admin.footer')