@include('admin.header')

<!-- resources/views/admin/create-card.blade.php -->




<div class="container mt-5">
    <h1 class="mb-4 text-center">Add New Card</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow p-4">
        <form action="{{ route('admin.cards.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>
        
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="description" required></textarea>
            </div>
        
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select name="category" class="form-select" id="category" required>
                    <option value="home">Home</option>
                    <option value="about">About Us</option>
                    <option value="print">Print Media</option>
                    <option value="digital">Digital Media</option>
                </select>
            </div>
        
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="image" required>
            </div>
        
            <button type="submit" class="btn btn-primary w-100">Add Card</button>
        </form>
        
    </div>
</div>

@include('admin.footer')