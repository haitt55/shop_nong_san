<?php

namespace App\Events\ProductCategory;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Models\ProductCategory;

class WasCreated extends Event
{
    use SerializesModels;

    public $productCategory;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(ProductCategory $productCategory)
    {
        $this->productCategory = $productCategory;
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
