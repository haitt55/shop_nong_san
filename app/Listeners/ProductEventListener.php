<?php

namespace App\Listeners;

class ProductEventListener
{
    public function onCreated($event)
    {
        flash()->success('Success!', 'Tạo mới sản phẩm thành công.');
    }

    public function onUpdated($event)
    {
        flash()->success('Success!', 'Cập nhật sản phẩm thành công.');
    }

    public function onDeleted($event)
    {
        flash()->success('Success!', 'Xóa sản phẩm thành công.');
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
