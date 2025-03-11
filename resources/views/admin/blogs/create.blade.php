@include('admin.header')


<form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data" class="mb-3 m-5">
    @csrf
    <div class="mb-3 m-5">
        <label>Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Author</label>
        <input type="text" name="author" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
    </div>
    <div class="mb-3">
        <label>Published Date</label>
        <input type="date" name="published_at" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Create Blog</button>
</form>


@include('admin.footer')