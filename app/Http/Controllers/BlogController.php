<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogTag;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(Request $request): View
    {
        $categories = BlogCategory::orderBy('sort_order')->get();
        $tags = BlogTag::all();
        
        $selectedCategory = $request->query('category');
        $search = $request->query('q');

        $query = BlogPost::published()
            ->with(['category', 'author', 'tags'])
            ->orderBy('published_at', 'desc');

        if ($selectedCategory) {
            $query->whereHas('category', fn ($q) => $q->where('slug', $selectedCategory));
        }

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%")
                  ->orWhere('body', 'like', "%{$search}%");
            });
        }

        $featuredPost = null;
        if (!$selectedCategory && !$search) {
            $featuredPost = (clone $query)->where('is_featured', true)->first();
            if ($featuredPost) {
                $query->where('id', '!=', $featuredPost->id);
            }
        }

        $posts = $query->paginate(9)->withQueryString();

        return view('pages.insights.index', compact('posts', 'featuredPost', 'categories', 'tags', 'selectedCategory', 'search'));
    }

    public function show(BlogPost $post): View
    {
        abort_if($post->status !== 'published' || ($post->published_at && $post->published_at->isFuture()), 404);

        $post->load(['category', 'author', 'tags']);

        $relatedPosts = BlogPost::published()
            ->where('id', '!=', $post->id)
            ->where('blog_category_id', $post->blog_category_id)
            ->take(3)
            ->get();

        if ($relatedPosts->isEmpty()) {
            $relatedPosts = BlogPost::published()
                ->where('id', '!=', $post->id)
                ->take(3)
                ->get();
        }

        return view('pages.insights.show', compact('post', 'relatedPosts'));
    }
}
