<?php

namespace App\Listeners;

class ProductEventListener
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
            'App\Events\Product\WasCreated',
            'App\Listeners\ProductEventListener@onCreated'
        );
        $events->listen(
            'App\Events\Product\WasUpdated',
            'App\Listeners\ProductEventListener@onUpdated'
        );
        $events->listen(
            'App\Events\Product\WasDeleted',
            'App\Listeners\ProductEventListener@onDeleted'
        );
    }
}
