<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image'
        ]);

        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('posts', $filename, 'public');
        } else {
            $filename = 'default.jpg';
        }

        $post = new Post();

        $post->user_id = Auth::User()->id;
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->image = $filename;
        $post->content = $request->content;
        $post->status = $request->status ? true : false;
        $post->is_approved = true;

        $post->save();

        $post->categories()->attach($request->categories);
        $post->tags()->attach($request->tags);

        return redirect('admin/posts')->with('toast_success', 'Data Post Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            // 'image' => 'required|image'
        ]);

        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();

            if (Storage::disk('public')->exists('posts/' . $post->image)) {
                if ($post->image !== 'default.jpg') {
                    Storage::disk('public')->delete('posts/' . $post->image);
                }
            }

            $request->image->storeAs('posts', $filename, 'public');
        } else {
            $filename = $post->image;
        }

        Post::where('id', $post->id)->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'image' => $filename,
            'content' => $request->content,
            'status' => $request->status ? true : false,
            'is_approved' => true,
        ]);

        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);

        return redirect('admin/posts')->with('toast_success', 'Data Post Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if (Storage::disk('public')->exists('posts/' . $post->image)) {
            Storage::disk('public')->delete('posts/' . $post->image);
        }
        $post->categories()->detach();
        $post->tags()->detach();

        Post::destroy($post->id);
        return redirect('admin/posts')->with('toast_success', 'Data Post Berhasil Dihapus');
    }
}
