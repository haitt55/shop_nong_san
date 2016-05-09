<?php

namespace App\Listeners;

class ProductCategoryEventListener
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
            'App\Events\ProductCategory\WasCreated',
            'App\Listeners\ProductCategoryEventListener@onCreated'
        );
        $events->listen(
            'App\Events\ProductCategory\WasUpdated',
            'App\Listeners\ProductCategoryEventListener@onUpdated'
        );
        $events->listen(
            'App\Events\ProductCategory\WasDeleted',
            'App\Listeners\ProductCategoryEventListener@onDeleted'
        );
    }
}
