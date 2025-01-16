<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Models\UserAccess;

class InitializeUserAccess
{
    /**
     * Handle the event.
     *
     * @param  \App\Events\UserCreated  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
        // Mendapatkan user yang baru dibuat
        $user = $event->user;

        // Membuat record baru di tabel user_access dengan nilai awal 0
        UserAccess::create([
            'user_id' => $user->id,
            'access_type' => 0,
        ]);
    }
}
