<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function create()
    {
        return view('BlogPost.create');
    }

    public function store(Request $request)
    {
        $blogPost = new BlogPost;
        $blogPost->title = $request->title;
        $blogPost->body = $request->body;
        $blogPost->save();

        return redirect('/blog/' . $blogPost->id);
    }

    public function show(BlogPost $blogPost)
    {
        return view('BlogPost.view', ['blogPost' => $blogPost]);
    }
}
