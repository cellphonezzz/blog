<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use App\Service\PostService;
use Illuminate\Http\Request;
use App\Models\Post;

class BaseController extends Controller
{
    public $service;

    public function __construct(PostService $service) {
        $this->service = $service;
    }

}
