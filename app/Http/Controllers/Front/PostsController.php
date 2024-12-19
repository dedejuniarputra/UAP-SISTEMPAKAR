<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(3);
        $categories = Category::all();
        $tags = Tag::all();
        return view('front.posts.index', compact('posts', 'tags', 'categories'));
    }

    public function show(Post $post)
    {
        // $post = Post::where('slug', $slug)->first();

        $posts = Post::latest()->take(3)->get();
        $categories = Category::all();
        $tags = Tag::all();
        if (Post::where('slug', $post->slug)->first()) {
            $post->increment('view_count');
        }
        return view('front.posts.show', compact('post', 'categories', 'tags', 'posts'));
    }

    public function postsByCategory($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $posts = $category->posts()->where('status', 1)->latest()->paginate(3);
        $tags = Tag::all();
        $categories = Category::all();
        return view('front.posts.index', compact('posts', 'categories', 'tags'));
    }

    public function postsByTag($slug)
    {
        $tag = Tag::where('slug', $slug)->first();
        $posts = $tag->posts()->where('status', 1)->latest()->paginate(3);
        $tags = Tag::all();
        $categories = Category::all();
        return view('front.posts.index', compact('posts', 'categories', 'tags'));
    }

    public function blogSearch()
    {
        $query = request('query');
        $tags = Tag::all();
        $categories = Category::all();
        $posts = Post::where("title", "like", "%$query%")->latest()->paginate(3);

        return view('front.posts.index', compact('posts', 'categories', 'tags'));
    }
}
