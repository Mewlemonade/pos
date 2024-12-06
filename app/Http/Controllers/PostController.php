<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        $posts = Post::all(); 
        return view('post.index', ['posts' => $posts]);
        //return view('post.show', ['post' => $post]);
    }
    public function show($id)
    {
        $post = Post::find($id);
        if (!$post) 
        {
            abort(404); 
        }
        return view('post.show', ['post' => $post]);
    }

    public function delete($id)
    {
        $post = Post::find($id);
        if ($post) {
            $post->delete();
            return redirect()->route('post.index')->with('success', 'Post berhasil dihapus');
        }
        return redirect()->route('post.index')->with('error', 'Post tidak ditemukan');
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        if (!$post) {
            return redirect()->route('post.index')->with('error', 'Postingan tidak ditemukan.');
        }

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
        
        return redirect()->route('post.index')->with('success', 'Postingan berhasil diperbarui.');
    }

}
