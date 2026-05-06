<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
public function index()
{
    return response()->json(
        Post::all(),
        200,
        [],
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    );
}

    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return response()->json($post, 201);
    }
}
