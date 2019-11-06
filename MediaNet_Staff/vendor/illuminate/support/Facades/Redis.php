<?php

namespace Illuminate\Support\Facades;

/**
<<<<<<< HEAD
 * @method static \Illuminate\Redis\Connections\Connection connection(string $name = null)
 *
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
 * @see \Illuminate\Redis\RedisManager
 * @see \Illuminate\Contracts\Redis\Factory
 */
class Redis extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'redis';
    }
}
