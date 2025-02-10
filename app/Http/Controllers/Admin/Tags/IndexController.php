<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tags = tag::all();
        return view('admin.tags.index', compact('tags'));
    }
}
