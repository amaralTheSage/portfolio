<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('pages.projects', ['posts' => Post::paginate(3)]);
    }

    public function show(Post $post)
    {
        return view('pages.project-page', ['post' => $post]);
    }

    public function create()
    {
        return view('pages.publishing');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required'],
            'techs' => ['required'],
            'short_description' => ['required'],
            'description' => ['required'],
            'images' => ['required'],
        ]);

        $imagePath = $request->file('images')->store('projects', 'public');

        $validated['images'] = $imagePath;

        Post::create([
            'title' => $validated['title'],
            'techs' => $validated['techs'],
            'short_description' => $validated['short_description'],
            'description' => $validated['description'],
            'images' => $validated['images'] ?? 'NAO DEU CERTO',
            'website' => $request['website'],
            'github' => $request['github'],
        ]);

        return to_route('posts.index');
    }
}
