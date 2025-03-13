<!-- resources/views/emails/admin_reply.blade.php -->

<div>
    <h3>Admin Reply to Your Message</h3>
    <p><strong>Message:</strong></p>
    <p>{{ $message->message }}</p> <!-- User's original message -->

    <p><strong>Admin's Reply:</strong></p>
    <p>{{ $reply }}</p> <!-- Admin's reply -->
</div>
