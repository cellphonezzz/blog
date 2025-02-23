<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $roles = User::getRoles();
        $users = User::all();
        return view('admin.users.create', compact('users', 'roles'));
    }
}
