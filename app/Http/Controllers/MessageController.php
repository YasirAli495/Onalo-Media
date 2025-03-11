<?php

namespace App\Http\Controllers;
use App\Models\Message;
use App\Models\JobApplication;
use App\Models\Blog;
use App\Models\Team;
use App\Models\Job;
use App\Models\Visit;



use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create()
    {
        return view('ContactUs'); // Your contact form view
    }

    public function store(Request $request)
    {
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

        return back()->with('success', 'Your message has been sent.');
    }

    public function index()
{
    $messages = Message::all(); // Get all messages
    return view('admin.messages', compact('messages'));
}

public function reply(Request $request, Message $message)
{
    $validated = $request->validate([
        'reply' => 'required|string',
    ]);

    // Store the admin's reply
    $message->update([
        'reply' => $validated['reply'],
    ]);

    return back()->with('success', 'Reply sent successfully.');
}

public function showDashboard()
{
    
    $totalMessages = Message::count();

    
    $applicationsCount = JobApplication::count();

    
    $totalBlogs = Blog::count();  

    
    $totalTeamMembers = Team::count();  

    
    $totalJobs = Job::count();  

    Visit::create([
        'page' => '/home',  // Here, you specify the name of the page being visited
    ]);
    $totalVisits = Visit::count(); 

    
    return view('admin.dashboard', compact('totalMessages', 'applicationsCount', 'totalBlogs', 'totalTeamMembers', 'totalJobs', 'totalVisits'));
}


public function destroy(Message $message)
{
    $message->delete();
    return back()->with('success', 'Message deleted successfully.');
}


}
