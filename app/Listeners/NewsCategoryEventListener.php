<?php

namespace App\Listeners;

class NewsCategoryEventListener
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
