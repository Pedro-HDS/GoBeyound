<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts_info = Posts::paginate(5);
        return view('posts.index', compact('posts_info'));
    }

    public function show($id)
    {
        $post_info = Posts::find($id);

        if (!$post_info)
            return redirect()->back();

        return view('post_info.show', compact('post_info'));
    }
}