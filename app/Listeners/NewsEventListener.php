<?php

namespace App\Listeners;

class NewsEventListener
{
    public function onCreated($event)
    {
        flash()->success('Success!', 'created success.');
    }

    public function onUpdated($event)
    {
        flash()->success('Success!', 'updated success.');
    }

    public function onDeleted($event)
    {
        flash()->success('Success!', 'delete success.');
    }

    public function subscribe($events)
    {
        $events->listen(
            'App\Events\ENews\WasCreated',
            'App\Listeners\NewsEventListener@onCreated'
        );
        $events->listen(
            'App\Events\ENews\WasUpdated',
            'App\Listeners\NewsEventListener@onUpdated'
        );
        $events->listen(
            'App\Events\ENews\WasDeleted',
            'App\Listeners\NewsEventListener@onDeleted'
        );
    }
}
