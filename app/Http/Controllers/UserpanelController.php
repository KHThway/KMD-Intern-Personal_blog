<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class UserpanelController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->input('categories');
        $cuisine = $request->input('cuisine');

        if ($category) {
            $posts = Post::where('category', $category)->latest()->paginate(9);
        } elseif ($cuisine) {
            $posts = Post::where('cuisine', $cuisine)->latest()->paginate(9);
        } else {
            $posts = Post::latest()->paginate(9);
        }



        return view('/userpanel/index', compact('posts'));
    }

    public function show(string $id)
    {
        $post = Post::find($id);

        return view('userpanel/show', compact('post'));
    }

    public function home(Request $request)
    {
        $category = $request->input('category');

        if ($category) {
            $posts = Post::where('category', $category)->latest()->paginate(5);
        } else {
            $posts = Post::latest()->paginate(5);
        }



        $recents = Post::latest()->paginate(2);

        return view('userpanel.home', compact('posts', 'recents'));
    }
}
