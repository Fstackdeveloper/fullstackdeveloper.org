<?php

namespace App\Listeners;

use App\Events\AdminBoot;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdminSideMenu
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
     * @param  AdminBoot  $event
     * @return void
     */
    public function handle(AdminBoot $event)
    {
        //
    }
}
