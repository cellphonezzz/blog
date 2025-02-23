<?php

namespace App\Http\Controllers\Main\Likes;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\Comments\StoreRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(Post $post)
    {
        auth()->user()->likedPosts()->toggle($post->id);

        return redirect()->back();
    }
}
