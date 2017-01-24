<?php

namespace App\Http\Controllers;

class PagesController extends Controller{

    /**
     * This function is used to display about us page.
     */
    public function aboutUs_PCM(){

        return view('pages.about');
    }

    /**
     * This function is used to display contact us page.
     */
    public function contactUs_PCM(){

        return view('pages.contact');
    }
    
    /**
     * This function is used to display index us page.
     */
    public function index_PCM(){
        
    }    
}
