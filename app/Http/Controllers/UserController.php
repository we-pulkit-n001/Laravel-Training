<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function show()
    {
        $users = User::with('post')->find(2);
        return $users;
    }

    public function delete()
    {
        User::find(2)->delete();
        // Post::where('user_id', 1)->delete();
    }
}
