<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tags\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Tag;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,Tag $tag)
    {
        $data = $request->validated();
        $tag->update($data);
        return redirect()->route('admin.tag.show', $tag->id);
    }
}
