<?php

namespace App\Listeners;

use App\Events\NewPostCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Mail;

class ContentDepartment {

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewPostCreated  $event
     * @return void
     */
    public function handle(NewPostCreated $event) {

        $addedPostInfo = array();
        $addedPostInfo['title'] = $event->post->title;
        
        Mail::send('emails.events.posts.add_post', $addedPostInfo, function ($message) use ($addedPostInfo){
            
            $message->from('noreply@gmail.com');
            $message->to('enggparveshtandon@gmail.com');
            $message->subject($addedPostInfo['title']);
        });

        return true;
    }

}
