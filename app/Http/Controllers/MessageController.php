<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\JobApplication;
use App\Models\Blog;
use App\Models\Team;
use App\Models\Job;
use App\Models\Visit;
use App\Mail\AdminReplyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function create()
    {
        return view('ContactUs'); // Display the contact form view
    }

    public function store(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'country' => 'required|string',
            'message' => 'required|string',
        ]);

        // Save the message in the database
        Message::create($validated);

        // Redirect back with success message
        return back()->with('success', 'Your message has been sent.');
    }

    public function index()
    {
        // Retrieve all messages from the database
        $messages = Message::all(); 
        return view('admin.messages', compact('messages')); // Show all messages in the admin panel
    }

    public function reply(Request $request, Message $message)
    {
        // Validate the reply input
        $validated = $request->validate([
            'reply' => 'required|string',
        ]);

        // Update the reply in the database
        $message->update([
            'reply' => $validated['reply'],
        ]);

        // Send the reply email to the user
        try {
            Mail::to($message->email)->send(new AdminReplyMail($message, $validated['reply']));
            return back()->with('success', 'Reply sent successfully.');
        } catch (\Exception $e) {
            // Handle email sending failure
            return back()->with('error', 'Failed to send the email. Please try again.');
        }
    }

    public function showDashboard()
    {
        // Collect statistics for the admin dashboard
        $totalMessages = Message::count();
        $applicationsCount = JobApplication::count();
        $totalBlogs = Blog::count();
        $totalTeamMembers = Team::count();
        $totalJobs = Job::count();

        // Track page visits
        Visit::create([
            'page' => '/home',  // Track visits to the homepage
        ]);
        $totalVisits = Visit::count();

        return view('admin.dashboard', compact('totalMessages', 'applicationsCount', 'totalBlogs', 'totalTeamMembers', 'totalJobs', 'totalVisits'));
    }

    public function destroy(Message $message)
    {
        // Delete the message from the database
        $message->delete();
        return back()->with('success', 'Message deleted successfully.');
    }
}
