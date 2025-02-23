<?php

namespace App\Http\Controllers\Personal\Comments;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Comments\UpdateRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Comment $comment)
    {
        $data = $request->validated();
        $comment->update($data);
        return redirect()->route('personal.comment.index');
    }
}
