<?php

namespace App\Listeners;

class ProductCategoryEventListener
{
    public function onCreated($event)
    {
        flash()->success('Success!', 'Tạo mới danh mục thành công.');
    }

    public function onUpdated($event)
    {
        flash()->success('Success!', 'Cập nhật danh mục thành công.');
    }

    public function onDeleted($event)
    {
        flash()->success('Success!', 'Xóa danh mục thành công.');
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
