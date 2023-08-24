<?php

namespace App\Listeners;

use App\Events\UserOnlineEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserOnlineListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserOnlineEvent $event)
    {
        broadcast(new UserOnlineEvent($event->user))->toOthers();
    }
}
