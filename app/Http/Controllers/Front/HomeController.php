<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->limit(3)->get();
        return view('front.home.index', compact('posts'));
    }
}
