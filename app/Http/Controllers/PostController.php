<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use Exception;
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
        ]);

        try {
            Post::create([
                'title' => $validated['title'],
                'techs' => $validated['techs'],
                'short_description' => $validated['short_description'],
                'description' => $validated['description'],
                'website' => $request['website'],
                'github' => $request['github'],
            ]);
        } catch (Exception $e) {
            dump($e);
        } finally {
            $post = Post::where('title', '=', $validated['title'])->first();

            foreach ($request->images as $image) {
                $imagePath = $image->store('projects/'.$post->id, 'public');
                Image::create([
                    'post_id' => $post->id,
                    'address' => $imagePath,
                ]);
            }
        }

        return to_route('posts.index');
    }
}
