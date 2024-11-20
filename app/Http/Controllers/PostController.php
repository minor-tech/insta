<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'caption' => 'nullable|string|max:255',
        ]);

        $path = $request->file('image')->store('posts', 'public');

        Post::create([
            'user_id' => Auth::id(),
            'image_path' => $path,
            'caption' => $request->caption,
        ]);

        return redirect()->back()->with('success', 'Post created successfully!');
    }
}
