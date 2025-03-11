@include('admin.header')

<form action="{{ route('admin.cards.update', $card->id) }}" method="POST" enctype="multipart/form-data" class="container mt-5">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Title:</label>
        <input type="text" name="title" id="title" value="{{ $card->title }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <textarea name="description" id="description" class="form-control" required>{{ $card->description }}</textarea>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Image:</label>
        <input type="file" name="image" id="image" class="form-control" accept="image/*">
    </div>

    <div class="mb-3">
        <label for="category" class="form-label">Category:</label>
        <select name="category" id="category" class="form-select" required>
            <option value="print" {{ $card->category == 'print' ? 'selected' : '' }}>Print Media</option>
            <option value="digital" {{ $card->category == 'digital' ? 'selected' : '' }}>Digital Media</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Update Card</button>
</form>

@include('admin.footer')
