<?php

namespace App\Listeners;

class NewsCategoryEventListener
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
            'App\Events\NewsCategory\WasCreated',
            'App\Listeners\NewsCategoryEventListener@onCreated'
        );
        $events->listen(
            'App\Events\NewsCategory\WasUpdated',
            'App\Listeners\NewsCategoryEventListener@onUpdated'
        );
        $events->listen(
            'App\Events\NewsCategory\WasDeleted',
            'App\Listeners\NewsCategoryEventListener@onDeleted'
        );
    }
}
