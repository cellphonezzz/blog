<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tags\StoreRequest;
use Illuminate\Http\Request;
use App\Models\Tag;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Tag::create($data);
        return redirect()->route('admin.tag.index');
    }
}
