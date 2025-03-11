<?php

namespace App\Http\Controllers\Admin;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function create()
    {
        return view('admin.jobs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'description' => 'required|string',
            'salary' => 'required|numeric',
            'location' => 'required|string|max:255',
            'job_type' => 'required|string|in:FULL_TIME,PART_TIME,CONTRACT',
            'employer_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $logoPath = null;
        if ($request->hasFile('employer_logo')) {
            $fileName = uniqid() . '.' . $request->file('employer_logo')->getClientOriginalExtension();
            $path = public_path('images');
            $request->file('employer_logo')->move($path, $fileName);
            $logoPath = 'images/' . $fileName;
        }

        Job::create([
            'title' => $request->input('title'),
            'company' => $request->input('company'),
            'description' => $request->input('description'),
            'salary' => $request->input('salary'),
            'location' => $request->input('location'),
            'job_type' => $request->input('job_type'),
            'employer_logo' => $logoPath,
        ]);

        return redirect()->route('admin.jobs.index')->with('success', 'Job added successfully!');
    }

    public function index()
    {
        $jobs = Job::all();
        return view('admin.jobs.index', compact('jobs'));
    }

    public function edit($id)
    {
        $job = Job::findOrFail($id);
        return view('admin.jobs.edit', compact('job'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'description' => 'required|string',
            'salary' => 'required|numeric',
            'location' => 'required|string|max:255',
            'job_type' => 'required|string|in:FULL_TIME,PART_TIME,CONTRACT',
            'employer_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $job = Job::findOrFail($id);

        if ($request->hasFile('employer_logo')) {
            // Delete the old logo if it exists
            if ($job->employer_logo && file_exists(public_path($job->employer_logo))) {
                unlink(public_path($job->employer_logo));
            }
            $fileName = uniqid() . '.' . $request->file('employer_logo')->getClientOriginalExtension();
            $path = public_path('images');
            $request->file('employer_logo')->move($path, $fileName);
            $logoPath = 'images/' . $fileName;
        } else {
            $logoPath = $job->employer_logo;
        }

        $job->update([
            'title' => $request->input('title'),
            'company' => $request->input('company'),
            'description' => $request->input('description'),
            'salary' => $request->input('salary'),
            'location' => $request->input('location'),
            'job_type' => $request->input('job_type'),
            'employer_logo' => $logoPath,
        ]);

        return redirect()->route('admin.jobs.index')->with('success', 'Job updated successfully!');
    }

    public function destroy($id)
    {
        $job = Job::findOrFail($id);

        if ($job->employer_logo && file_exists(public_path($job->employer_logo))) {
            unlink(public_path($job->employer_logo));
        }

        $job->delete();

        return redirect()->route('admin.jobs.index')->with('success', 'Job deleted successfully!');
    }

    public function show()
    {
        $jobs = Job::all(); // Retrieve all job records
        return view('Career', compact('jobs'));
    }
    

}
