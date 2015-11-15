<?php

namespace App\Listeners;

class CategoryEventListener
{
    public function onCreated($event)
    {
        flash()->success('Success!', 'Category successfully created.');
    }

    public function onUpdated($event)
    {
        flash()->success('Success!', 'Category successfully updated.');
    }

    public function onDeleted($event)
    {
        flash()->success('Success!', 'Category successfully deleted.');
    }

    public function subscribe($events)
    {
        $events->listen(
            'App\Events\Category\WasCreated',
            'App\Listeners\CategoryEventListener@onCreated'
        );
        $events->listen(
            'App\Events\Category\WasUpdated',
            'App\Listeners\CategoryEventListener@onUpdated'
        );
        $events->listen(
            'App\Events\Category\WasDeleted',
            'App\Listeners\CategoryEventListener@onDeleted'
        );
    }
}
