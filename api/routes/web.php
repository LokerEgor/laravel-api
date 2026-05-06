<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
});

Route::post('/posts', function (Request $request) {
    Post::create([
        'title' => $request->title,
        'content' => $request->content,
    ]);
    return redirect('/api/posts');
});

Route::get('/api/posts', [PostController::class, 'index']);
Route::post('/api/posts', [PostController::class, 'store']);