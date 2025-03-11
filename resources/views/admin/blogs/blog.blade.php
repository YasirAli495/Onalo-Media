@include('admin.header')

<a href="{{ route('admin.blogs.create') }}" class="btn btn-primary m-5">Add New Blog</a>
<div class="table-responsive container">
<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Description</th>
            <th>Image</th>
            <th>Published Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($blogs as $blog)
        <tr>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->author }}</td>
            <td>{{ Str::limit($blog->description, 50) }}</td>
            <td><img src="{{ asset($blog->image) }}" width="80"></td>

            <td>{{ $blog->published_at }}</td>
            <td>
                <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Del</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

@include('admin.footer')