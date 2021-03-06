<?php

namespace App\Providers;
use App\Events\UserRegisteredEvent;
use App\Listeners\UserRegisteredListener;
use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
       UserRegisteredEvent::class => [
           UserRegisteredListener::class,
       ],
    ];
}