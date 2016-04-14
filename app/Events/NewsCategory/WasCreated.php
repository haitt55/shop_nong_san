<?php

namespace App\Events\NewsCategory;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Models\NewsCategory;

class WasCreated extends Event
{
    use SerializesModels;

    public $category;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(NewsCategory $category)
    {
        $this->category = $category;
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
