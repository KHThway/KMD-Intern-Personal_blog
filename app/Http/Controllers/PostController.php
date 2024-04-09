<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required'],
            'sub_title' => ['required'],
            'content' => ['required'],
            'category' => ['required'],
            'cuisine' => ['required'],
            'recipes' => ['required'],
            'image1' => ['image'],
            'image2' => ['image'],
            'image3' => ['image'],
            'image4' => ['image'],
            'image5' => ['image'],
            'date' => ['date']
        ]);

        if ($request->file('image1') ?? false) {
            $image = $request->file('image1');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/images', $filename);
            $validated['image1'] = $filename;
        }

        if ($request->file('image2') ?? false) {
            $image = $request->file('image2');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/images', $filename);
            $validated['image2'] = $filename;
        }

        if ($request->file('image3') ?? false) {
            $image = $request->file('image3');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/images', $filename);
            $validated['image3'] = $filename;
        }

        if ($request->file('image4') ?? false) {
            $image = $request->file('image4');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/images', $filename);
            $validated['image4'] = $filename;
        }

        if ($request->file('image5') ?? false) {
            $image = $request->file('image5');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/images', $filename);
            $validated['image5'] = $filename;
        }

        Post::create($validated);

        return redirect('/posts')->with('successAlert', 'Added a New Post');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => ['required'],
            'sub_title' => ['required'],
            'content' => ['required'],
            'category' => ['required'],
            'cuisine' => ['required'],
            'recipes' => ['required'],
            'image1' => ['image'],
            'image2' => ['image'],
            'image3' => ['image'],
            'image4' => ['image'],
            'image5' => ['image'],
        ]);

        if ($request->file('image1') ?? false) {
            $image = $request->file('image1');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/images', $filename);
            $validated['image1'] = $filename;
        }

        if ($request->file('image2') ?? false) {
            $image = $request->file('image2');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/images', $filename);
            $validated['image2'] = $filename;
        }

        if ($request->file('image3') ?? false) {
            $image = $request->file('image3');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/images', $filename);
            $validated['image3'] = $filename;
        }

        if ($request->file('image4') ?? false) {
            $image = $request->file('image4');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/images', $filename);
            $validated['image4'] = $filename;
        }

        if ($request->file('image5') ?? false) {
            $image = $request->file('image5');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/images', $filename);
            $validated['image5'] = $filename;
        }

        Post::findOrFail($id)->update($validated);

        return redirect('/posts')->with('successAlert', 'Post edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::find($id)->delete();

        return redirect('/posts')->with('successAlert', 'Post Deleted');
    }
}
