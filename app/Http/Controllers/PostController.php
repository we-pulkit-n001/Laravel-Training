<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function show()
    {
        $post = Post::find(1);
        return $post;
    }
}
