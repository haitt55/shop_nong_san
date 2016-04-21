<?php

namespace App\Listeners;

class ProductArticleEventListener
{
    public function onCreated($event)
    {
        flash()->success('Success!', 'Tạo mới bài viết thành công.');
    }

    public function onUpdated($event)
    {
        flash()->success('Success!', 'Cập nhật bài viết thành công.');
    }

    public function onDeleted($event)
    {
        flash()->success('Success!', 'Xóa bài viết thành công.');
    }

    public function subscribe($events)
    {
        $events->listen(
            'App\Events\ProductArticle\WasCreated',
            'App\Listeners\ProductArticleEventListener@onCreated'
        );
        $events->listen(
            'App\Events\ProductArticle\WasUpdated',
            'App\Listeners\ProductArticleEventListener@onUpdated'
        );
        $events->listen(
            'App\Events\ProductArticle\WasDeleted',
            'App\Listeners\ProductArticleEventListener@onDeleted'
        );
    }
}
