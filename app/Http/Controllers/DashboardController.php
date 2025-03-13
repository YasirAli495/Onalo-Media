<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
{
    if (!Auth::check() || Auth::user()->name == null) {
        return redirect()->route('login')->with('error', 'Please log in first.');
    }

    return view('admin.dashboard'); // Load the admin dashboard
}

    public function printmedia()
    {
        return view('admin.printmedia');  
    }

    public function digitalmedia()
    {
        return view('admin.digitalmedia');  
    }

   

    

    public function user()
    {
        return view('admin.user');  
    }

   
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

        
        $imagePath = null;
        if ($request->hasFile('image')) {
           
            $image = $request->file('image');
           
            $imageName = time() . '_' . $image->getClientOriginalName();
            
            $image->move(public_path('images'), $imageName);
       
            $imagePath = 'images/' . $imageName;
        }

       
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

      
        $imagePath = $blog->image;
        if ($request->hasFile('image')) {
           
            if (File::exists(public_path($blog->image))) {
                File::delete(public_path($blog->image));
            }

            
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);

           
            $imagePath = 'images/' . $imageName;
        }

        
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
       
        if (File::exists(public_path($blog->image))) {
            File::delete(public_path($blog->image));
        }

      
        $blog->delete();

        return redirect()->route('admin.blogs.blog')->with('success', 'Blog Deleted Successfully!');
    }    
    
}
