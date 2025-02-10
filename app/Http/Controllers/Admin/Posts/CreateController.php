<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class CreateController extends Controller
{
    public function __invoke()
    {
        $posts = Post::all();
        return view('admin.posts.create', compact('posts'));
    }
}
