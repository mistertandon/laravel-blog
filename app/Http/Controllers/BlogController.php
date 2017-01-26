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

}
