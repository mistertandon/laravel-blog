<?php

namespace App\Http\Controllers;

use App\Post;

class PageController extends Controller {

    /**
     * This function is used to display index us page.
     */
    public function index_PCM() {

        $recentPosts = array();
        $recentPosts = Post::orderBy('id', 'DESC')->offset(0)->limit(3)->get();

        return view('pages.welcome')->withPosts($recentPosts);
    }

    /**
     * This function is usedus to display about us page.
     */
    public function aboutUs_PCM() {

        $fullName = 'Parvesh Tandon';
        $githubUserName = 'mistertandon';

        return view('pages.about_us')->withName($fullName)->withGithub($githubUserName);
    }

    /**
     * This function is used to display contact us page.
     */
    public function contactUs_PCM() {

        $emailId = 'enggparveshtandon@gmail.com';

        return view('pages.contact_us')->with('contactEmailId', $emailId);
    }

    /**
     * This function is used to display career page.
     */
    public function career_PCM() {

        $data = Array();

        $data['jobPosition'] = 'Node Js';

        return view('pages.career')->withData($data);
    }

}
