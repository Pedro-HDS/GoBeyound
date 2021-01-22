<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index()
    {
        $posts_info = Post::paginate(5);
        return view('postagem.index', compact('posts_info'));
    }

    public function show($id)
    {
        $post_info = Post::find($id);

        if (!$post_info)
            return redirect()->back();

        return view('post_info', compact('post_info'));
    }
}