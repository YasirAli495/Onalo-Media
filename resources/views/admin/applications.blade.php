@include('admin.header')

<div class="container">
    <h2>Job Applications</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Job Title</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>CV</th>
                    <th>Submitted</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applications as $app)
                <tr>
                    <td>{{ $app->id }}</td>
                    <td>{{ $app->job->title }}</td>
                    <td>{{ $app->full_name }}</td>
                    <td>{{ $app->email }}</td>
                    <td>{{ $app->phone }}</td>
                    <td><a href="{{ asset($app->cv) }}" target="_blank" class="btn btn-info btn-sm text-light">View CV</a></td>
                    <td>{{ $app->created_at->format('Y-m-d H:i') }}</td>
                    <td>
                        <form action="{{ route('applications.destroy', $app->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this application?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm text-light">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $applications->links() }}
</div>

@include('admin.footer')
