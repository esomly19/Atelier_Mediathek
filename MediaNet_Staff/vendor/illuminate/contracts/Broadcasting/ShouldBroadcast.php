<?php

namespace Illuminate\Contracts\Broadcasting;

<<<<<<< HEAD
=======
use Illuminate\Broadcasting\Channel;

>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
interface ShouldBroadcast
{
    /**
     * Get the channels the event should broadcast on.
     *
<<<<<<< HEAD
     * @return \Illuminate\Broadcasting\Channel|\Illuminate\Broadcasting\Channel[]
=======
     * @return Channel|Channel[]
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     */
    public function broadcastOn();
}
