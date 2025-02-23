<?php

namespace App\Http\Controllers\Personal\Likes;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;

class DeleteController extends Controller
{
    public function __invoke(Post $post)
    {
        $posts = auth()->user()->likedPosts()->detach($post->id);
        return redirect()->route('personal.like.index');
}
}
