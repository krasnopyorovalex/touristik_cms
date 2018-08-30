<?php

namespace App\Listeners;

use App\Events\RedirectDetected;
use App\Redirect;

class NewRedirectListener
{
    /**
     * Handle the event.
     *
     * @param  RedirectDetected  $event
     * @return void
     */
    public function handle(RedirectDetected $event): void
    {
        $redirect = new Redirect;
        $redirect->url_old = $event->urlOld;
        $redirect->url_new = $event->urlNew;

        $redirect->save();
    }
}
