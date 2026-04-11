<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with(['author', 'category'])
            ->where('show', 1)
            ->latest()
            ->take(6)
            ->get();

        $categories = Category::withCount('posts')->get();

        return view('home', compact('posts', 'categories'));
    }

    public function stories(Request $request)
    {
        $query = Post::with(['author', 'category'])->where('show', 1);

        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('content', 'like', '%' . $request->search . '%');
            });
        }

        $posts      = $query->latest()->paginate(6)->withQueryString();
        $categories = Category::all();

        return view('stories.index', compact('posts', 'categories'));
    }

    public function storiesDetail(Post $post)
    {
        abort_if(!$post->show, 404);
        $post->load(['author', 'category']);

        $related = Post::with(['author', 'category'])
            ->where('show', 1)
            ->where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->latest()
            ->take(3)
            ->get();

        return view('stories.detail-post', compact('post', 'related'));
    }
}