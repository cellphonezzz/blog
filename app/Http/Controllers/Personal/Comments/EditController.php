<?php

namespace App\Http\Controllers\Personal\Comments;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Post;

class EditController extends Controller
{
    public function __invoke(Comment $comment)
    {

        return view('personal.comments.edit', compact('comment'));
    }
}
