<?php

namespace App\Http\Controllers\Main\Comments;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\Comments\StoreRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, Post $post)
    {
        $data = $request->validated();

        $data['user_id'] = auth()->user()->id;
        $data['post_id'] = $post->id;

        Comment::create($data);

        return redirect()->route('main.show', $post->id);
    }
}
