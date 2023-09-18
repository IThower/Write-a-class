<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class PostController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response(view('posts.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $post = new Post($request->all());
        $user = Auth::user();
        $user->posts()->save($post);


        //uncomment the line below to try the prologue package.

        // Alert::add('primary', 'You have successfully published a blog post')->flash();

        // Alert::info('This is the info instance message after creating a blog post')->flash();

        // return redirect()->route('posts.create')->with('alerts', Alert::all());

        //comment the line below to try the prologue package.

        return redirect()->route('posts.create')
            ->with('success', 'Post created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return response(view('posts.edit', compact('post')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post): \Illuminate\Http\RedirectResponse
    {
        $post->delete();
        $user = Auth::user();

        if ($user->role === 2) {

            return redirect()->route('dashboard')
                ->with('success', 'Post Deletado!!!');
        } else {
            return redirect()->route('posts.index')
                ->with('success', 'Post Deletado!!!');
        }
    }

    public function all_posts()
    {

        // todos os posts > blog 

        $posts = Post::where('isAproved', true)->latest()->get();
        return response(view('posts.blog', compact('posts')));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // Blog Post - dentro

        return response(view('posts.show', compact('post')));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // meus posts, posts relacionados ao user id 

        $posts = Post::where('user_id', Auth::user()->id)
            ->where('isAproved', true)
            ->latest()
            ->get();
        return response(view('posts.index', compact('posts')));
    }

    public function isAproved(Post $post, Request $request)
    {
        $isApproved = $request->input('isAproved');

        $post->update([
            'isAproved' => $isApproved,
        ]);

        return redirect()->route('dashboard')
            ->with('success', $isApproved ? 'Post Aprovado!!!' : 'Post Desaprovado!!!');
    }

}