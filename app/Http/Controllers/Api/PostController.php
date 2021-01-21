<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controllers;
use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts_info = Posts::select();

        if ($request->has('title')) {
            $contacts->where('title', 'LIKE', '%' . $request->get('title') . '%');
        }

        return $posts_info->paginate(15);
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string|image',
            'image' => 'string',
        ], [
            'subject.required' => 'Campo obrigatório',
        ]);

        if ($validation->fails())
            return response()->json(['errors' => $validation->errors()], 422);

        try {
            $post_info = Posts::create(
                $request->only([
                    'title',
                    'content',
                    'image',
                ])
            );

            return response($post_info, 201);
        } catch(\Exception $e) {
            return response()->json(['message'=> 'Ocorreu um erro inesperado'], 500);
        }
    }
}
