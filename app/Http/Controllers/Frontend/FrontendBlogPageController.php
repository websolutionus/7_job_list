<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontendBlogPageController extends Controller
{
    function index() : View {
        $blogs = Blog::where('status', 1)->latest()->paginate();
        return view('frontend.pages.blog-index', compact('blogs'));
    }

    function show(string $slug) : View {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('frontend.pages.blog-details', compact('blog'));
    }
}
