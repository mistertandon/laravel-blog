<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller {
    
    public function __construct(){
        
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $posts = Post::orderBy('id', 'DESC')->paginate(3);

        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug'
        ));

        $post = new Post;

        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->slug = $request->input('slug');

        /**
         * Submitted <post> data is going to save into database's posts table
         * using below syntax.
         */
        $post->save();

        Session::flash('success', "Post with title \"$request->title\" saved successfully.");

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

        $post = Post::find($id);

        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {

        $post = array();

        $post = Post::find($id);

        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
       
        $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required:max:255',
            'slug' => "required|alpha_dash|min:5|max:255|unique:posts,slug,$id"
        ));
        
        $post = Post::find($id);
        
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->slug = $request->input('slug');
        
        $post->save();
        
        Session::flash('success', "Post with \"$post->title\" updated successfully.");

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        
        $post = Post::find($id);
        
        $postTitle = null;
        $postTitle = $post->title;

        Session::flash('success', "Post with title \"$postTitle\" has been deleted.");
        
        return redirect()->route('posts.index');
    }

    /**
     * This function is used to retrieve blog post corresponding to provided slug url.
     * 
     * @param type $slugParam
     */
    public function singlePost_PCM($slugParam) {

        $post = array();
        $post = Post::where('slug', '=', $slugParam)->first();

        return view('blogs.single')->withPost($post);
    }
}
