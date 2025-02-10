<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class UpdateController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $data = request()->validate([
            'title' => 'string'
        ]);
        $tag->update($data);
        return redirect()->route('admin.tag.show', $tag->id);
    }
}
