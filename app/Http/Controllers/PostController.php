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

    public function index()
    {
        // Posts data
        $posts = [
            [
                'username' => 'username123',
                'user_avatar' => 'https://via.placeholder.com/40', // User profile picture
                'post_image' => 'https://via.placeholder.com/600x400', // Post picture
                'likes' => 5432,
                'caption' => 'This is an example caption. #hashtag',
                'comments' => 120
            ],
            [
                'username' => 'user456',
                'user_avatar' => 'https://via.placeholder.com/40',
                'post_image' => 'https://via.placeholder.com/600x400',
                'likes' => 123,
                'caption' => 'Another example caption. #coding',
                'comments' => 45
            ]
        ];

        // Suggested Users data
        $suggestedUsers = [
            [
                'username' => 'user1',
                'fullname' => 'User One',
                'profile_picture' => 'https://via.placeholder.com/40',
                'followed_by' => 'user_123'
            ],
            [
                'username' => 'user2',
                'fullname' => 'User Two',
                'profile_picture' => 'https://via.placeholder.com/40',
                'followed_by' => 'user_456'
            ]
        ];

        return view('layouts.home', compact('posts', 'suggestedUsers'));
    }
}
