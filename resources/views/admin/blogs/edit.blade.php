@include('admin.header')

<form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data" class="m-5">
    @csrf
    @method('PUT') <!-- Make sure to include PUT for updates -->
    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
    </div>
    <div class="mb-3">
        <label>Author</label>
        <input type="text" name="author" class="form-control" value="{{ old('author', $blog->author) }}" required>
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" required>{{ old('description', $blog->description) }}</textarea>
    </div>
    <div class="mb-3">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
        @if($blog->image)
        <div>
            <img src="{{ asset($blog->image) }}" alt="Blog Image" class="img-fluid mt-2" width="150">
        </div>
        
        @endif
    </div>
    <div class="mb-3">
        <label>Published Date</label>
        <input type="date" name="published_at" class="form-control" value="{{ old('published_at', $blog->published_at ? \Carbon\Carbon::parse($blog->published_at)->format('Y-m-d') : '') }}">
    </div>
    <button type="submit" class="btn btn-success">Update Blog</button>
</form>

@include('admin.footer')
