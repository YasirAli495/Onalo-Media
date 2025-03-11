<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Mail;

class JobApplicationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'cv' => 'required|mimes:pdf,doc,docx|max:2048',
            'job_id' => 'required|exists:jobs,id',
        ]);

        if ($request->hasFile('cv')) {
            $cv = $request->file('cv');
            $cvName = time() . '_' . $cv->getClientOriginalName();
            $cvPath = 'cvs/' . $cvName;
            $cv->move(public_path('cvs'), $cvName);
        }

        // Save to the database
        JobApplication::create([
            'job_id' => $request->job_id,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'cv' => $cvPath, // Use the correct $cvPath to store in DB
        ]);

        // Send email notification to admin (optional)
        Mail::raw("New job application received for Job ID: {$request->job_id}.", function ($message) {
            $message->to('admin@example.com')
                    ->subject('New Job Application');
        });

        return back()->with('success', 'Your application has been submitted successfully!');
    }

    public function index()
    {
        $applications = JobApplication::latest()->paginate(10);
        return view('admin.applications', compact('applications'));
    }


    public function destroy($id)
    {
        
        $application = JobApplication::findOrFail($id);

        
        if (file_exists(public_path($application->cv))) {
            unlink(public_path($application->cv));
        }

       
        $application->delete();

        
        return back()->with('success', 'Application deleted successfully!');
    }

    

}
