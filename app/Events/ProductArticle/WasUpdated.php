<?php

namespace App\Events\ProductArticle;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Models\ProductArticle;

class WasUpdated extends Event
{
    use SerializesModels;

    public $productArticle;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(ProductArticle $productArticle)
    {
        $this->productArticle = $productArticle;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
