<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke(User $user)
    {
        return view('admin.users.show', compact('user'));
    }
}
