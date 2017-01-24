<?php

namespace App\Http\Controllers;

class PagesController extends Controller{

    /**
     * This function is used to display about us page.
     */
    public function aboutUs_PCM(){

        $fullName = 'Parvesh Tandon';
        $githubUserName = 'mistertandon';

        return view('pages.about')->withName($fullName)->withGithub($githubUserName);
    }

    /**
     * This function is used to display contact us page.
     */
    public function contactUs_PCM(){

        $emailId = 'enggparveshtandon@gmail.com';

        return view('pages.contact')->with('contactEmailId', $emailId);
    }
    
    /**
     * This function is used to display career page.
     */
    public function career_PCM(){

        $data = Array();

        $data['jobPosition'] = 'Node Js';

        return view('pages.career')->withData($data);
    }
    
    /**
     * This function is used to display index us page.
     */
    public function index_PCM(){
        
    }    
}
