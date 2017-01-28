<?php

namespace App\Listeners;

use App\Events\PostEdited;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Mail;

class ContentDepartmentEditPost
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PostEdited  $event
     * @return void
     */
    public function handle(PostEdited $event)
    {
        $editedPostInfo = array();
        $editedPostInfo['title'] = $event->post->title;
        $editedPostInfo['post_id'] = $event->post->id;
        
        Mail::send('emails.events.posts.edit_post', $editedPostInfo, function ($message) use ($editedPostInfo){
            
            $message->from('noreply@gmail.com');
            $message->to('enggparveshtandon@gmail.com');
            $message->subject($editedPostInfo['title']);
        });

        return true;
    }
}
