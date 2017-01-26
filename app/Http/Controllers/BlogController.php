<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller {

    /**
     * This function is used to retrieve blog post corresponding to provided slug url.
     * 
     * @param type $slugParam
     */
    public function singlePost_BCM($slugParam) {

        $post = array();
        $post = Post::where('slug', '=', $slugParam)->first();

        return view('blogs.single')->withPost($post);
    }
    
    /**
     * This function is used to get all posts for Blog archieve page.
     */
    
    public function index(){
        
        $posts = array();
        $posts = Post::paginate(3);
        
        return view('blogs.index')->withPosts($posts);
    }

}
