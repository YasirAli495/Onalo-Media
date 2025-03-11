<?php

namespace App\Http\Controllers;
use App\Models\Card;
use App\Models\Team;
use App\Models\Blog;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    // Show all team members
    public function index()
    {
        $teamMembers = Team::all(); // Fetch all team members
        return view('admin.teams.index', compact('teamMembers'));
    }

    // Show all team members for the home page
    public function home()
    {
        // Fetch cards from the 'home' category
        $cards = Card::whereIn('category', ['print', 'digital'])->get();

        $blogs = Blog::latest()->get();


        // Fetch all team members
        $teamMembers = Team::all();

        // Return the view with both cards and team members
        return view('home', compact('cards', 'teamMembers', 'blogs'));
    }

    // Show all team members for the about page
    public function about()
    {
        $cards = Card::whereIn('category', ['print', 'digital'])->get();
        $teamMembers = Team::all(); // Fetch all team members
        return view('about-us', compact('cards', 'teamMembers'));
    }
    
    public function printmedia()
{
    $cards = Card::where('category', 'print')->get();
    $teamMembers = Team::all(); // Fetching team members

    return view('/printmedia', compact('cards','teamMembers')); 
}

public function Digitalmedia()
{
    $cards = Card::where('category', 'print')->get();
    $teamMembers = Team::all(); // Fetching team members

    return view('/digitalmedia', compact('cards','teamMembers')); 
}

    // Show form to add a new team member
    public function create()
    {
        return view('admin.teams.create');
    }

    // Store a new team member in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Added max size for better control
        ]);

        // Handle image upload and store in public/images folder
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            // Storing the image in public/images folder
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName; // Save path relative to the public folder
        }

        // Save the new team member data
        Team::create([
            'name' => $request->name,
            'role' => $request->role,
            'image' => $imagePath,
        ]);

        return redirect()->route('teams.index')->with('success', 'Team member added successfully!');
    }

    // Show form to edit an existing team member
    public function edit(Team $team)
    {
        return view('admin.teams.edit', compact('team')); // Make sure the view path is correct
    }

    // Update existing team member data
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Image is optional for update
        ]);

        // Handle image upload if a new image is uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($team->image && file_exists(public_path($team->image))) {
                unlink(public_path($team->image));
            }

            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            // Store the new image in public/images
            $request->file('image')->move(public_path('images'), $imageName);
            $team->image = 'images/' . $imageName; // Save path relative to the public folder
        }

        // Update the team member data
        $team->name = $request->name;
        $team->role = $request->role;
        $team->save();

        return redirect()->route('teams.index')->with('success', 'Team member updated successfully!');
    }

    // Delete a team member
    public function destroy(Team $team)
    {
        // Delete image file if exists
        if ($team->image && file_exists(public_path($team->image))) {
            unlink(public_path($team->image));
        }

        $team->delete();

        return redirect()->route('teams.index')->with('success', 'Team member deleted successfully!');
    }

        
}
