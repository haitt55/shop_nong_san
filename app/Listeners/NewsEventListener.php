<?php

namespace App\Listeners;

class NewsEventListener
{
    public function onCreated($event)
    {
        flash()->success('Success!', 'Tạo mới tin tức thành công.');
    }

    public function onUpdated($event)
    {
        flash()->success('Success!', 'Cập nhật tin tức thành công.');
    }

    public function onDeleted($event)
    {
        flash()->success('Success!', 'Xóa tin tức thành công.');
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
