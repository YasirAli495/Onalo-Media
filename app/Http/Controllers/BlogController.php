<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blogs.blog', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
            'published_at' => 'nullable|date',
        ]);

        // Check if there is an image and move it to the 'public/images' folder
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Get the image file
            $image = $request->file('image');
            // Generate a unique name for the image
            $imageName = time() . '_' . $image->getClientOriginalName();
            // Move the image to the public/images folder
            $image->move(public_path('images'), $imageName);
            // Set the image path
            $imagePath = 'images/' . $imageName;
        }

        // Create the blog entry
        Blog::create([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'image' => $imagePath,
            'published_at' => $request->published_at,
        ]);

        return redirect()->route('admin.blogs.blog')->with('success', 'Blog Created Successfully!');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
            'published_at' => 'nullable|date',
        ]);

        // Handle the image upload if there's a new image
        $imagePath = $blog->image;
        if ($request->hasFile('image')) {
            // Delete the old image
            if (File::exists(public_path($blog->image))) {
                File::delete(public_path($blog->image));
            }

            // Get the new image and move it
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);

            // Update the image path
            $imagePath = 'images/' . $imageName;
        }

        // Update the blog entry
        $blog->update([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'image' => $imagePath,
            'published_at' => $request->published_at,
        ]);

        return redirect()->route('admin.blogs.blog')->with('success', 'Blog Updated Successfully!');
    }

    public function destroy(Blog $blog)
    {
        // Delete the image if it exists
        if (File::exists(public_path($blog->image))) {
            File::delete(public_path($blog->image));
        }

        // Delete the blog entry
        $blog->delete();

        return redirect()->route('admin.blogs.blog')->with('success', 'Blog Deleted Successfully!');
    }
}

