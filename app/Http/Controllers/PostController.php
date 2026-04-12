<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('category')->latest()->get();
        return view('dashboard.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'picture' => 'required|image|mimes:jpg,png|max:1024',
            'category_id' => 'required|exists:categories,id'
        ]);

        if($request->hasFile('picture')) {
            $validated['picture'] = $request->file('picture')->store('posts', 'public');
        }

        $validated['user_id'] = Auth::id();

        Post::create($validated);
        return redirect()->route('dashboard.posts.index')->with('success', 'Post berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $post->load('author', 'category');
        return view('dashboard.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('dashboard.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'picture' => 'image|mimes:jpg,png|max:1024',
            'category_id' => 'required|exists:categories,id'
        ]);

        if($request->hasFile('picture')) {
            Storage::disk('public')->delete($post->picture);
            $validated['picture'] = $request->file('picture')->store('posts', 'public');
        }

        $post->update($validated);
        return redirect()->route('dashboard.posts.index')->with('success', 'Post Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if($post->picture) {
            Storage::disk('public')->delete($post->picture);
        }

        $post->delete();
        return redirect()->route('dashboard.posts.index')->with('success', 'Post Berhasil Dihapus!');
    }
}
