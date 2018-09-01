<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class PostController extends Controller
{
    //

    public function timeline(){
        $posts = Post::find(1);
        return $posts;
    }
}
