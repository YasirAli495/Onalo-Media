<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    // Display Print Media Cards
    public function indexPrintMedia()
    {
        $cards = Card::where('category', 'print')->get();
        return view('admin.printmedia', compact('cards'));
    }

    // Display Digital Media Cards
    public function indexDigitalMedia()
    {
        $cards = Card::where('category', 'digital')->get();
        return view('admin.digitalmedia', compact('cards'));
    }

    public function indexHome()
    {
        
        $cards = Card::whereIn('category', ['print', 'digital'])->get();
        return view('admin.home', compact('cards'));
    }

    
    public function indexAbout()
    {
        
        $cards = Card::whereIn('category', ['print', 'digital'])->get();
        return view('admin.about', compact('cards'));
    }

    // Show Form to Create New Card
    public function create()
    {
        return view('admin.create-card');
    }

    // Store New Card
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'category' => 'required|in:home,about,print,digital',
        ]);

        // Upload Image
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }

        Card::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'category' => $request->category,
        ]);

        return redirect()->route('admin.printmedia')->with('success', 'Card Added Successfully');
    }

    // Edit Card Form
    public function edit($id)
    {
        $card = Card::findOrFail($id);
        return view('admin.edit-card', compact('card'));
    }

    // Update Card
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required|in:print,digital,home,about',
        ]);

        $card = Card::findOrFail($id);

        // Handle Image Upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($card->image && file_exists(public_path($card->image))) {
                unlink(public_path($card->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $card->image = 'images/' . $imageName;
        }

        // Update other fields
        $card->title = $request->title;
        $card->description = $request->description;
        $card->category = $request->category;
        $card->save();

        return redirect()->route('admin.printmedia')->with('success', 'Card Updated Successfully');
    }

    // Delete Card
    public function destroy($id)
    {
        $card = Card::findOrFail($id);

        // Delete image file if exists
        if ($card->image && file_exists(public_path($card->image))) {
            unlink(public_path($card->image));
        }

        $card->delete();
        return redirect()->route('admin.printmedia')->with('success', 'Card Deleted Successfully');
    }

    
}
