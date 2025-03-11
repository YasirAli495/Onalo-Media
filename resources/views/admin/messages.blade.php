@include('admin.header')

<div class="container mt-4">
    <h2 class="mb-4 text-center">Messages</h2>

    @foreach ($messages as $message)
        <div class="message mb-4 p-4 border rounded shadow-sm">
            <!-- Message Sender -->
            <h4>{{ $message->first_name }} {{ $message->last_name }}</h4>
            <p><strong>Email:</strong> {{ $message->email }}</p>
            <p><strong>Phone:</strong> {{ $message->phone }}</p>
            <p><strong>Country:</strong> {{ $message->country }}</p>

            <!-- Original Message -->
            <p><strong>Message:</strong> {{ $message->message }}</p>

            <!-- Admin's Reply Section -->
            @if($message->reply)
                <div class="alert alert-success">
                    <strong>Admin Reply:</strong> {{ $message->reply }}
                </div>
            @else
                <!-- Reply Form -->
                <form action="{{ url('/admin/messages/' . $message->id . '/reply') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="reply{{ $message->id }}">Write Your Reply</label>
                        <textarea name="reply" id="reply{{ $message->id }}" class="form-control" rows="4" placeholder="Write your reply here"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Send Reply</button>
                </form>
            @endif

            <!-- Delete Message Button -->
            <form action="{{ url('/admin/messages/' . $message->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger text-light" onclick="return confirm('Are you sure you want to delete this message?')">Delete Message</button>
            </form>
        </div>
    @endforeach
</div>

@include('admin.footer')
