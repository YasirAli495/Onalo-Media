<?php

namespace App\Http\Controllers;
use App\Models\Card;
use App\Models\Blog;
use Illuminate\Http\Request;

class UserBlogController extends Controller
{
    public function index()
    {

        $blogs = Blog::latest()->get();

        
        return view('Blog', compact('blogs'));
    }

    public function home()
{
    $blogs = Blog::latest()->get();
    return view('Home', compact('blogs')); 
}


    public function show($id)
    {
        
        $blog = Blog::findOrFail($id);

        
        return view('Blog', compact('blog'));
    }

    public function indexPrintMedia()
    {
        $cards = Card::where('category', 'print')->get();
        return view('Printmedia', compact('cards'));
    }

    // Show Digital Media Cards on User Side
    public function indexDigitalMedia()
    {
        $cards = Card::where('category', 'digital')->get();
        return view('Digitalmedia', compact('cards'));
    }

   

    public function getBlogDetails($id)
{
    $blog = Blog::findOrFail($id);

    return response()->json([
        'title' => $blog->title,
        'author' => $blog->author,
        'date' => \Carbon\Carbon::parse($blog->published_at)->format('F d, Y'),
        'description' => $blog->description,
    ]);
}

    
}
