<?php

namespace Illuminate\Support\Facades;

use Illuminate\Contracts\Broadcasting\Factory as BroadcastingFactoryContract;

/**
<<<<<<< HEAD
 * @method static void connection($name = null);
 * @method static \Illuminate\Broadcasting\Broadcasters\Broadcaster channel(string $channel, callable|string  $callback)
 * @method static mixed auth(\Illuminate\Http\Request $request)
 *
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
 * @see \Illuminate\Contracts\Broadcasting\Factory
 */
class Broadcast extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BroadcastingFactoryContract::class;
    }
}
