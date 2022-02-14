<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PagesController extends Controller
{
    public function index()
    {
        $post = new Post;
        return view('homepage', compact('post'));
    }

    public function view()
    {
        return view('preview');
    }

    public function about()
    {
        return view('about');
    }

    public function howTo()
    {
        return view('how-to');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required',
            'slug' => 'sometimes|unique:posts,slug',
        ]);
        $post = new Post;
        $post->content = $request->content;

        if(!empty($request->code)) {
            $post->code = $request->code;
        } else {
            $post->code = substr(md5(microtime()),rand(0,26),5);
        }

        if(!empty($request->slug)) {
            $post->slug = $request->slug;
        } else {
            $post->slug = substr(md5(microtime()),rand(0,26),5);
        }

        if(!empty($request->title)) {
            $post->title = $request->title;
        }

        if(!empty($request->author_name)) {
            $post->author_name = $request->author_name;
        }

        if(!empty($request->description)) {
            $post->description = $request->description;
        }

        $post->save();

        $code = $post->code;
        $slug = $post->slug;
        return view('preview', compact('code', 'slug'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('page', compact('post'));

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('homepage', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $validated = $request->validate([
            'content' => 'required',
            'slug' => 'sometimes|unique:posts,slug,'.$post->id,
            'submitted_code' => ["required", Rule::in([$post->code])],
        ]);

        $post->content = $request->content;

        if(!empty($request->code)) {
            $post->code = $request->code;
        } else {
            $post->code = substr(md5(microtime()),rand(0,26),5);
        }

        if(!empty($request->slug)) {
            $post->slug = $request->slug;
        } else {
            $post->slug = substr(md5(microtime()),rand(0,26),5);
        }

        if(!empty($request->title)) {
            $post->title = $request->title;
        }

        if(!empty($request->author_name)) {
            $post->author_name = $request->author_name;
        }

        if(!empty($request->description)) {
            $post->description = $request->description;
        }

        $post->save();

        $code = $post->code;
        $slug = $post->slug;
        return view('preview', compact('code', 'slug'));

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
