<?php

namespace App\Events\IntroducePolicy;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Models\IntroducePolicy;

class WasCreated extends Event
{
    use SerializesModels;

    public $introducePolicy;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(IntroducePolicy $introducePolicy)
    {
        $this->introducePolicy = $introducePolicy;
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
