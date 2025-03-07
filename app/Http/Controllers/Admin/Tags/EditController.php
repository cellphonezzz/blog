<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }
}
