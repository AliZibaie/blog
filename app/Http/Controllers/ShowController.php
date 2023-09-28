<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function showPosts()
    {
        return view('posts.showPosts');
    }
}
